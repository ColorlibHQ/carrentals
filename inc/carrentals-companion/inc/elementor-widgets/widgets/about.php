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
class CarRentals_About extends Widget_Base {

	public function get_name() {
		return 'carrentals-aboutus';
	}

	public function get_title() {
		return __( 'About Us', 'carrentals' );
	}

	public function get_icon() {
		return 'eicon-post-content';
	}

	public function get_categories() {
		return [ 'carrentals-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  About content ------------------------------
        $this->start_controls_section(
            'about_content',
            [
                'label' => __( 'About Content', 'carrentals' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'carrentals' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'We Realize that there are reduced Wastege Stand out', 'carrentals' )
            ]
        );
        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__( 'Sub Title', 'carrentals' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'We are here to listen from you deliver exellence', 'carrentals' )
            ]
        );
        $this->add_control(
            'btnlabel',
            [
                'label' => esc_html__( 'Button Label', 'carrentals' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'get details', 'carrentals' )
            ]
        );
        $this->add_control(
            'btnurl',
            [
                'label' => esc_html__( 'Button Url', 'carrentals' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => ''
            ]
        );
        $this->add_control(
            'content',
            [
                'label'         => esc_html__( 'Contact', 'carrentals' ),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => esc_html__( 'inappropriate behaviour is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.', 'carrentals' )
            ]
        );
        $this->add_control(
            'featured_img',
            [
                'label'         => esc_html__( 'Featured Image', 'carrentals' ),
                'type'          => Controls_Manager::MEDIA,
                'label_block'   => true
            ]
        );

        $this->end_controls_section(); // End content


        /**
         * Style Tab
         * ------------------------------ Style ------------------------------
         *
         */
        $this->start_controls_section(
            'stylecolor', [
                'label' => __( 'Style Color', 'carrentals' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area .home-about-right h1'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_subtitle', [
                'label'     => __( 'Sub Title Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area .home-about-right p span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Description Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777777',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area .home-about-right p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        /**
         * Style Tab
         * ------------------------------ Button Style ------------------------------
         *
         */

        $this->start_controls_section(
            'buttonstyle', [
                'label' => __( 'Style Button', 'carrentals' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_label', [
                'label'     => __( 'Label Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area .home-about-right .primary-btn'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_label', [
                'label'     => __( 'Hover Label Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area .home-about-right .primary-btn:hover'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg', [
                'label'     => __( 'Background Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area .home-about-right .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_bg', [
                'label'     => __( 'Hover Background Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(250,183,0,0)',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area .home-about-right .primary-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_border', [
                'label'     => __( 'Border Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area .home-about-right .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_border', [
                'label'     => __( 'Hover Border Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .home-about-area .home-about-right .primary-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();

    ?>



    <section class="home-about-area">
        <div class="container-fluid">               
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding home-about-left">
                    <?php 
                    if( ! empty( $settings['featured_img']['url'] ) ) {
                        echo carrentals_img_tag(
                            array(
                                'url'   =>  esc_url( $settings['featured_img']['url'] ),
                                'class' => 'img-fluid'
                            )
                        );
                    }
                    ?>
                </div>
                <div class="col-lg-6 no-padding home-about-right">
                    <?php 
                    // Title
                    if( ! empty( $settings['title'] ) ) {
                        echo carrentals_heading_tag(
                            array(
                                'tag' => 'h1',
                                'text' => esc_html( $settings['title'] ),
                            )
                        );
                    }
                    // Title
                    if( ! empty( $settings['subtitle'] ) ) {
                        echo carrentals_other_tag(
                            array(
                                'tag' => 'span',
                                'text' => esc_html( $settings['subtitle'] ),
                                'wrap_before'   => '<p>',
                                'wrap_after'    => '</p>',
                            )
                        );
                    }
                    // Content
                    if( ! empty( $settings['content'] ) ) {
                        echo carrentals_get_textareahtml_output( $settings['content'] );
                    }
                    //
                    if( !empty( $settings['btnlabel'] ) && ! empty( $settings['btnurl'] ) ) {
                        echo carrentals_anchor_tag(
                            array(
                                'text'   => esc_html( $settings['btnlabel'] ),
                                'url'    => esc_url( $settings['btnurl'] ),
                                'class'  => 'text-uppercase primary-btn',
                            )
                        );
                    }
                    ?>
                </div>
            </div>
        </div>  
    </section>
    <?php

        }
	
}
