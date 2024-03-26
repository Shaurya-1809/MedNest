<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Here, you can perform further processing, such as saving the data to a database.
    // For demonstration purposes, let's just print the received data.
    echo "Full Name: " . $fullname . "<br>";
    echo "Username: " . $username . "<br>";
    // Please note: You should not directly output passwords. This is just for demonstration.
}
?>
