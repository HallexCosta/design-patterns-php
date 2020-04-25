<?php

namespace DesignPatterns\Observer;

use SplSubject;

/**
 * trait Observer
 */
trait Observer
{
    /**
     * update
     * @param  SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject) : void
    {
    	echo __CLASS__ . PHP_EOL;
    }
}
