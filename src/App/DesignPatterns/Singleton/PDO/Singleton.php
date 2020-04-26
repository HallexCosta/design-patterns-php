<?php

namespace DesignPatterns\Singleton\PDO;

use PDO;

/**
 * trait Singleton
 */
trait Singleton
{
	/**
	 * @var PDO|nullable $instance
	 */
	private static ?PDO $instance = null;
	/**
	 * instance
	 * @return SingletonContract
	 */
	public static function instance() : PDO
	{
		return static::$instance ??= static::connect();
	}
	/**
	 * __construct
	 */
	private function __construct()
	{
	}
	/**
	 * __clone
	 */
	private function __clone()
	{
	}
	/**
	 * __wakeup
	 */
	private function __wakeup()
	{
	}
}