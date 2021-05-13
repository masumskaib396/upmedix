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

        $this->end_controls_section();

    }
    protected function render() {
        $settings = $this->get_settings_for_display();


        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, dolor?</p>
                </div>
            </div>
        </div>
        <?php 
    }
        
}
$widgets_manager->register_widget_type( new \Upmedix\Widgets\Elementor\UpmedixIconbox() );