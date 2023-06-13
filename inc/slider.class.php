<?php

class SCSlider {
    public function __construct() {
        add_shortcode( 'scs_slider', [ $this, 'slider_shortcode' ] );
        add_action( 'add_meta_boxes', [ $this, 'metaboxes_init' ] );
        add_action( 'manage_scs_slider_posts_columns', [ $this, 'listing_columns_init' ] );
        add_action( 'manage_scs_slider_posts_custom_column', [ $this, 'display_slider_info_column' ], 10, 2 );
    }

    public function slider_shortcode($atts) {
        $atts = shortcode_atts(
            [], $atts, 'scs_slider' );
        ob_start();
        $this->slider_html($atts);
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }

    private function slider_html($atts) {
        ?>
        <div class="container container-fluid featured-companies">
            <h4 class="featured-companies__title text-center">Featured Companies</h4>
            <ul class="featured-companies__slider featured-companies__slider__js">
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/3352/first-advantage/" title="First Advantage">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/FADV_Logo_4c_no_tagline_thumb.png" alt="fadv.com" title="First Advantage"/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>First Advantage</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
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
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/2975/united-states-courts/" title="United States Courts">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/generic_seal_regular_color2_thumb.png" alt="https://www.wiwd.uscourts.gov/" title="United States Courts"/>
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
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/2464/u-s-department-of-state/" title="U.S. Department of State">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/us_state_dept_thumb.png" alt="careers.state.gov" title="U.S. Department of..."/>
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
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/3008/the-getty/" title="The Getty">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/J.Paul_Getty_Trust_thumb.png" alt="http://www.getty.edu" title="The Getty"/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>The Getty</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    1 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/2772/university-of-nevada-reno/" title="University of Nevada, Reno">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/UNR_3_thumb.png" alt="https://www.unr.edu/" title="University of..."/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>University of Nevada, Reno</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/3431/cook-silverman-search/" title="Cook Silverman Search">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/Cook_Silverman_logo_thumb.png" alt="www.cooksilverman.com" title="Cook Silverman Search"/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>Cook Silverman Search</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    14 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/3886/clackamas-county/" title="Clackamas County">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/Clackamas_County_thumb.png" alt="https://www.clackamas.us/" title="Clackamas County"/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>Clackamas County</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    352 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/2284/walmart/" title="Walmart">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/Walmart-Logo_thumb.png" alt="http://www.walmart.com/careers" title="Walmart"/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>Walmart</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/2726/wikimedia-foundation/" title="Wikimedia Foundation">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/WMFLOGO_thumb.png" alt="https://wikimediafoundation.org/wiki/Home" title="Wikimedia Foundation"/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>Wikimedia Foundation</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/3569/california-lutheran-university/" title="California Lutheran University">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/CaliforniaLutheranUniversity_thumb.png" alt="http://www.callutheran.edu/" title="California Lutheran..."/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>California Lutheran University</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    243 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/2756/bill-melinda-gates-foundation/" title="Bill &amp; Melinda Gates Foundation">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/gates-foundation_340_thumb.png" alt="https://www.gatesfoundation.org" title="Bill & Melinda Gates..."/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>Bill &amp; Melinda Gates Foundation</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    1 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/3497/yale-university/" title="Yale University">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/Yale_Square_thumb.png" alt="https://your.yale.edu/careers" title="Yale University"/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>Yale University</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/2526/duke-university-talent-identification-program/" title="Duke University Talent Identification Program">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/Duke-TIP_thumb.png" alt="https://tip.duke.edu/" title="Duke University..."/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>Duke University Talent Identification Program</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/2965/the-john-f-kennedy-center-for-performing-arts/" title="The John F. Kennedy Center for Performing Arts">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/KC_Logo_thumb.png" alt="www.kennedy-center.org" title="The John F. Kennedy..."/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>The John F. Kennedy Center for Performing Arts</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    38 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/3223/dollar-general/" title="Dollar General">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/image001_thumb.png" alt="https://www.dollargeneral.com/careers" title="Dollar General"/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>Dollar General</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/2801/the-ohio-state-university/" title="The Ohio State University">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/TheOhioStateUniversity-4C-%28360x180%29_thumb.png" alt="" title="The Ohio State..."/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>The Ohio State University</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/2844/intel/" title="Intel">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/IntelBlue_thumb.png" alt="intel.com" title="Intel"/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>Intel</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/620/alachua-county-board-of-county-commissioners/" title="Alachua County Board of County Commissioners">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/AlachuaLogo2_1_1_thumb.png" alt="https://agency.governmentjobs.com/alachua/default.cfm" title="Alachua County Board..."/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>Alachua County Board of County Commissioners</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    0 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="featured-company">
                    <a href="https://www.mpndiversityjobs.com/company/2169/montgomery-county-md-government/" title="Montgomery County, MD Government">
                        <div class="panel panel-default featured-company__panel">
                            <div class="panel-body featured-company__panel-body">
                                <img class="featured-company__image" src="https://www.mpndiversityjobs.com/files/pictures/montgomery-county-logo_thumb.png" alt="" title="Montgomery County,..."/>
                            </div>
                            <div class="panel-footer featured-company__panel-footer">
                                <div class="featured-companies__name">
                                    <span>Montgomery County, MD Government</span>
                                </div>
                                <div class="featured-companies__jobs">
                                    10 job(s)
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <span class="featured-companies__slider--arrows featured-companies__slider--prev"></span>
            <span class="featured-companies__slider--arrows featured-companies__slider--next"></span>
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
