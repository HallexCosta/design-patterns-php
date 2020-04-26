<?php

namespace DesignPatterns\Singleton;

use DesignPatterns\Interfaces\Singleton\SingletonContract;

/**
 * trait Singleton
 */
trait Singleton
{
	/**
	 * @var SingletonContract|PDO|nullable $instance
	 */
	private static ?SingletonContract $instance = null;
	/**
	 * instance
	 * @return SingletonContract
	 */
	public static function instance() : SingletonContract
	{
		return static::$instance ??= new static;
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