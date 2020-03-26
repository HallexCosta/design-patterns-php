<?php

namespace PHP\DesignPatterns\Observer;

use SplObserver;
use SplSubject;

/**
 * class Observer
 */
abstract class Observer implements SplObserver
{
    /**
     * [update description]
     * @param  SplSubject $subject [description]
     * @return void                [description]
     */
    public function update(SplSubject $subject) : void
    {
    	echo __CLASS__ . PHP_EOL;
    }
}
