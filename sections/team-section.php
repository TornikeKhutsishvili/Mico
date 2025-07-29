<?php

include("./data.php");


// team section function
if (!function_exists('teamSection')) {
    function teamSection($section)
    {
        echo '
        <section class="team_section layout_padding">
          <div class="container">
            <div class="heading_container heading_center">
              <h2>' . htmlspecialchars($section['title']) . ' <span>' . htmlspecialchars($section['highlight']) . '</span></h2>
            </div>
            <div class="carousel-wrap">
              <div class="owl-carousel team_carousel">';

        foreach ($section['team_members'] as $member) {
            echo '
                <div class="item">
                  <div class="box">
                    <div class="img-box">
                      <img src="' . htmlspecialchars($member['image']) . '" alt="' . htmlspecialchars($member['name']) . '" />
                    </div>
                    <div class="detail-box">
                      <h5>' . htmlspecialchars($member['name']) . '</h5>
                      <h6>' . htmlspecialchars($member['degree']) . '</h6>
                      <div class="social_box">';

            if (!empty($member['socials']['facebook'])) {
                echo '<a href="' . htmlspecialchars($member['socials']['facebook']) . '"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
            }
            if (!empty($member['socials']['twitter'])) {
                echo '<a href="' . htmlspecialchars($member['socials']['twitter']) . '"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
            }
            if (!empty($member['socials']['linkedin'])) {
                echo '<a href="' . htmlspecialchars($member['socials']['linkedin']) . '"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
            }
            if (!empty($member['socials']['instagram'])) {
                echo '<a href="' . htmlspecialchars($member['socials']['instagram']) . '"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
            }

            echo '
                      </div>
                    </div>
                  </div>
                </div>';
        }

        echo '
              </div>
            </div>
          </div>
        </section>';
    }
}