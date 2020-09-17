<?php

/*
Widget Name: Search
Description: Search
Author: 5 Anker GmbH
Version: 1.0
Author URI: https://www.5-anker.com
Documentation: https://docs.5-anker.com/white-label-einbinder/terminsuche
*/

class Anker_Connect_Wls_Search_Widget extends SiteOrigin_Widget {
	public function __construct() {
		parent::__construct(
			'wls-search',
			__( 'Search', 'anker-connect' ),
			[
				'description' => __( 'Search', 'anker-connect' ),
			],
			[
			],
			false,
			plugin_dir_path( __FILE__ )
		);
	}

	public function get_widget_form() {
		return [
			'query' => [
				'type'    => 'text',
				'label'   => __( 'Query', 'anker-connect' ),
				'default' => ''
			],
		];
	}

	public function get_html_content( $instance, $args, $template_vars, $css_name ) {
		?>
        <wls-search<?= ! empty( $instance['query'] ) ? " query=\"{$instance['query']}\"" : ''; ?>></wls-search>
		<?php
	}
}

siteorigin_widget_register( 'wls-search', __FILE__, 'Anker_Connect_Wls_Search_Widget' );
