<?php

include('./sections/document-start.php');
include("./sections/header.php"); set_header($contact, $navbarItems);

?>

    <section class="about_section layout_padding">
      <div class="container  ">
        <div class="row">
          <div class="col-md-6 ">
            <div class="img-box">
              <img src="images/about-img.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  About <span>Hospital</span>
                </h2>
              </div>
              <p>
                has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php

include('./sections/info-section.php'); info($infoData);
include('./sections/footer.php'); set_footer();
include('./sections/document-end.php');

?>