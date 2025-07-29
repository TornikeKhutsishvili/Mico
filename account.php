<?php include('./sections/document-start.php'); ?>

    <!-- header -->
    <?php

    include("./sections/users.php");

    if (!isLoggedIn()) {
    header('Location: login.php');
    exit();
    };

    include("./sections/header.php");
    set_header($contact, $navbarItems);

    ?>

    <?php displayUserPanel(); ?>

    <!-- footer section -->
    <?php include('./sections/footer.php'); set_footer(); ?>

<?php include('./sections/document-end.php'); ?>