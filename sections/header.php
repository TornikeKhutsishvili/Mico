<?php

include("./data.php");


// header navigation
if (!function_exists('navigation')) {
    function navigation($navs = [])
    {
        echo '<ul class="navbar-nav">';
            foreach ($navs as $nav) {
                echo '<li class="nav-item active"><a class="nav-link" href=" ' . htmlspecialchars($nav['link']) . ' ">' . htmlspecialchars($nav['nav']) . '</a></li>';
            }
        echo '</ul>';
    }
}



// contact function
if (!function_exists('contact')) {
    function contact($contact)
    {
        echo '<div class="contact_nav">
                <a href="tel:' . str_replace(' ', '', $contact['phone']) . '">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                        Call : ' . htmlspecialchars($contact['phone']) . '
                    </span>
                </a>
                <a href="mailto:' . htmlspecialchars($contact['email']) . '">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                        Email : ' . htmlspecialchars($contact['email']) . '
                    </span>
                </a>
                <a href="https://www.google.com/maps/search/?api=1&query=Tbilisi" target="_blank">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                        ' . htmlspecialchars($contact['address']) . '
                    </span>
                </a>
            </div>';
    }
}



// login and register
if (!function_exists('Auth')) {
    function Auth()
    {
        echo '
        <a href="#">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Login</span>
        </a>
        <a href="#">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Sign Up</span>
        </a>
        <form class="form-inline">
            <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </form>';
    }
}



// header
if (!function_exists('set_header')) {
    function set_header($contact, $navbarItems)
    {
        echo '<div class="hero_area">';
            echo '<header class="header_section">';
                echo '<div class="header_top">';
                    echo '<div class="container">';
                        echo contact($contact);
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
                                    echo navigation($navbarItems);
                                echo '</div>';

                                echo '<div class="quote_btn-container">';
                                    echo Auth();
                                echo '</div>';
                            echo '</div>';
                        echo '</nav>';
                    echo '</div>';
                echo '</div>';
            echo '</header>';
        echo '</div>';
    }
}