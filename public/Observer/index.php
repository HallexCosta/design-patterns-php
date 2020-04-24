<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Observer\Subject;
use DesignPatterns\Observer\Observer;

//Create your Observer or Subject
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

final class MySubject implements SplSubject
{
	//Import Subject
	use Subject;
	//Poliform Method Attach
	final public function attach(SplObserver $observer) : SplSubject
	{
		$id = spl_object_hash($observer);
		$this->observers[$id] = $observer;
		return $this;
	}
	//Poliform Method Detach
	final public function detach(SplObserver $observer) : SplSubject
	{
		$id = spl_object_hash($observer);
		unset($this->observers[$id]);
		return $this;
	}
	//Poliform Method Notify
	final public function notify() : SplSubject
	{
		foreach ($this->observers as $observer) {
			$observer->update($this);
		}
		return $this;
	}
}

//Object Inheritance (Anonymous Class)
$subject = new class implements SplSubject {
	use Subject;
};
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
$mySubject->notify();

//Fluency Interface
$subject
->attach($observer)
->attach($myObserver)
->detach($observer)
->notify();

//Notify All Observer
$subject->notify();
$mySubject->notify();

//Debug of Subjects
var_dump($subject);
var_dump($mySubject);
