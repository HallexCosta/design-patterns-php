<?php

namespace DesignPatterns\Interfaces\Singleton;

/**
 * interface SingletonContract
 */
interface SingletonContract
{
	/**
	 * instance
	 * @return SingletonContract
	 */
	public static function instance() : SingletonContract;
}