# Design Patterns

<img src="https://user-images.githubusercontent.com/55293671/77607982-b7a2ca80-6efa-11ea-9c59-d82fba2e34d6.png" width="300" alt="octocat-hallex">

## Description
Repository of Design Patterns for PHP (Recommended PHP 7.4)

## Tested PHP Version
#### PHP => 7.4

## Design Patterns Added

1. Observer ✅
2. Factory  ❌

## Mapping

* [Observer](#observer)
	* [Debug](#debug-observer)
* [Factory](#factory)

## How to Use
##### Link: Click [here](http://hallex.zapto.org/desgin-patterns-php/) to go documentation (coming soon)

<p id="observer"></p>

#### Observer
```php
<?php
//Configure your autoload directory
require_once __DIR__ . '/vendor/autoload.php'

//Import class Observer and Subject
use PHP\DesignPatterns\Observer\Observer;
use PHP\DesignPatterns\Observer\Subject;

//Object Inheritance (Anonymous Class)
$observer = new class extends Observer {
};
$subject = new class extends Subject {
};

//Create your Observer or Subject
final class MyObserver extends Observer
{
	//Poliform Method Update
	public function update(SplSubject $subject) : void
	{
		echo 'Poliform' . PHP_EOL;
		parent::update($subject);
	}
}

final class MySubject extends Subject {}

//My Objects Subject and Observer
$mySubject = new MySubject;
$myObserver = new MyObserver;

//Callback normal
$mySubject->attach($observer);
$mySubject->attach($myObserver);
$mySubject->detach($myObserver);
$mySubject->notify();

//Fluency Interface
$subject
	->attach($observer)
	->attach($myObserver)
	->detach($observer)
	->notify();

```

<p id="debug-observer"></p>

#### Debug:
```php
//Debug Varible "$subject"
class class@anonymous#3 (1) {
  protected array $_observers =>
  array(1) {
    '0000000030ce39d5000000000864895a' =>
    class MyObserver#5 (0) {
    }
  }
}

//Debug Varible "$mySubject"
class MySubject#4 (1) {
  protected array $_observers =>
  array(1) {
    '000000000604545100000000268c42c2' =>
    class class@anonymous#2 (0) {
    }
  }
}
```

## Contributor
```json
{
	"name": "Hállex da Silva Costa",
	"age": 17,
	"role": "Developer",
	"startDate": "18/03/2020",
	"latestUpdate": "26/03/2020 02:51"
}
```

## Attention
##### [Website Hallex](http://hallex.zapto.org/) it's Offline ❌
