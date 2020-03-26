# Design Patterns

![](octocat-hallex.png)

## Description
Repository of Design Patterns for PHP (Recommended PHP 7.4)

## Tested PHP Version
#### PHP => 7.4

## Design Patterns Added
#### - [x] Observer ✅
#### - [ ] Factory  ❌

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
#### name: Hállex da Silva Costa
#### age:  17
#### role: Developer

## Attention
##### Website (hallex.zapto.org) it's Offline ❌
