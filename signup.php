<?php include('./sections/document-start.php'); ?>

    <!-- header -->
    <?php

    include("./sections/users.php");
    include ('./sections/forms.php');

    $error = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstName = trim($_POST['first_name']);
        $lastName = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $age = (int)$_POST['age'];
        $username = trim($_POST['username']);
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        if ($password !== $confirmPassword) {
            $error = "Passwords do not match!";
        }
        else {
            addUser([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'age' => $age,
                'username' => $username,
                'password' => $password
            ]);

            $_SESSION['current_user'] = $username;
            header('Location: account.php');
            exit();
        };

    };
    include("./sections/header.php");
    set_header($contact, $navbarItems);
    displaySignupForm();

    ?>

    <!-- footer section -->
    <?php include('./sections/footer.php'); set_footer(); ?>

<?php include('./sections/document-end.php'); ?>