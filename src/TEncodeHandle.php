<?php

namespace Fenzland\JSON;

////////////////////////////////////////////////////////////////

trait TEncodeHandle
{

	/**
	 * The global Encoder, if isset, JSON::encode will use this encoder.
	 *
	 * @static
	 *
	 * @access protected
	 *
	 * @var    Encoder
	 */
	protected static $globalEncoder;

	/**
	 * JSON encode (default).
	 *
	 * @static
	 *
	 * @access public
	 *
	 * @param  mixed $data
	 *
	 * @return string
	 */
	public static function encode( $data ):string
	{
		return (self::$globalEncoder??new Encoder())->encode( $data );
	}

	/**
	 * Generate the global Encoder.
	 *
	 * @static
	 *
	 * @access public
	 *
	 * @param  mixed $options
	 *
	 * @return Encoder
	 */
	public static function generateGlobalEncoder( $options=[] ):Encoder
	{
		return self::$globalEncoder= self::encoder( $options );
	}

	/**
	 * Create a JSON encoder.
	 *
	 * @static
	 *
	 * @access public
	 *
	 * @param  mixed $options
	 *
	 * @return Encoder
	 */
	public static function encoder( $options=[] ):Encoder
	{
		return (new Encoder())->setOptions( $options );
	}

}
