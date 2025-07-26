<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

function addUser($username, $password) {
    $_SESSION['users'][] = [
        'username' => $username,
        'password' => $password
    ];
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

// ახალი ფუნქცია რაც გინდა:
function displayUserPanel() {
    $currentUser = currentUser();
    $users = $_SESSION['users'];

    echo "<h1>Welcome, " . htmlspecialchars($currentUser) . "!</h1>";

    echo "<h3>All Registered Users:</h3>";
    echo "<ul>";
    foreach ($users as $user) {
        echo "<li>" . htmlspecialchars($user['username']) . "</li>";
    }
    echo "</ul>";

    echo "<script>";
    echo "let users = " . json_encode($users) . ";";
    echo "console.log('Users:', users);";
    echo "let currentUser = '" . htmlspecialchars($currentUser) . "';";
    echo "console.log('Logged in as:', currentUser);";
    echo "</script>";
}
?>