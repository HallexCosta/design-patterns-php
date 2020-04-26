<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Singleton\PDO\Singleton as PDOSingleton;
use DesignPatterns\Singleton\Singleton as SingletonMethod;
use DesignPatterns\Interfaces\Singleton\SingletonContract;
use DesignPatterns\Interfaces\Singleton\PDO\SingletonContract as PDOSingletonContract;

class Singleton implements SingletonContract
{
	use SingletonMethod;
	/**
	 * It possible make overwrite of method instance()
	 * or property $instance
	 */
}

class NotSingleton
{
}

class Connection implements PDOSingletonContract
{
	use PDOSingleton;
	public static function connect() : PDO
	{
		return new PDO(
			'mysql:host=localhost;dbname=SOME_DATABASE',
			'root',
			''
		);
	}
}


function identicalObjects(object ...$args)
{
	[$object1, $object2] = $args;
	return var_dump(assert($object1 === $object2));
}

$singleton = new Singleton;//Fatal Error
$singleton1 = Singleton::instance();//Single Instance
$singleton2 = Singleton::instance();//Single Instance
identicalObjects($singleton1, $singleton2);//true - It is a single intance

$notSingleton1 = new NotSingleton;//new Instance
$notSingleton2 = new NotSingleton;//new Instance
identicalObjects($notSingleton1, $notSingleton2);//failed - It is not a single instance

$connection = new Connection;//Fatal Error
$connection1 = Connection::instance();//Single Instance
$connection2 = Connection::instance();//Single Instance
identicalObjects($connection1, $connection2);//true - It is a single instance of PDO