<?php

class SCSlider {
    public function __construct() {
        add_shortcode( 'scs_slider', [ $this, 'slider_shortcode' ] );
        add_action( 'add_meta_boxes', [ $this, 'metaboxes_init' ] );
        add_action( 'manage_scs_slider_posts_columns', [ $this, 'listing_columns_init' ] );
        add_action( 'manage_scs_slider_posts_custom_column', [ $this, 'display_slider_info_column' ], 10, 2 );
    }

    public function slider_shortcode( $atts ) {
        $atts = shortcode_atts(
            [ 'id' => null ],
            $atts,
            'scs_slider'
        );
        ob_start();
        $this->slider_html( $atts );
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }

    private function slider_html( $atts ) {
        $post_id = $atts['id'];
        $slides  = get_field( 'scs_slider', $post_id );
        if ( ! $slides ) {
            return;
        }
        ?>
        <div class="scs-slider-container">
            <div class="scs-slider">
                <?php foreach ( $slides as $slide ) : ?>
                    <div class="slide">
                        <a href="<?php echo esc_url( $slide['slide_url'] ); ?>" title="<?php echo esc_attr( $slide['slide_title'] ); ?>">
                            <div class="panel">
                                <div class="panel-body">
                                    <img class="panel-image" src="<?php echo esc_url( $slide['image'] ); ?>"
                                         alt="<?php echo esc_attr( $slide['slide_title'] ); ?>"
                                         title="<?php echo esc_attr( $slide['slide_title'] ); ?>"/>
                                </div>
                                <div class="panel-footer">
                                    <div class="title"><span><?php echo wp_kses_post( $slide['slide_title'] ); ?></span></div>
                                    <div class="additional-text"><?php echo wp_kses_post( $slide['slide_title_additional_text'] ); ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
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
