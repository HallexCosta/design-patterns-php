<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHP\DesignPatterns\Interfaces\Observer\SubjectInterface;
use PHP\DesignPatterns\Observer\Observer;
use PHP\DesignPatterns\Observer\Subject;

final class TestObserver extends Observer
{
    //Poliform Method Update
	public function update(SplSubject $subject) : void
	{
		echo 'Poliform' . PHP_EOL;
		parent::update($subject);
	}
}
//
final class TestSubject extends Subject
{
}

//Objects Tests Subject and Observer (It's not a test Unit)
$testSubject = new TestSubject;
$testObserver = new TestObserver;

//Object Inheritance
$subject = new class extends Subject {
};
$observer = new class extends Observer {
};

//Callback normal
$subject->attach($observer);
$subject->attach($testObserver);

//Fluency Interface
$testSubject->attach($observer)->attach($testObserver);

//Notify All Observer
$subject->notify();
$testSubject->notify();

//Debug of Subjects
var_dump($subject);
var_dump($testSubject);
