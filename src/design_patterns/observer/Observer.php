<?php

namespace PHP\DesignPatterns;

use PHP\DesignPatterns\Interfaces\Observer\ObserverInterface;
use PHP\DesignPatterns\Subject;

/**
 * class Observer
 */
abstract class Observer implements ObserverInterface
{
    /**
     * [update description]
     * @param  SplSubject $subject [description]
     * @return void                [description]
     */
    public function update(Subject $subject) : void
    {
    	echo __CLASS__ . PHP_EOL;
    }
}
