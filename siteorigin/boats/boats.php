<?php

/*
Widget Name: Boats
Description: Boats
Author: 5 Anker GmbH
Version: 1.0
Author URI: https://www.5-anker.com
Documentation: https://docs.5-anker.com/white-label-einbinder/bootssuche
*/

class SiteoriginWlsBoats_Widget extends SiteOrigin_Widget
{
	public function __construct()
	{
		parent::__construct(
			'wls-boats',
			__('Boats', '5anker'),
			[
				'description' => __('Boats', '5anker'),
			],
			[
			],
			false,
			plugin_dir_path(__FILE__)
		);
	}

	public function get_widget_form()
	{
		return [
			'query' => [
				'type' => 'text',
				'label' => __('Query', '5anker'),
				'default' => ''
			],
		];
	}

	public function get_html_content($instance, $args, $template_vars, $css_name)
	{
		?>
		<wls-boats query="<?= $instance['query']; ?>"></wls-boats>
		<?php
	}
}

siteorigin_widget_register('wls-boats', __FILE__, 'SiteoriginWlsBoats_Widget');