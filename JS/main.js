// var bt = document.getElementById("icon");
// var minu = document.getElementById("nav");
// minu.style.right = "-250px";
// bt.onclick = function () {
//   if (minu.style.right === "-250px") {
//     minu.style.right = "0px";
//   } else {
//     minu.style.right = "-250px";
//   }
// };


let nums = document.querySelectorAll(".num");
let container = document.querySelector(".numbers .container");
let span = document.getElementById("up");

let test = false;
window.onscroll = () => {
  if ((window.ScreenY = container.offsetTop) && this.scrollY > 100) {
    span.classList.add("show");
    nums.forEach((e) => {
      let start = 0;
      let end = e.dataset.num;

      let count = setInterval(() => {
        start++;
        e.textContent = start;

        if (start == end) {
          clearInterval(count);
        }
      }, 3000 / end);
    });
  } else {
      span.classList.remove("show");
    }
};
let icon = document.getElementById("plus");
const plus = document.getElementsByClassName("box");

for (let i = 0; i < plus.length; i++) {
  plus[i].addEventListener("click", function () {
    this.classList.toggle("active");
  });
}
span.onclick = function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};



        // 



        // 