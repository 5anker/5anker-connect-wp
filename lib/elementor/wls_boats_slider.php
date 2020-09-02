<?php

namespace Elementor;

if (! defined('ABSPATH')) {
	exit;
}

class ElementorBoatsSlider_Widget extends Widget_Base
{
	public function get_name()
	{
		return 'wls-boats-slider';
	}

	public function get_title()
	{
		return __('Boats slider', 'anker-connect');
	}

	public function get_categories()
	{
		return [ 'connect-wls' ];
	}

	public function get_icon()
	{
		return 'fa fa-arrows-h';
	}

	protected function _register_controls()
	{
		$this->start_controls_section(
			'settings_section',
			[
				'label' => esc_html__('Settings', 'anker-connect'),
			]
		);

		$this->add_control(
			'query',
			[
				'label' => __('Query', 'anker-connect'),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'title' => __('', 'anker-connect')
			]
		);

		$this->end_controls_section();
	}
	protected function render($instance = [])
	{
		$settings = $this->get_settings_for_display(); ?>
		<wls-boats-slider query="<?= $settings['query'] ?? ''; ?>"></wls-boats-slider>
		<?php
	}
}