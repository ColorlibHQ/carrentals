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
 * CarRentals elementor Team Member section widget.
 *
 * @since 1.0
 */
class CarRentals_Rent_Car_Slider extends Widget_Base {

	public function get_name() {
		return 'carrentals-rentcar';
	}

	public function get_title() {
		return __( 'Rent Car', 'carrentals' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'carrentals-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ---------------------------------------- Section Heading ------------------------------
        $this->start_controls_section(
            'exibition_heading',
            [
                'label' => __( 'Section Heading', 'carrentals' ),
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
        
		// ----------------------------------------  Rent car content ------------------------------
		$this->start_controls_section(
			'exibition_content',
			[
				'label' => __( 'Rent Car', 'carrentals' ),
			]
		);
		$this->add_control(
            'exibition_slider', [
                'label' => __( 'Create rent car', 'carrentals' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Name', 'carrentals' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Name'
                    ],
                    [
                        'name'  => 'price',
                        'label' => __( 'Price', 'carrentals' ),
                        'type'  => Controls_Manager::TEXT,
                    ],
                    [
                        'name'  => 'priceunit',
                        'label' => __( 'Unit', 'carrentals' ),
                        'type'  => Controls_Manager::TEXT,
                    ],
                    [
                        'name'  => 'btnlabel',
                        'label' => __( 'Button Label', 'carrentals' ),
                        'type'  => Controls_Manager::TEXT,
                    ],
                    [
                        'name'  => 'btnurl',
                        'label' => __( 'Button Url', 'carrentals' ),
                        'type'  => Controls_Manager::URL,
                        'show_external' => false,
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'carrentals' ),
                        'type'  => Controls_Manager::WYSIWYG,
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Photo', 'carrentals' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End exibition content


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


        //------------------------------ Style Content ------------------------------
        $this->start_controls_section(
            'style_content', [
                'label' => __( 'Style Content', 'carrentals' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .single-model .title h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_price', [
                'label'     => __( 'Price Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .single-model .title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Descriptions Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777777',
                'selectors' => [
                    '{{WRAPPER}} .single-model p' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .primary-btn'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_label', [
                'label'     => __( 'Hover Label Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn:hover'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg', [
                'label'     => __( 'Background Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_bg', [
                'label'     => __( 'Hover Background Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_border', [
                'label'     => __( 'Border Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_border', [
                'label'     => __( 'Hover Border Color', 'carrentals' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .primary-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
    $this->load_widget_script();
    ?>

    <section class="model-area section-gap">
        <div class="container">
            <?php 
            // Section Heading
            carrentals_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>
            <div class="active-model-carusel">

                <?php 
                if( is_array( $settings['exibition_slider'] ) && count( $settings['exibition_slider'] ) > 0 ):
                    foreach( $settings['exibition_slider'] as $exibition ):
 
                // Member Picture
                $bgUrl = '';
                if( !empty( $exibition['img']['url'] ) ){
                    $bgUrl = $exibition['img']['url'];
                }

                ?>

                <div class="row align-items-center single-model item">
                    <div class="col-lg-6 model-left">
                        <div class="title justify-content-between d-flex">
                            <?php 
                            if( ! empty( $exibition['label'] ) ) {
                                echo carrentals_heading_tag(
                                    array(
                                        'tag'  => 'h4',
                                        'text' => esc_html( $exibition['label'] ),
                                        'class' => 'mt-20'
                                    )
                                ); 
                            }
                            //
                            if( ! empty( $exibition['price'] ) ) {
                                $unit = ! empty( $exibition['priceunit'] ) ? '<span>' .esc_html( $exibition['priceunit'] ). '</span>' : '';
                                echo '<h2>' . esc_html( $exibition['price'] ) . $unit . '</h2>';
                            }
                            ?>
                        </div>
                        <?php 
                        if( ! empty( $exibition['desc'] ) ) {
                            echo carrentals_get_textareahtml_output( $exibition['desc'] );
                        }
                        // Button
                        if( ! empty( $exibition['btnlabel'] ) && ! empty( $exibition['btnurl']['url'] )  ) {
                            echo carrentals_anchor_tag(
                                array(
                                    'text' => esc_html( $exibition['btnlabel'] ),
                                    'url'  => esc_url( $exibition['btnurl']['url'] ),
                                    'class' => 'text-uppercase primary-btn'
                                 )
                            );
                        }
                        ?>
                    </div>
                    <div class="col-lg-6 model-right">
                        <?php 
                        echo carrentals_img_tag(
                            array(
                                'url'   => esc_url( $bgUrl ),
                                'class' => 'img-fluid'
                            )
                        );
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

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            
            // Exibition widget owlCarousel
            $('.active-model-carusel').owlCarousel({
                items:1,
                loop:true,
                margin:30,
                dots: true
            });

        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
