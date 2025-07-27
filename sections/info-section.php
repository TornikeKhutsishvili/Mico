<?php

include("./data.php");


// info function
if (!function_exists('info')) {

    function info($data)
    {
        echo '
        <section class="info_section">
            <div class="container">
                <div class="info_top">
                    <div class="info_logo">
                        <a href="../index.php">
                            <img src="images/logo.png" alt="Info logo">
                        </a>
                    </div>
                    <div class="info_form">
                        <form action="./sections/subscribe.php" method="POST">
                            <input type="email" name="email" placeholder="Your email" required>
                            <button>Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="info_bottom layout_padding2">
                    <div class="row info_main_row">
                        <div class="col-md-6 col-lg-3">
                            <h5>Address</h5>
                            <div class="info_contact">
                                <a href="https://www.google.com/maps/search/?api=1&query=Tbilisi" target="_blank">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>' . htmlspecialchars($data['contact']['address']) . '</span>
                                </a>
                                <a href="tel:' . str_replace(' ', '', $data['contact']['phone']) . '">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Call ' . htmlspecialchars($data['contact']['phone']) . '</span>
                                </a>
                                <a href="mailto:' . htmlspecialchars($data['contact']['email']) . '">
                                    <i class="fa fa-envelope"></i>
                                    <span>' . htmlspecialchars($data['contact']['email']) . '</span>
                                </a>
                            </div>
                            <div class="social_box">';
                            foreach ($data['socials'] as $platform => $link) {
                                echo '
                                <a href="' . htmlspecialchars($link) . '" target="_blank">
                                    <i class="fa fa-' . htmlspecialchars($platform) . '" aria-hidden="true"></i>
                                </a>';
                            }
                            echo '
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="info_links">
                                <h5>Useful link</h5>
                                <div class="info_links_menu">';
                                foreach ($data['links'] as $link) {
                                    $class = isset($link['active']) && $link['active'] ? ' class="active"' : '';
                                    echo '
                                    <a href="' . htmlspecialchars($link['url']) . '"' . $class . '>' . htmlspecialchars($link['name']) . '</a>';
                                }
                                echo '
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="info_post">
                                <h5>LATEST POSTS</h5>';
                                foreach ($data['latest_posts'] as $post) {
                                    echo '
                                    <div class="post_box">
                                        <div class="img-box">
                                            <img src="' . htmlspecialchars($post['image']) . '" alt="Post logo">
                                        </div>
                                        <p>' . htmlspecialchars($post['text']) . '</p>
                                    </div>';
                                }
                                echo '
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="info_post">
                                <h5>News</h5>';
                                foreach ($data['news'] as $post) {
                                    echo '
                                    <div class="post_box">
                                        <div class="img-box">
                                            <img src="' . htmlspecialchars($post['image']) . '" alt="News logo">
                                        </div>
                                        <p>' . htmlspecialchars($post['text']) . '</p>
                                    </div>';
                                }
                            echo '
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>';
    }

}
