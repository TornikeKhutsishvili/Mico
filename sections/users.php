<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

function addUser($userData) {
    $_SESSION['users'][] = $userData;
}

function findUser($username, $password) {
    foreach ($_SESSION['users'] as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            return $user;
        }
    }
    return null;
}

function isLoggedIn() {
    return isset($_SESSION['current_user']);
}

function currentUser() {
    return $_SESSION['current_user'] ?? null;
}

function displayUserPanel() {
    $currentUser = currentUser();
    $users = $_SESSION['users'];

    echo "<div class='container-form'>";
    echo "<h1>Welcome, " . htmlspecialchars($currentUser) . "!</h1>";

    echo "<h3>All Registered Users:</h3>";
    echo "<ul>";
    foreach ($users as $user) {
        $fullName = '';
        if (isset($user['first_name']) && isset($user['last_name'])) {
            $fullName = $user['first_name'] . ' ' . $user['last_name'];
        } else {
            $fullName = $user['username'];
        }

        $ageText = isset($user['age']) ? ' - Age: ' . htmlspecialchars($user['age']) : '';

        echo "<li>" . htmlspecialchars($fullName) . " (" . htmlspecialchars($user['username']) . ")$ageText</li>";
    }
    echo "</ul>";
    echo "</div>";

    echo "<script>";
    echo "let users = " . json_encode($users) . ";";
    echo "console.log('Users:', users);";
    echo "let currentUser = '" . htmlspecialchars($currentUser) . "';";
    echo "console.log('Logged in as:', currentUser);";
    echo "</script>";
}
?>