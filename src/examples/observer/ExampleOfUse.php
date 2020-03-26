<?php

require_once __DIR__ . '/../vendor/autoload.php';

<<<<<<< HEAD
=======
use PHP\DesignPatterns\Interfaces\Observer\SubjectInterface;
>>>>>>> d8d96efd301201f18fd8d854f5cbac3b6dea6008
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
<<<<<<< HEAD
//Object Inheritance
=======
//
>>>>>>> d8d96efd301201f18fd8d854f5cbac3b6dea6008
final class TestSubject extends Subject
{
}

//Objects Tests Subject and Observer (It's not a test Unit)
$testSubject = new TestSubject;
$testObserver = new TestObserver;

<<<<<<< HEAD
//Object Inheritance (Anonymous Class)
=======
//Object Inheritance
>>>>>>> d8d96efd301201f18fd8d854f5cbac3b6dea6008
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
