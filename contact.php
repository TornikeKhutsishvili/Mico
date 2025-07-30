<?php

include('./sections/document-start.php');

include("./sections/header.php"); set_header($contact, $navbarItems);
include("./sections/contact-section.php"); contactSection($contactSection);
include("./sections/info-section.php"); info($infoData);
include('./sections/footer.php'); set_footer();

include('./sections/document-end.php');

?>