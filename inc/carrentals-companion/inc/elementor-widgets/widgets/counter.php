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
class CarRentals_Counter extends Widget_Base {

	public function get_name() {
		return 'carrentals-counter';
	}

	public function get_title() {
		return __( 'Counter', 'carrentals' );
	}

	public function get_icon() {
		return 'eicon-counter';
	}

	public function get_categories() {
		return [ 'carrentals-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();


        // ----------------------------------------  Features content ------------------------------
        $this->start_controls_section(
            'counter_content',
            [
                'label' => __( 'Counter', 'carrentals' ),
            ]
        );
        $this->add_control(
            'counter', [
                'label' => __( 'Create Counter', 'carrentals' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'          => 'label',
                        'label'         => __( 'Title', 'carrentals' ),
                        'type'          => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'       => 'Projects Completed'
                    ],
                    [
                        'name'    => 'number',
                        'label'   => __( 'Number', 'carrentals' ),
                        'type'    => Controls_Manager::TEXT,
                        'default' => '2536'
                    ]
                ],
            ]
        );

        $this->end_controls_section(); // End content

        //------------------------------ Style counter ------------------------------
        $this->start_controls_section(
            'style_counter', [
                'label' => __( 'Style Counter', 'carrentals' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_countertitle', [
                'label' => __( 'Title Color', 'carrentals' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-fact h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_number', [
                'label'     => __( 'Number Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-fact p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg', [
                'label'     => __( 'Background Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .facts-area' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
	}

	protected function render() {

    $settings = $this->get_settings();


    ?>
    <section class="facts-area section-gap">
        <div class="container">
            <div class="row">
                <?php
                if( is_array( $settings['counter'] ) && count( $settings['counter'] ) > 0 ):
                    foreach( $settings['counter'] as $val ):
                ?>
                <div class="col single-fact">
                    <?php
                    if( ! empty( $val['number'] ) ) {
                        echo carrentals_heading_tag(
                            array(
                                'tag'  => 'h1',
                                'class' => 'counter',
                                'text' => absint( $val['number'] )
                            )
                        );
                    }
                    //
                    if( ! empty( $val['label'] ) ) {
                        echo carrentals_paragraph_tag(
                            array(
                                'text' => esc_html( $val['label'] )
                            )
                        );
                    }
                    ?>
                </div>
                <?php 
                    endforeach;
                endif;
                ?>
            </div>
        </div>  
    </section>
    <!-- end fact Area -->

    <?php

    }
	
}
