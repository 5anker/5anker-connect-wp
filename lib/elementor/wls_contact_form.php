<?php

if (! defined('ABSPATH')) {
	exit;
}

class Anker_Connect_Elementor_Wls_ContactForm_Widget extends \Elementor\Widget_Base
{
	public function get_name()
	{
		return 'wls-contact-form';
	}

	public function get_title()
	{
		return __('Contact Form', 'anker-connect');
	}

	public function get_categories()
	{
		return [ 'connect-wls' ];
	}

	public function get_icon()
	{
		return 'fa fa-envelope';
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
			'privacy',
			[
				'label' => __('Privacy', 'anker-connect'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
				'title' => __('', 'anker-connect')
			]
		);

		$this->end_controls_section();
	}

	protected function render($instance = [])
	{
		$settings = $this->get_settings_for_display(); ?>
		<wls-contact-form privacy="<?= $settings['privacy'] ?? ''; ?>"></wls-contact-form>
		<?php
	}
}
