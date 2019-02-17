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
class CarRentals_Features extends Widget_Base {

	public function get_name() {
		return 'carrentals-features';
	}

	public function get_title() {
		return __( 'Features', 'carrentals' );
	}

	public function get_icon() {
		return 'eicon-icon-box';
	}

	public function get_categories() {
		return [ 'carrentals-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Features Section Heading ------------------------------
        $this->start_controls_section(
            'features_heading',
            [
                'label' => __( 'Features Section Heading', 'carrentals' ),
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

        // ----------------------------------------  Features content ------------------------------
        $this->start_controls_section(
            'features_content',
            [
                'label' => __( 'Features', 'carrentals' ),
            ]
        );
        $this->add_control(
            'features', [
                'label' => __( 'Create Features', 'carrentals' ),
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
                        'name' => 'fonticon',
                        'label' => __( 'Font Icon', 'carrentals' ),
                        'type' => Controls_Manager::ICON,
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
        //------------------------------ Style Features ------------------------------
        $this->start_controls_section(
            'style_features', [
                'label' => __( 'Style Features', 'carrentals' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'features_title_heading',
            [
                'label'     => __( 'Style Features Title ', 'carrentals' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_featuretitle', [
                'label' => __( 'Title Color', 'carrentals' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-feature h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        //
        $this->add_control(
            'features_fonticon_heading',
            [
                'label'     => __( 'Style Font Icon', 'carrentals' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_fonticon', [
                'label'     => __( 'Font Icon Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-feature .fa' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'fontsize',
            [
                'label' => __( 'Icon Font Size', 'carrentals' ),
                'type'  => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default'  => [
                    'unit' => 'px',
                    'size' => 18,
                ],
                'selectors' => [
                    '{{WRAPPER}} .single-feature .fa' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Text_Shadow::get_type(), [
                'name'      => 'text_shadow_fonticon',
                'selector'  => '{{WRAPPER}} .single-feature .fa',
            ]
        );

        //
        $this->add_control(
            'features_desc_heading',
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
                    '{{WRAPPER}} .single-feature p' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_section();


		//------------------------------ Style Features Box ------------------------------
		$this->start_controls_section(
			'style_featuresbox', [
				'label' => __( 'Style Features Box', 'carrentals' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
            'featuresbox_bgcolor',
            [
                'label'     => __( 'Style Features Box Background Color', 'carrentals' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'featuresboxbgclor',
                'label' => __( 'Background', 'carrentals' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .single-feature',
            ]
        );
        $this->add_control(
            'featuresbox_bghovercolor',
            [
                'label'     => __( 'Style Hover Features Box Background Color ', 'carrentals' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'featuresboxhovbgclor',
                'label' => __( 'Background', 'carrentals' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .single-feature:hover',
            ]
        );

		$this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();


    ?>
    <section class="feature-area section-gap" id="feature">
        <div class="container">

            <?php 
            // Section Heading
            carrentals_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row">
                <?php 
                if( is_array( $settings['features'] ) && count( $settings['features'] ) > 0 ):
                    foreach( $settings['features'] as $val ):
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <h4>
                        <?php 
                        //
                        if( ! empty( $val['fonticon'] ) ) {
                            echo '<span class="'.esc_attr( $val['fonticon'] ).'"></span>';
                        }
                        //
                        if( ! empty( $val['label'] ) ) {
                            echo esc_html( $val['label'] );
                        }
                        ?>
                        </h4>
                        <?php 
                        //
                        if( ! empty( $val['desc'] ) ) {
                            echo carrentals_get_textareahtml_output( $val['desc'] );
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

    <?php

    }
	
}
