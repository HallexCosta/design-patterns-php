<?php

require_once __DIR__ . '/../../vendor/autoload.php';

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

	final public function observers()
	{
		return $this->observers;
	}
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