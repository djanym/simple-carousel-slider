<?php

class SCSlider {
    public function __construct() {
        add_shortcode( 'scs_slider', [ $this, 'slider_shortcode' ] );
        add_action( 'add_meta_boxes', [ $this, 'metaboxes_init' ] );
    }

    public function slider_shortcode() {
        ?>

        <?php
    }

    /**
     * Initialize metaboxes for slider edit screen.
     *
     * @return void
     */
    function metaboxes_init() {
        add_meta_box(
            'slider-info-meta-box',
            'Slider Shortcode',
            [ $this, 'slider_info_shortcode_metabox' ],
            'scs_slider',
            'side' // Display the meta box after the "Submit" meta box
        );
    }

    /**
     * Add shortcode metabox for slider edit screen.
     *
     * @return void
     */
    public function slider_info_shortcode_metabox() {
        global $post;

        // Display info only if the post has been saved.
        if ( isset( $post->ID ) && $post->post_type == 'scs_slider' ) {
            ?>
            <div class="field-container">
                <input type="text" id="scs-slider-shortcode" value="[scs_slider id=<?php echo $post->ID; ?>]" class="widefat" readonly/>
            </div>
            <?php
        }
    }
}
