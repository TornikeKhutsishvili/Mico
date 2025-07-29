<?php

include('./sections/document-start.php');

include("./sections/header.php"); set_header($contact, $navbarItems);

include("./sections/treatment-section.php"); treatment_section($hospital_treatments_cards);

include("./sections/info-section.php"); info($infoData);

include('./sections/footer.php'); set_footer();

include('./sections/document-end.php');

?>