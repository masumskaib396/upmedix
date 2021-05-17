<?php
/**
 * Happyden Team Widget.
 *
 *
 * @since 1.0.0
 */
namespace Upmedix\Widgets\Elementor;

use Elementor\Controls_Manager;
use Elementor\Utils;
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


        /* Tab content */
        $this->start_controls_section('iconbox_section',
            [
                'label' => __('Icon Box Section', 'upmedix'),
                'tab'   => Controls_Manager::TAB_CONTENT,
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
			'title',
			[
				'label' => __( 'Title', 'upmedix' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Enter your title', 'upmedix' ),
                'label_block' => true,
			]
		);

        $this->add_control(
			'description',
			[
				'label' => __( 'Description', 'upmedix' ),
				'type' => Controls_Manager::WYSIWYG,
				'default' => __( 'some text ', 'upmedix' ),
			]
		);

        $this->end_controls_section();

        /* Tab style */
        $this->start_controls_section('iconbox_section_style',
            [
                'label' => __('Icon Box Style', 'upmedix'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );



        /* Image controls */

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
					'{{WRAPPER}} .upmedix-icon-box .upmedix-thumb img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'image_bg_color',
			[
				'label' => __( 'Background Color', 'upmedix' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .upmedix-thumb' => 'background-color: {{VALUE}}',
				],
			]
		);


















        $this->end_controls_section();

    }
    protected function render() {
        $settings = $this->get_settings_for_display();

        $image = $settings['image'];
        $title = $settings['title'];
        $description = $settings['description'];

        ?>
            <div class="upmedix-icon-box">
                <div class="upmedix-thumb">
                    <img src="<?php echo esc_url( $image['url']); ?>" alt="">
                </div>
                <h4><?php echo esc_html($title); ?></h4>
               <?php echo apply_filters( 'the_contnet', $description); ?>
            </div>
        <?php 
    }
        
}
$widgets_manager->register_widget_type( new \Upmedix\Widgets\Elementor\UpmedixIconbox() );