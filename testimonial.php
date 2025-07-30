<?php

include('./sections/document-start.php');

include("./sections/header.php"); set_header($contact, $navbarItems);
include("./sections/client-section.php"); testimonialSection($testimonialSection);
include("./sections/info-section.php"); info($infoData);
include('./sections/footer.php'); set_footer();
include('./sections/scripts.php');

include('./sections/document-end.php');

?>