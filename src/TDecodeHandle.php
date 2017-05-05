<?php

namespace Fenzland\JSON;

////////////////////////////////////////////////////////////////

trait TDecodeHandle
{

	/**
	 * The global Decoder, if isset, JSON::decode will use this decoder.
	 *
	 * @static
	 *
	 * @access protected
	 *
	 * @var    Decoder
	 */
	protected static $globalDecoder;

	/**
	 * JSON decode (default).
	 *
	 * @static
	 *
	 * @access public
	 *
	 * @param  mixed $data
	 *
	 * @return string
	 */
	public static function decode( $data ):string
	{
		return (self::$globalDecoder??new Decoder())->decode( $data );
	}

	/**
	 * Generate the global Decoder.
	 *
	 * @static
	 *
	 * @access public
	 *
	 * @param  mixed $options
	 *
	 * @return Decoder
	 */
	public static function generateGlobalDecoder( $options=[] ):Decoder
	{
		return self::$globalDecoder= self::decoder( $options );
	}

	/**
	 * Create a JSON decoder.
	 *
	 * @static
	 *
	 * @access public
	 *
	 * @param  mixed $options
	 *
	 * @return Decoder
	 */
	public static function decoder( $options=[] ):Decoder
	{
		return (new Decoder())->setOptions( $options );
	}

}
