<?php

include("./data.php");


// about function
if (!function_exists('aboutSection')) {

    function aboutSection($about)
    {
        echo '
        <section class="about_section layout_padding">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="img-box">
                  <img src="' . htmlspecialchars($about['image']) . '" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="detail-box">
                  <div class="heading_container">
                    <h2>' . htmlspecialchars($about['title']) . ' <span>' . htmlspecialchars($about['highlight']) . '</span></h2>
                  </div>
                  <p class="card-description">' . htmlspecialchars($about['description']) . '</p>
                  <a href="' . htmlspecialchars($about['button_link']) . '" class="toggle-btn">' . htmlspecialchars($about['button_text']) . '</a>
                </div>
              </div>
            </div>
          </div>
        </section>';
    }

}
