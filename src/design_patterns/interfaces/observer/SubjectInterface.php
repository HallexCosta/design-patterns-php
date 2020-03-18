<?php

namespace PHP\DesignPatterns\Interfaces\Observer;

use PHP\DesignPatterns\Observer;

/**
 * class SubjectInterface
 */
interface SubjectInterface
{
	public function attach(Observer $observer) : void;
	public function detach(Observer $observer) : void;
	public function notify() : void;
}
