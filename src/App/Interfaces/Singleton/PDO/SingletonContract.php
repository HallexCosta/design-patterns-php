<?php

namespace DesignPatterns\Interfaces\Singleton\PDO;

use PDO;

/**
 * interface SingletonContract
 */
interface SingletonContract
{
	/**
	 * instance
	 * @return PDO
	 */
	public static function instance() : PDO;
	/**
	 * connect
	 * @return PDO
	 */
	public static function connect() : PDO;
}