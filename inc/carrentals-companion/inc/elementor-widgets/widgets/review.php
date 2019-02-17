<?php
namespace CarRentalselementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;



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
class CarRentals_Review extends Widget_Base {

	public function get_name() {
		return 'carrentals-review';
	}

	public function get_title() {
		return __( 'Review', 'carrentals' );
	}

	public function get_icon() {
		return 'eicon-review';
	}

	public function get_categories() {
		return [ 'carrentals-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Review Section Heading ------------------------------
        $this->start_controls_section(
            'review_heading',
            [
                'label' => __( 'Review Section Heading', 'carrentals' ),
            ]
        );
        $this->add_control(
            'sect_title', [
                'label' => __( 'Title', 'carrentals' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );
        $this->add_control(
            'sect_subtitle', [
                'label' => __( 'Sub Title', 'carrentals' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );

        $this->end_controls_section(); // End section top content

        // ----------------------------------------  Review content ------------------------------
        $this->start_controls_section(
            'review_content',
            [
                'label' => __( 'Review', 'carrentals' ),
            ]
        );
        $this->add_control(
            'reviews', [
                'label' => __( 'Create Review', 'carrentals' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name' => 'label',
                        'label' => __( 'Title', 'carrentals' ),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => '01.'
                    ],
                    [
                        'name' => 'reviewstar',
                        'label' => __( 'Star Review', 'carrentals' ),
                        'type' => Controls_Manager::CHOOSE,
                            'options' => [
                                '1' => [
                                    'title' => __( '1', 'carrentals' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '2' => [
                                    'title' => __( '2', 'carrentals' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '3' => [
                                    'title' => __( '3', 'carrentals' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '4' => [
                                    'title' => __( '4', 'carrentals' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '5' => [
                                    'title' => __( '5', 'carrentals' ),
                                    'icon' => 'fa fa-star',
                                ],
                            ],
                    ],

                    [
                        'name' => 'desc',
                        'label' => __( 'Descriptions', 'carrentals' ),
                        'type' => Controls_Manager::WYSIWYG,
                    ]
                ],
            ]
        );

        $this->end_controls_section(); // End content

        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'carrentals' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#333333',
                'selectors' => [
                    '{{WRAPPER}} .title h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_sectsubtitle', [
                'label'     => __( 'Section Sub Title Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
        //------------------------------ Style Review ------------------------------
        $this->start_controls_section(
            'style_review', [
                'label' => __( 'Style Review', 'carrentals' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'review_title_heading',
            [
                'label'     => __( 'Style Review Title ', 'carrentals' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_reviewtitle', [
                'label' => __( 'Title Color', 'carrentals' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-review h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        //
        $this->add_control(
            'review_desc_heading',
            [
                'label'     => __( 'Style Descriptions', 'carrentals' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Descriptions Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-review p' => 'color: {{VALUE}};',
                ],
            ]
        );

        //
        $this->add_control(
            'review_star_color',
            [
                'label'     => __( 'Style Star', 'carrentals' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_star', [
                'label'     => __( 'Star Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-review .star .checked' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_section();


		//------------------------------ Style Features Box ------------------------------
		$this->start_controls_section(
			'style_reviewbox', [
				'label' => __( 'Style Review Box', 'carrentals' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
            'reviewbox_bgcolor',
            [
                'label'     => __( 'Style Review Box Background Color', 'carrentals' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'reviewboxbgclor',
                'label' => __( 'Background', 'carrentals' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .single-review',
            ]
        );
        $this->add_control(
            'reviewbox_bghovercolor',
            [
                'label'     => __( 'Style Hover Review Box Background Color ', 'carrentals' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'reviewboxhovbgclor',
                'label' => __( 'Background', 'carrentals' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .single-review:hover',
            ]
        );

		$this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();


    ?>

    <!-- Start reviews Area -->
    <section class="reviews-area section-gap" id="review">
        <div class="container">
            <?php 
            // Section Heading
            carrentals_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row">
                <?php 
                if( is_array( $settings['reviews'] ) && count( $settings['reviews'] ) > 0 ):
                    foreach( $settings['reviews'] as $val ):
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-review">
                        <?php
                        //
                        if( ! empty( $val['label'] ) ) {
                            echo carrentals_heading_tag(
                                array(
                                    'tag'   => 'h4',
                                    'text'  => esc_html( $val['label'] )
                                )
                            );
                        }
                        //
                        if( ! empty( $val['desc'] ) ) {
                            echo carrentals_get_textareahtml_output( $val['desc'] );
                        }
                        // 
                        if( ! empty( $val['reviewstar'] ) ) {
                            echo '<div class="star">';
                                for( $i = 1; $i <= 5; $i++ ) {

                                    if( $val['reviewstar'] >= $i ) {
                                        echo '<span class="fa fa-star checked"></span>';
                                    } else {
                                        echo '<span class="fa fa-star"></span>';
                                    }
                                }
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <?php
                    endforeach;
                endif;
                ?>

            </div>
        </div>  
    </section>
    <!-- End reviews Area -->

    <?php

    }
	
}
