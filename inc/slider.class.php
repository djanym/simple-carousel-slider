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
            [], $atts, 'scs_slider' );
        ob_start();
        $this->slider_html( $atts );
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }

    private function slider_html( $atts ) {
        ?>
        <div class="scs-slider-container">
            <div class="scs-slider">
                <div class="slide">
                    <a href="https://www.mpndiversityjobs.com/company/3352/first-advantage/" title="First Advantage">
                        <div class="panel">
                            <div class="panel-body">
                                <img class="panel-image" src="https://www.mpndiversityjobs.com/files/pictures/FADV_Logo_4c_no_tagline_thumb.png" alt="fadv.com"
                                     title="First Advantage"/>
                            </div>
                            <div class="panel-footer">
                                <div class="title">
                                    <span>First Advantage</span>
                                </div>
                                <div class="jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="slide">
                    <a href="https://www.mpndiversityjobs.com/company/1384/university-of-california-berkeley/" title="University of California, Berkeley">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/ucberkeley_1_thumb.png" alt="www.berkeley.edu" title="University of..."/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>University of California, Berkeley</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    11 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="slide">
                    <a href="https://www.mpndiversityjobs.com/company/2975/united-states-courts/" title="United States Courts">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/generic_seal_regular_color2_thumb.png"
                                     alt="https://www.wiwd.uscourts.gov/" title="United States Courts"/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>United States Courts</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="slide">
                    <a href="https://www.mpndiversityjobs.com/company/2464/u-s-department-of-state/" title="U.S. Department of State">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/us_state_dept_thumb.png" alt="careers.state.gov"
                                     title="U.S. Department of..."/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>U.S. Department of State</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
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
