<?php

class SCSlider {
    public function __construct() {
        add_shortcode( 'scs_slider', [ $this, 'slider_shortcode' ] );
    }

    public function slider_shortcode() {
        ?>

        <?php
    }
}
