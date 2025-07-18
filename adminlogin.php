<?php
session_start();

// Hardcoded credentials (change as needed)
$correct_username = "admin";
$correct_password = "admin"; // Change this to your real password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['admin'] = true;
        header("Location: loginconfirmed.html");
        exit;
    } else {
        echo "<script>alert('Invalid username or password');window.location.href='login.html';</script>";
        exit;
    }
}
?>
