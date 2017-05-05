<?php

namespace Fenzland\JSON;

////////////////////////////////////////////////////////////////

trait THandle
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
	protected static $globalSubject;

	/**
	 * JSON encode (default).
	 *
	 * @static
	 *
	 * @access public
	 *
	 * @param  mixed ...$parameters
	 *
	 * @return string
	 */
	public static function execute( ...$parameters ):string
	{
		return (self::$globalSubject??static::newSubject())->execute( ...$parameters );
	}

	/**
	 * Generate the global Encoder.
	 *
	 * @static
	 *
	 * @access public
	 *
	 * @param  mixed ...$parameters
	 *
	 * @return Encoder
	 */
	public static function generateGlobalSubject( ...$parameters )
	{
		return self::$globalSubject= self::newSubject( ...$parameters );
	}

	/**
	 * Create a JSON newSubject.
	 *
	 * @static
	 *
	 * @access public
	 *
	 * @param  mixed ...$parameters
	 *
	 * @return Encoder
	 */
	public static function newSubject( ...$parameters )
	{
		$subjectClass= static::subjectClass();

		return (new $subjectClass)->setOptions( ...$parameters );
	}

	/**
	 * Get the subject Class.
	 *
	 * @access protected
	 *
	 * @return class
	 */
	protected function subjectClass():string
	{
		echo __FUNCTION__;
		die;
	}

}
