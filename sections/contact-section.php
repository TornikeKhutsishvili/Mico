<?php

include("./data.php");


// contact function
if (!function_exists('contactSection')) {
    function contactSection($contactSection)
    {
        echo '
        <section class="contact_section layout_padding-bottom">
            <div class="container">
                <div class="heading_container">
                    <h2>' . htmlspecialchars($contactSection['title']) . '</h2>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form_container">
                            <form action="">';

                            foreach ($contactSection['form'] as $input) {
                                $class = isset($input['class']) ? 'class="' . htmlspecialchars($input['class']) . '"' : '';
                                echo '
                                        <div>
                                            <input type="' . htmlspecialchars($input['type']) . '" placeholder="' . htmlspecialchars($input['placeholder']) . '" ' . $class . ' />
                                        </div>';
                            }

                                echo '
                                <div class="btn_box">
                                    <button>' . htmlspecialchars($contactSection['button_text']) . '</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="img-box">
                            <img src="' . htmlspecialchars($contactSection['image']) . '" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>';
    }
}
