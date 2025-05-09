<?php
namespace QuiqOwl\Api;

use WP_REST_Server;

abstract class Base {
	/**
	 * Register REST Routes
	 *
	 * @return void
	 */
	abstract function register();

	public function register_endpoint( $endpoint, $args = array() ) {
		register_rest_route( 'quiqowl/v1', $endpoint, $args );
	}

	public function get( $endpoint, $args = array() ) {
		$_args = wp_parse_args(
			$args,
			array(
				'methods'             => WP_REST_Server::READABLE,
				'permission_callback' => '__return_true',
			)
		);

		$this->register_endpoint( $endpoint, $_args );
	}

	public function post( $endpoint, $args = array() ) {
		$_args = wp_parse_args(
			$args,
			array(
				'methods'             => WP_REST_Server::CREATABLE,
				'permission_callback' => '__return_true',
			)
		);

		$this->register_endpoint( $endpoint, $_args );
	}
}
