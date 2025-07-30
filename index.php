<?php

include('./sections/document-start.php');

include('./sections/hero-area-section.php'); hero($contact, $navbarItems, $sliders);
include('./sections/book-section.php'); appointmentSection($appointmentSection);
include('./sections/about-section.php'); aboutSection($about);
include("./sections/treatment-section.php"); treatment_section($hospital_treatments_cards);
include('./sections/team-section.php'); teamSection($teamSection);
include("./sections/client-section.php"); testimonialSection($testimonialSection);
include('./sections/contact-section.php'); contactSection($contactSection);
include('./sections/info-section.php'); info($infoData);
include('./sections/footer.php'); set_footer();

include('./sections/document-end.php');

?>