<?php
namespace App\Traits;

trait Pr {

	/**
	 * @template T
	 * @param T $value
	 * @return T
	 */
	public function pr( $value ) {
		info( $value );
		return $value;
	}

	/**
	 * @template T
	 * @param T $value
	 * @return T
	 */
	public function dump( $value ) {
		dump( $value );
		return $value;
	}
}
