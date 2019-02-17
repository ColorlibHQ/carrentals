<?php
namespace CarRentalselementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/**
 *
 * CarRentals elementor about page section widget.
 *
 * @since 1.0
 */
class CarRentals_Contact extends Widget_Base {

    public function get_name() {
        return 'carrentals-contact';
    }

    public function get_title() {
        return __( 'Contact', 'carrentals' );
    }

    public function get_icon() {
        return 'eicon-mail';
    }

    public function get_categories() {
        return [ 'carrentals-elements' ];
    }

    protected function _register_controls() {

        $repeater = new \Elementor\Repeater();

        // ----------------------------------------  Map ------------------------------
        $this->start_controls_section(
            'contact_map',
            [
                'label' => __( 'Map Settings', 'carrentals' ),
            ]
        );
        $this->add_control(
            'map_switch',
            [
                'label' => __( 'Show Map', 'carrentals' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'carrentals' ),
                'label_off' => __( 'Hide', 'carrentals' ),
                'return_value' => 'yes',
                'default' => '',
            ]
        );
        $this->add_control(
            'map_address',
            [
                'label'         => esc_html__( 'Address', 'carrentals' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Rabindra Sorobor Dhanmondi Lake Rd', 'carrentals' ),
                'description'   => esc_html__( 'Before use map widget make sure you are set google map api key from customizer -> theme options -> general -> google map api key', 'carrentals' )
            ]
        );
        $this->add_control(
            'map_lat',
            [
                'label'       => esc_html__( 'Latitude', 'carrentals' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__( '23.745227', 'carrentals' )
            ]
        );
        $this->add_control(
            'map_lng',
            [
                'label'       => esc_html__( 'Longitude', 'carrentals' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => esc_html__( '90.377155', 'carrentals' )
            ]
        );

        $this->end_controls_section(); // End Contact Section Heading

        // ----------------------------------------  Contact Info  ------------------------------
        
        $this->start_controls_section(
            'contact_info',
            [
                'label' => __( 'Contact Info', 'carrentals' ),
            ]
        );

        $this->add_control(
            'info', [
                'label'         => __( 'Create Contact Info', 'carrentals' ),
                'type'          => Controls_Manager::REPEATER,
                'title_field'   => '{{{ label }}}',
                'fields'  => [
                    [
                        'name'        => 'label',
                        'label'       => __( 'Contact Info', 'carrentals' ),
                        'label_block' => true,
                        'type'        => Controls_Manager::TEXT,
                        'default'     => esc_html__( 'Dhaka, Bangladesh', 'carrentals' )
                    ],
                    [
                        'name'    => 'desc',
                        'label'   => __( 'Contact Descriptions', 'carrentals' ),
                        'type'    => Controls_Manager::WYSIWYG,
                        'default' => esc_html__( 'Write something...', 'carrentals' )
                    ],
                    [
                        'name'  => 'icon',
                        'label' => __( 'Icon', 'carrentals' ),
                        'type'  => Controls_Manager::ICON,
                    ]

                ],
            ]
        );

        $this->end_controls_section(); // End Contact Info

        // ----------------------------------------  Contact Form  ------------------------------
        
        $this->start_controls_section(
            'contact_form',
            [
                'label' => __( 'Contact Form', 'carrentals' ),
            ]
        );
        $this->add_control(
            'contact_formshortcode',
            [
                'label'     => esc_html__( 'Form Shortcode', 'carrentals' ),
                'type'      => Controls_Manager::TEXT,
                'label_block' => true
            ]
        );
        $this->end_controls_section(); // End Contact Form



        /**
         * Style Tab
         * ------------------------------ Style Section Heading ------------------------------
         *
         */
        $this->start_controls_section(
            'style_sh_color', [
                'label' => __( 'Style Section Heading', 'carrentals' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .product-area-title h2.h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_subtitle', [
                'label'     => __( 'Sub title color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .product-area-title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


        /**
         * Style Tab
         * ------------------------------ Style ------------------------------
         *
         */
        $this->start_controls_section(
            'style_content_color', [
                'label' => __( 'Style Content Color', 'carrentals' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_btntext', [
                'label'     => __( 'Text color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .section-full' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_border', [
                'label'     => __( 'Heading color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .address h6' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_fbtntextcolor', [
                'label'     => __( 'Form Button Label color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}}  .contact-form .primary-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovlc', [
                'label'     => __( 'Form Button Hover Label color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#00ff8c',
                'selectors' => [
                    '{{WRAPPER}} .contact-form .primary-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_section();


    }

    protected function render() {

    $settings = $this->get_settings();

    // Enqueue scripts
    wp_enqueue_script('maps-googleapis');
    wp_enqueue_script('carrentals-map-custom');
    
    //
    $address = ( !empty( $settings['map_address'] ) ) ? $settings['map_address'] : '';
    $lat     = ( !empty( $settings['map_lat'] ) ) ? $settings['map_lat'] : '';
    $lng     = ( !empty( $settings['map_lng'] ) ) ? $settings['map_lng'] : '';

    $mapdata = array( 'address' => $address, 'lat' => $lat, 'lng' => $lng );

    ?>
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <?php 
                if( !empty( $settings['map_switch'] ) ):
                ?>
                <div class="map-wrap" style="width:100%; height: 445px;" data-map="<?php echo esc_attr( json_encode( $mapdata ) ); ?>" id="map"></div>
                <?php 
                endif;
                ?>

                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <?php 
                    if( is_array( $settings[ 'info' ] ) && count( $settings[ 'info' ] ) > 0 ):
                        foreach( $settings[ 'info' ] as $info ):
                    ?>
                        <div class="single-contact-address d-flex flex-row">
                            
                            <?php 
                            if( !empty( $info['icon'] ) ){
                                echo '<div class="icon">';
                                    echo '<span class="'.esc_attr( $info['icon'] ).'"></span>';
                                echo '</div>';
                            }
                            ?>
                            <div class="contact-details">
                                <?php 
                                if( !empty( $info['label'] ) ){
                                    echo carrentals_heading_tag(
                                        array(
                                            'tag'  => 'h5',
                                            'text' => esc_html( $info['label'] )
                                        )
                                    );
                                }
                                //
                                if( !empty( $info['desc'] ) ){
                                    echo carrentals_get_textareahtml_output( $info['desc'] );
                                }
                                ?>
                            </div>
                        </div>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                </div>

                <div class="col-lg-8">
                    <?php 
                    if( !empty( $settings['contact_formshortcode'] ) ){
                        echo do_shortcode( $settings['contact_formshortcode'] );
                    }
                    ?>
                </div>
            </div>
        </div>  
    </section>
    <?php

        }
    
}
