function toggleChat() {
  var chatBox = document.getElementById("chatBoxs");
  if (chatBox.style.display === "none" || chatBox.style.display === "") {
    chatBox.style.display = "flex";
  } else {
    chatBox.style.display = "none";
  }
}


const apiKey = "AIzaSyBtxlykKclqpRr-9-VF63iWcRe5i6OvZI0";
let chatHistory = [];

function generatePrompt() {
  let prompt = "";

  if (chatHistory.length > 0) {
    prompt += "**المحادثة السابقة:**\n **Previous conversation:**\n";
    chatHistory.forEach((entry) => {
      prompt += `- ${entry.role === "user" ? "سؤال المستخدم" : "رد المساعد"}: ${
        entry.text
      }\n`;
    });
    prompt += "\n";
  }

  prompt += "**السؤال الجديد:**\n";
  return prompt;
}

async function sendMessage() {
  const userInput = document.getElementById("userInput").value;
  if (!userInput.trim()) return;

  addMessage(userInput, "user");
  chatHistory.push({ role: "user", text: userInput });
  document.getElementById("userInput").value = "";

  const typingIndicator = addTypingIndicator();

  const prompt = generatePrompt() + userInput;
  const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=${apiKey}`;
  const requestBody = {
    contents: [{ role: "user", parts: [{ text: prompt }] }],
  };

  try {
    const response = await fetch(apiUrl, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(requestBody),
    });

    const data = await response.json();
    removeTypingIndicator(typingIndicator);

    if (data.candidates) {
      const reply = data.candidates[0].content.parts[0].text;
      chatHistory.push({ role: "bot", text: reply });
      addMessage(reply, "bot");
    } else {
      addMessage("❌ خطأ في الاستجابة من الذكاء الاصطناعي!", "bot");
    }
  } catch (error) {
    removeTypingIndicator(typingIndicator);
    addMessage("❌ فشل الاتصال بالخادم!", "bot");
    console.error("خطأ:", error);
  }
}

function addMessage(text, sender) {
  const chatBox = document.getElementById("chatBox");
  const messageDiv = document.createElement("div");
  messageDiv.classList.add("message", sender);
  messageDiv.textContent = text;
  chatBox.appendChild(messageDiv);
  chatBox.scrollTop = chatBox.scrollHeight;
}

function addTypingIndicator() {
  const chatBox = document.getElementById("chatBox");
  const typingDiv = document.createElement("div");
  typingDiv.classList.add("typing");
  typingDiv.innerHTML = "🤖 <span></span><span></span><span></span>";
  chatBox.appendChild(typingDiv);
  chatBox.scrollTop = chatBox.scrollHeight;
  return typingDiv;
}

function removeTypingIndicator(typingIndicator) {
  typingIndicator.remove();
}
