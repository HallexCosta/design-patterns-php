<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use PHP\DesignPatterns\Observer\Observer;
use PHP\DesignPatterns\Observer\Subject;

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

final class MySubject extends Subject
{
}

//Object Inheritance (Anonymous Class)
$subject = new class extends Subject {
};
$observer = new class extends Observer {
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
