<?php

include("./data.php");

if (!function_exists('set_treatment_title')) {
    function set_treatment_title($h2_title, $span) {
        echo "<h2>" . htmlspecialchars($h2_title) . " <span>" . htmlspecialchars($span) . "</span></h2>";
    }
}

if (!function_exists('treatment_section')) {
    function treatment_section($cards = []) {
        echo '<section class="treatment_section layout_padding">';
            echo '<div class="side_img">';
                echo '<img src="images/treatment-side-img.jpg" alt="treatment side image">';
            echo '</div>';
            echo '<div class="container">';
                echo '<div class="heading_container heading_center">';
                    set_treatment_title("Hospital", "Treatment");
                echo '</div>';
                echo '<div class="row">';
                foreach ($cards as $card) {
                    echo '<div class="col-md-6 col-lg-3">';
                        echo '<div class="box">';
                            echo '<div class="img-box">';
                                echo '<img src="' . htmlspecialchars($card['image']) . '" alt="">';
                            echo '</div>';
                            echo '<div class="detail-box">';
                                echo '<h4>' . htmlspecialchars($card['title']) . '</h4>';
                                echo '<p>' . htmlspecialchars($card['description']) . '</p>';
                                echo '<a href="#">' . htmlspecialchars($card['button']) . '</a>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
                echo '</div>';
            echo '</div>';
        echo '</section>';
    }
}
?>
