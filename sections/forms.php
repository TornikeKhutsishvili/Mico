<?php 
function displaySignupForm() {
    echo '
    <div class="container-form">
    <h2>Sign Up</h2>
    <form method="post" class="big-form color-form">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Sign Up</button>
    </form>
    <a href="login.php">Already have an account? Login</a>
    </div>
    ';
}

function displayLoginForm($error = '') {
    if ($error) {
        echo "<p style='color:red;'>$error</p>";
    }
    echo '
    <div class="container-form">
    <h2>Login</h2>
    <form method="post" class="big-form color-form">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    <a href="signup.php">Don\'t have an account? Sign Up</a>
    </div>
    ';
}
