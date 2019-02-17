<?php
namespace CarRentalselementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;  
}


/**
 *
 * CarRentals elementor about us section widget.
 *
 * @since 1.0
 */
class CarRentals_Banner extends Widget_Base {

	public function get_name() {
		return 'carrentals-banner';
	}

	public function get_title() {
		return __( 'Banner', 'carrentals' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'carrentals-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'banner_content',
            [
                'label' => __( 'Banner Section Content', 'carrentals' ),
            ]
        );
        $this->add_control(
            'banner_titleone',
            [
                'label'         => esc_html__( 'Title #1', 'carrentals' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true
            ]
        );
        $this->add_control(
            'banner_titletwo',
            [
                'label'         => esc_html__( 'Title #2', 'carrentals' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true
            ]
        );
        $this->add_control(
            'banner_desc',
            [
                'label'         => esc_html__( 'Description', 'carrentals' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true
            ]
        );
        $this->add_control(
            'banner_btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'carrentals' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Explore Us', 'carrentals' )
            ]
        );
        $this->add_control(
            'banner_btnurl',
            [
                'label'         => esc_html__( 'Button Url', 'carrentals' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );

        $this->end_controls_section(); // End content

        // ----------------------------------------  Form Settings ------------------------------
        $this->start_controls_section(
            'banner_formsettings',
            [
                'label' => __( 'Banner Form Settings', 'carrentals' ),
            ]
        );
        $this->add_control(
            'booking_form_show',
            [
                'label'         => esc_html__( 'Show Car Booking Form', 'carrentals' ),
                'type'          => Controls_Manager::SWITCHER,
            ]
        );
        $this->add_control(
            'banner_formtitle',
            [
                'label'         => esc_html__( 'Form Title', 'carrentals' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Book Your Car Today!', 'carrentals' )
            ]
        );
        $this->end_controls_section(); // End Form Settings
        //------------------------------ Style title ------------------------------
        $this->start_controls_section(
            'style_textcolor', [
                'label' => __( 'Style Content', 'carrentals' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_titleone', [
                'label'     => __( 'Title #1 Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content h6' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_titleone',
                'selector'  => '{{WRAPPER}} .banner-content h6',
            ]
        );
        $this->add_control(
            'color_titletwo', [
                'label'     => __( 'Title #2 Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_titletwo',
                'selector'  => '{{WRAPPER}} .banner-content h1',
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Description Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_desc',
                'selector'  => '{{WRAPPER}} .banner-content p',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'          => 'banneroverlay',
                'label'         => __( 'Overlay Background', 'carrentals' ),
                'separator'     => 'before',
                'description'   => esc_html__( 'Set banner overlay background color.', 'carrentals' ),
                'types'         => [ 'gradient' ],
                'selector'      => '{{WRAPPER}} .banner-area .overlay-bg',
            ]
        );
        $this->end_controls_section();

        //------------------------------ Style button ------------------------------
        $this->start_controls_section(
            'style_btn', [
                'label' => __( 'Style Button', 'carrentals' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_btnlabel', [
                'label'     => __( 'Button Label Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhoverlabel', [
                'label'     => __( 'Button Hover Label Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnborder', [
                'label'     => __( 'Button Border Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovborder', [
                'label'     => __( 'Button Hover Border Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnbg', [
                'label'       => __( 'Button Background Color', 'carrentals' ),
                'type'        => Controls_Manager::COLOR,
                'default'     => '#fab700',
                'selectors'   => [
                    '{{WRAPPER}} .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovbg', [
                'label'     => __( 'Button Hover Background Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(255,255,255,0)',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
    $this->load_widget_script();

    carrental_booking_form_data();

    ?>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>  
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-start">

                <div class="banner-content col-lg-7 col-md-6">
                    <?php 
                    // Text one
                    if( !empty( $settings['banner_titleone'] ) ){
                        echo carrentals_heading_tag(
                            array(
                                'tag'   => 'h6',
                                'text'  => esc_html( $settings['banner_titleone'] )
                            )
                        );
                    }
                    // Text two
                    if( !empty( $settings['banner_titletwo'] ) ){
                        echo carrentals_heading_tag(
                            array(
                                'tag'  => 'h1',
                                'text' => esc_html( $settings['banner_titletwo'] ),

                            )
                        );
                    }
                    //
                    if( !empty( $settings['banner_desc'] ) ){
                        echo carrentals_paragraph_tag(
                            array(
                                'text' => esc_html( $settings['banner_desc'] ),
                                'class' => 'pt-20 pb-20'
                            )
                        );
                    }
                    //
                    if( !empty( $settings['banner_btnlabel'] ) && !empty( $settings['banner_btnurl']['url'] ) ){
                        echo carrentals_anchor_tag(
                            array(
                                'text'  => esc_html( $settings['banner_btnlabel'] ),
                                'url'   => esc_url( $settings['banner_btnurl']['url'] ),
                                'class' => 'primary-btn text-uppercase'
                            )
                        );
                    }
                    ?>
                </div>
                <?php 
                if( ! empty( $settings['booking_form_show'] ) ):
                ?>
                <div class="col-lg-5  col-md-6 header-right">
                    <h4 class="text-white pb-30">
                        <?php 
                        if( ! empty( $settings['banner_formtitle'] ) ) {
                            echo esc_html( $settings['banner_formtitle'] );
                        }
                        ?>                        
                    </h4>
                    <form class="form" action="#" method="post" role="form" autocomplete="off">
                        <div class="form-group">
                            <div class="default-select" id="default-select"">
                                <select name="carmodel">
                                    <option value="" disabled selected hidden><?php esc_html_e( 'Select Your Car', 'carrentals' ) ?></option>
                                        <?php 
                                        $carmodel = unserialize( get_option( 'carmodel' ) );

                                        foreach( $carmodel as $val ) {
                                            echo '<option value="' .esc_attr( $val ). '">' . esc_html( $val ) . '</option>';
                                        }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 wrap-left">
                                <div class="default-select" id="default-select"">
                                    <select name="pickupNumber">
                                        <option value="" disabled selected hidden><?php esc_html_e( 'Pickup', 'carrentals' ) ?></option>
                                        <?php 
                                        $pickup = unserialize( get_option( 'pickup' ) );

                                        foreach( $pickup as $val ) {
                                            echo '<option value="' .esc_attr( $val ). '">' . esc_html( $val ) . '</option>';
                                        }
                                        
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 wrap-right">
                                <div class="input-group dates-wrap">                                          
                                    <input id="datepicker" name="pikdate" class="dates form-control" id="exampleAmount" placeholder="<?php esc_html_e( 'Date & time', 'carrentals' ) ?>" type="text">                        
                                    <div class="input-group-prepend">
                                        <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                    </div>                                          
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 wrap-left">
                                <div class="default-select" id="default-select">
                                    <select name="dropNumber">
                                        <option value="" disabled selected hidden><?php esc_html_e( 'Drop off', 'carrentals' ) ?></option>
                                        <?php 
                                        $dropoff = unserialize( get_option( 'dropoff' ) );

                                        foreach( $dropoff as $val ) {
                                            echo '<option value="' .esc_attr( $val ). '">' . esc_html( $val ) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 wrap-right">
                                <div class="input-group dates-wrap">                                              
                                    <input id="datepicker2" class="dates form-control" name="dropdate" id="exampleAmount" placeholder="Date & time" type="text">                        
                                    <div class="input-group-prepend">
                                        <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                    </div>                                          
                                </div>
                            </div>
                        </div>                           
                        <div class="from-group">
                            <input class="form-control txt-field" type="text" name="userName" placeholder="<?php esc_html_e( 'Your name', 'carrentals' ) ?>">
                            <input class="form-control txt-field" type="email" name="userEmail" placeholder="<?php esc_html_e( 'Email address', 'carrentals' ) ?>">
                            <input class="form-control txt-field" type="tel" name="userPhone" placeholder="<?php esc_html_e( 'Phone number', 'carrentals' ) ?>">
                        </div>
                        <div class="form-group row">
                            <?php wp_nonce_field( 'request_nonce_action', 'request_submit_nonce_check' ); ?>
                            <div class="col-md-12">
                                <button type="submit" name="booking_submit" class="btn btn-default btn-lg btn-block text-center text-uppercase"><?php esc_html_e( 'Confirm Car Booking', 'carrentals' ) ?></button>
                            </div>
                        </div>
                    </form>
                </div>  
                <?php 
                endif;
                ?>
            </div>
        </div>                  
    </section>
    <?php

    }
    
    public function load_widget_script() {
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            // Exibition widget owlCarousel
            var window_height    = window.innerHeight,
            header_height        = $(".default-header").height(),
            fitscreen            = window_height - header_height;


            $(".fullscreen").css("height", window_height)
            $(".fitscreen").css("height", fitscreen);
        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
