<?php
namespace App\Traits;

trait Pr {

	/**
	 * @template T
	 * @param T $value
	 * @return T
	 */
	public function pr( $value, ?string $title = null ) {
		if ( $title )
			info( "_________ {$title} _________" );
		info( $value );
		return $value;
	}

	/**
	 * @template T
	 * @param T $value
	 * @return T
	 */
	public function dump( $value, ?string $title = null ) {
		if ( $title )
			dump( "_________ {$title} _________" );
		dump( $value );
		return $value;
	}
}
