<?php

include('./sections/document-start.php');

include('./sections/hero-area-section.php'); hero($contact, $navbarItems, $sliders);
include('./sections/book-section.php'); appointmentSection($appointmentSection);

?>

    <section class="about_section">
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

include("./sections/treatment-section.php"); treatment_section($hospital_treatments_cards);
include('./sections/team-section.php'); teamSection($teamSection);
include("./sections/client-section.php"); testimonialSection($testimonialSection);
include('./sections/contact-section.php'); contactSection($contactSection);
include('./sections/info-section.php'); info($infoData);
include('./sections/footer.php'); set_footer();

include('./sections/document-end.php');

?>