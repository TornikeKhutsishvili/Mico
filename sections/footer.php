<?php

include("./data.php");


// footer function
if (!function_exists('set_footer')) {

    function set_footer($footer)
    {
        echo '<footer class="footer_section">
                <div class="container">
                    <p>
                        &copy; <span id="displayYear"></span> ' . htmlspecialchars($footer['text']) . '
                        <a href="' . htmlspecialchars($footer['link_url']) . '" target="_blank">
                        ' . htmlspecialchars($footer['link_text']) . '</a>
                    </p>
                </div>
            </footer>';
    }

}

?>
