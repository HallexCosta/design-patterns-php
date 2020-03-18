<?php

namespace PHP\DesignPatterns\Interfaces\Observer;

use PHP\DesignPatterns\Subject;

/**
 * class ObserverInterface
 */
interface ObserverInterface
{
	public function update(Subject $subject) : void;
}
