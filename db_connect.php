<?php
$host = "localhost";
$username = "root";
$password = ""; 
$dbname = "login_system";

// Enable error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);
    echo "Connected successfully";
} catch (mysqli_sql_exception $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
