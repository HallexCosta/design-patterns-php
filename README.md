
# Design Patterns

<img src="https://user-images.githubusercontent.com/55293671/77607982-b7a2ca80-6efa-11ea-9c59-d82fba2e34d6.png" width="300" alt="octocat-hallex">

## Description
Repository of Design Patterns for PHP (Recommended PHP 7.4)

## Tested PHP Version
#### PHP => 7.4

## Design Patterns Added

|	 	# 		|	Design Patterns |	  Added		|
| ------------- | ----------------- | ------------- |
| 	  **1**		| 		Observer  	|		✅		|
| 	  **2**		| 		Singleton  	|		❌		|
| 	  **3**		| 		Factory  	|		❌		|

# How to Use
#### Link: Click [here](http://hallex.zapto.org/desgin-patterns-php/) to go documentation (coming soon)

# Guide
* [Install](#install)
* [DesignPatterns](#design-patterns)
	* [Observer](#observer)
	* [Singleton](#singleton)
	* [Factory](#factory)

[](#install)
# Install
> **composer require hallex/design-patterns ^1.0**

[](#design-patterns)
# Design Patterns
[](#observer)
## Observer
```php
<?php
//Configure your autoload directory
require_once __DIR__ . '/vendor/autoload.php'

use DesignPatterns\Observer\Subject;
use DesignPatterns\Observer\Observer;

//Overwrite Methods Observer
final class MyObserver implements SplObserver
{
	//Import Observer
	use Observer;
    //Poliform Method Update
	public function update(SplSubject $subject) : void
	{
		echo 'Poliform' . PHP_EOL;
	}
}

//Overwrite Methods Observer
final class MySubject implements SplSubject
{
	//Import Subject
	use Subject;

	final public function attach(SplObserver $observer) : SplSubject
	{
		$this->observers->attach($observer);
		return $this;
	}

	final public function detach(SplObserver $observer) : SplSubject
	{
		$this->observers->detach($observer);
		return $this;
	}

	final public function notify() : void
	{
		foreach ($this->observers as $observer) {
			$observer->update($this);
		}
	}
}

//Import Subject Methods in your class
$subject = new class implements SplSubject {
	use Subject;
};
//Import Observers Methods in your class
$observer = new class implements SplObserver {
	use Observer;
};

//My Objects Subject and Observer
$mySubject = new MySubject;
$myObserver = new MyObserver;

//Callback normal
$mySubject->attach($observer);
$mySubject->attach($myObserver);
$mySubject->detach($myObserver);

//Fluency Interface
$subject
	->attach($observer)
	->attach($myObserver)
	->detach($observer);

//Notify All Observer
$subject->notify();
$mySubject->notify();

//Debug of Subjects
var_dump($subject);
var_dump($mySubject);
```

## Debug
```php
//Debug Varible "$subject"
object(class@anonymous)[3]
  private SplObjectStorage 'observers' =>
    object(SplObjectStorage)[2]
      private 'storage' =>
        array (size=1)
          '000000002b33b19f0000000058b0c727' =>
            array (size=2)

//Debug Varible "$mySubject"
object(MySubject)[5]
  private SplObjectStorage 'observers' =>
    object(SplObjectStorage)[6]
      private 'storage' =>
        array (size=1)
          '000000002b33b19c0000000058b0c727' =>
            array (size=2)
```
----------------------------------------------------------------------------------------
[](#singleton)
## Singleton
```php
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
```

## Debug
```php
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
```

# Author
| [<img src="https://avatars2.githubusercontent.com/u/55293671?s=200&v=4"><br><sub>@HallexCosta</sub>](https://github.com/HallexCosta) |
| :---: |
