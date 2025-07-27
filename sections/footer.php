<?php

// footer function
if (!function_exists('set_footer')) {
    function set_footer()
    {
        echo '<footer class="footer_section">
                <div class="container">
                    <p>
                        &copy; <span id="displayYear"></span> All Rights Reserved By
                        <a href="https://html.design/">Free Html Templates</a>
                    </p>
                </div>
            </footer>';
    }
}

?>