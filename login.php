<?php include('./sections/document-start.php'); ?>

    <!-- header -->
    <?php

    include("./sections/users.php");
    include("./sections/forms.php");

    $error = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $user = findUser($username, $password);

        if ($user) {
            $_SESSION['current_user'] = $username;
            header('Location: account.php');
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    }

    include("./sections/header.php");
    set_header($contact, $navbarItems);
    displayLoginForm($error);

    ?>

    <!-- footer section -->
    <?php include('./sections/footer.php'); set_footer($footer); ?>

<?php include('./sections/document-end.php'); ?>