<?php

include('./sections/document-start.php');

include("./sections/header.php"); set_header($contact, $navbarItems);
include('./sections/about-section.php'); aboutSection($about);
include('./sections/info-section.php'); info($infoData);
include('./sections/footer.php'); set_footer();

include('./sections/document-end.php');

?>