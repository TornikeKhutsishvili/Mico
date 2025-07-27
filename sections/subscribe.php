<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = htmlspecialchars(trim($_POST['email']));

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2>Subscription was successful for the following email: <strong>$email</strong></h2>";
    } else {
        echo "<h2>Please enter a valid email address.</h2>";
    }
} else {
    echo "<h2>No data was submitted.</h2>";
}


echo '<a href="../index.php">Back To Home</a>';

?>