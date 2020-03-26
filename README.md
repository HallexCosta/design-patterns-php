# Design Patterns
<<<<<<< HEAD
=======

>>>>>>> d8d96efd301201f18fd8d854f5cbac3b6dea6008
## Description
Repository of Design Patterns for PHP (Recommended PHP 7.4)

## Tested PHP Version
#### PHP => 7.4

## Design Patterns Added
#### Observer ✅
#### Factory  ❌
<<<<<<< HEAD

## How to Use
##### Link: hallex.zapto.org/desgin-patterns-php (coming soon)
#### Observer
```php
<?php

$observer = new class extends Observer {
};
$subject = new class extends Subject {
};

OR

class MyObserver extends Observer {}
class MySubject extends Subject {}

Examples of use:

$mySubject = new MySubject;
$myObserver = new MySubject;

$mySubject->attach($observer);
$mySubject->attach($myObserver);
$mySubject->detach($myObserver);
$mySubject->notify();

OR

$subject
	->attach($observer)
	->attach($myObserver)
	->detach($observer)
	->notify();
```

## Contributor
#### name: Hállex da S. Costa
#### age:  17
#### role: Developer

## Attention
##### Website (hallex.zapto.org) it's Offline ❌

=======
>>>>>>> d8d96efd301201f18fd8d854f5cbac3b6dea6008
