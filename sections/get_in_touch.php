<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['full_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    echo "<h2>Your for is submetted, $name!</h2>";
    echo "<p>Your message is: $message</p>";
}