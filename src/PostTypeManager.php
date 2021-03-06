<?php

namespace WPLinth;

/**
 * Container of PostType instances in the system.
 * 
 * @package WPlinth
 */
class PostTypeManager {
	protected $types = array();

	public function __construct( $types = array() ) {
		foreach ( $types as $type ) {
			$this->types[ $type::TYPE ] = $type;
		}
	}

	public function get_by_name( $name ) {
		if ( isset( $this->types[ $name ] ) ) {
			return $this->types[ $name ];
		}
		return null;
	}
}