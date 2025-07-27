<?php 
function displaySignupForm() {
    echo '
    <div class="container-form">
    <h4>Sign Up</h4>
    <form method="post" class="big-form color-form">
      <h4> First Name: </h4>
        <input type="text" name="first_name" required>
        <h4> Last Name: </h4>
        <input type="text" name="last_name" required>
        <h4> Email: </h4>
        <input type="email" name="email" required>
        <h4> Age: </h4>
        <input type="number" name="age" required>
        <h4> Username: </h4>
        <input type="text" name="username" required>
        <h4> Password: </h4>
        <input type="password" name="password" required>
        <h4> Repeat Password: </h4>
        <input type="password" name="confirm_password" required>
        <button type="submit">Sign Up</button>    
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
