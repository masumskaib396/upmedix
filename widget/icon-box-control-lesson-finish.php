<?php
/**
 * Happyden Team Widget.
 *
 *
 * @since 1.0.0
 */
namespace Upmedix\Widgets\Elementor;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
// use Elementor\Scheme_Typography;
use Elementor\Widget_Base;

if (!defined('ABSPATH')) {
    exit;
}
// If this file is called directly, abort.
class UpmedixIconbox extends \Elementor\Widget_Base {


    public function get_name() {
        return 'upmedix_iconbox';
    }

    public function get_title() {
        return __('Upmedix Icon Box', 'upmedix');
    }
    public function get_icon() {
        return ('eicon-icon-box');
    }

    public function get_categories() {
        return ['upmedix_catgory'];
    }

    public function get_keywords() {
        return ['icon box', 'upmedix', 'icon'];
    }

    protected function _register_controls() {


        $this->start_controls_section('iconbox_section',
            [
                'label' => __('Icon Box Section', 'upmedix'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
			'title',
			[
				'label' => __( 'Title', 'upmedix' ),
				'type' => Controls_Manager::TEXT,
                'default' => __( 'Default title', 'upmedix' ),
				'placeholder' => __( 'Enter your title', 'upmedix' ),
			]
		);
        $this->add_control(
			'text',
			[
				'label' => __( 'Description', 'upmedix' ),
				'type' => Controls_Manager::WYSIWYG,
				'placeholder' => __( 'Enter your title', 'upmedix' ),
			]
		);
        $this->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'upmedix' ),
				'type' => Controls_Manager::MEDIA,
			]
		);
        $this->add_control(
			'tag',
			[
				'label' => __( 'HTML Tag', 'upmedix' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'h1' => __( 'H1', 'upmedix' ),
					'h2' => __( 'H2', 'upmedix' ),
					'h3' => __( 'H3', 'upmedix' ),
					'h4' => __( 'H4', 'upmedix' ),
					'h5' => __( 'H5', 'upmedix' ),
					'h6' => __( 'H6', 'upmedix' ),
				],
				'default' => 'h2',
			]
		);

        $this->end_controls_section();

        // Image Control
        $this->start_controls_section('iconbox_image_style',
            [
                'label' => __('Image', 'upmedix'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'image_bg_color',
			[
				'label' => __( 'Background Color', 'upmedix' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .card .card-image' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_control(
			'image_min_width',
			[
				'label' => __( 'Min Width', 'upmedix' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 600,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .card .card-image img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => __( 'Border', 'upmedix' ),
				'selector' => '{{WRAPPER}} .card .card-image',
			]
		);
        $this->add_control(
			'border-radius',
			[
				'label' => __( 'Border Radius', 'upmedix' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .card .card-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'margin',
			[
				'label' => __( 'Margin', 'upmedix' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .card .card-image' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'upmedix' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .card .card-image' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        

        $this->end_controls_section();



        //============================================================================
        //Title Control
        //===========================================================================
        $this->start_controls_section('iconbox_title_style',
            [
                'label' => __('Title', 'upmedix'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'title_color',
			[
				'label' => __( 'Color', 'upmedix' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .card .card-body > .card-title' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'label' => __( 'Typography', 'upmedix' ),
				'selector' => '{{WRAPPER}} .card .card-body > .card-title',
			]
		);

        $this->add_control(
			'title_margin',
			[
				'label' => __( 'Margin', 'upmedix' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .card .card-body > .card-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'title_padding',
			[
				'label' => __( 'Padding', 'upmedix' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .card .card-body > .card-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        

        $this->end_controls_section();



        
        //============================================================================
        //Description Control
        //===========================================================================
        $this->start_controls_section('iconbox_description_style',
            [
                'label' => __('Description', 'upmedix'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'description_color',
			[
				'label' => __( 'Color', 'upmedix' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .card .card-body > .card-description' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'card_description_typography',
				'label' => __( 'Typography', 'upmedix' ),
				'selector' => '{{WRAPPER}} .card .card-body > .card-description',
			]
		);

        $this->add_control(
			'description_margin',
			[
				'label' => __( 'Margin', 'upmedix' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .card .card-body > .card-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'description_padding',
			[
				'label' => __( 'Padding', 'upmedix' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .card .card-body > .card-description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        

        $this->end_controls_section();


        //============================================================================
        // Box Control
        //===========================================================================

        $this->start_controls_section('iconbox_box_style',
            [
                'label' => __('Box', 'upmedix'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        // -------------------------
        // Normal Box Style Tab Wrapper
        //--------------------------
        $this->start_controls_tabs(
            'box_style_tabs'
        );


            // -------------------------
            // Normal Box Style Tab single
            //--------------------------
            $this->start_controls_tab(
                'box_style_normal_tab',
                [
                    'label' => __( 'Normal', 'fd-addons' ),
                ]
            );

            $this->add_control(
                'box_bg_color',
                [
                    'label' => __( 'Background Color', 'upmedix' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .card' => 'background-color: {{VALUE}}',
                    ],
                ]
            );
            
            $this->add_group_control(
                Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'box_box_shadow',
                    'label' => __( 'Box Shadow', 'upmedix' ),
                    'selector' => '{{WRAPPER}} .card',
                ]
            );
            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'box_border',
                    'label' => __( 'Border', 'upmedix' ),
                    'selector' => '{{WRAPPER}} .card',
                ]
            );
            $this->add_control(
                'box_margin',
                [
                    'label' => __( 'Box Margin', 'upmedix' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .card' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'box_padding',
                [
                    'label' => __( 'Box Padding', 'upmedix' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .card' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->end_controls_tab();

            // -------------------------
            // Hover Box Style Tab single
            //--------------------------

            
            $this->start_controls_tab(
                'box_style_hover_tab',
                [
                    'label' => __( 'Hover', 'fd-addons' ),
                ]
            );


            $this->add_control(
                'box_bg_hover_color',
                [
                    'label' => __( 'Background Hover Color', 'upmedix' ),
                    'type' => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .card:hover' => 'background-color: {{VALUE}}',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'box_box_shadow_hover',
                    'label' => __( 'Box Shadow', 'upmedix' ),
                    'selector' => '{{WRAPPER}} .card:hover',
                ]
            );

            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'box_hover_border',
                    'label' => __( 'Border', 'upmedix' ),
                    'selector' => '{{WRAPPER}} .card:hover',
                ]
            );


            
            $this->end_controls_tab();


        $this->end_controls_tabs();


        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        $image = $settings['image'];
        $title = $settings['title'];
        $text = $settings['text'];


        ?>
        
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo esc_url( $image['url'] )?>" alt="">
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?php echo esc_html( $title ); ?></h2>
                    <div class="card-description">
                        <?php echo upmedix_get_meta($text); ?>
                    </div>
                </div>
            </div>
        <?php 
    }
        
}
$widgets_manager->register_widget_type( new \Upmedix\Widgets\Elementor\UpmedixIconbox() );