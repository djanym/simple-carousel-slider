<?php

class SCSlider {
    public function __construct() {
        add_shortcode( 'scs_slider', [ $this, 'slider_shortcode' ] );
        add_action( 'add_meta_boxes', [ $this, 'metaboxes_init' ] );
        add_action( 'manage_scs_slider_posts_columns', [ $this, 'listing_columns_init' ] );
        add_action( 'manage_scs_slider_posts_custom_column', [ $this, 'display_slider_info_column' ], 10, 2 );
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
    public function metaboxes_init() : void {
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
    public function slider_info_shortcode_metabox() : void {
        global $post;

        // Display info only if the post has been saved.
        if ( isset( $post->ID ) && $post->post_type == 'scs_slider' ) {
            ?>
            <div class="field-container">
                <input type="text" value="[scs_slider id=<?php echo $post->ID; ?>]" class="widefat" readonly/>
            </div>
            <?php
        }
    }

    /**
     * Adds columns to the slider listing screen.
     *
     * @param $columns
     *
     * @return mixed
     */
    public function listing_columns_init( $columns ) {
        $columns['scs_shortcode'] = 'Slider Shortcode';

        return $columns;
    }

    /**
     * Displays column value in the slider listing screen.
     *
     * @param $column
     * @param $post_id
     *
     * @return void
     */
    public function display_slider_info_column( $column, $post_id ) {
        if ( $column === 'scs_shortcode' ) {
            $shortcode = '[scs_slider id=' . $post_id . ']';
            echo esc_html( $shortcode );
        }
    }
}
