<?php

include("./data.php");
include("./sections/header.php");
include("./sections/slider.php");


// hero section function
if (!function_exists('hero')) {
    function hero($contact, $navbarItems, $sliders) {
        echo '<div class="hero_area">';

            echo '<header class="header_section">';
                echo '<div class="header_top">';
                    echo '<div class="container">';
                        contact($contact);
                    echo '</div>';
                echo '</div>';

                echo '<div class="header_bottom">';
                    echo '<div class="container-fluid">';
                        echo '<nav class="navbar navbar-expand-lg custom_nav-container ">';
                            echo '<a class="navbar-brand" href="index.php">';
                                echo '<img src="images/logo.png" alt="Logo">';
                            echo '</a>';

                            echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
                                echo '<span class=""> </span>';
                            echo '</button>';

                            echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
                                echo '<div class="d-flex mr-auto flex-column flex-lg-row align-items-center">';
                                    navigation($navbarItems);
                                echo '</div>';

                                echo '<div class="quote_btn-container">';
                                    Auth();
                                echo '</div>';
                            echo '</div>';
                        echo '</nav>';
                    echo '</div>';
                echo '</div>';
            echo '</header>';

            slider($sliders);

        echo '</div>';
    }
}
