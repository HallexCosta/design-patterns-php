<?php

namespace PHP\DesignPatterns\Interfaces\Observer;

/**
 * class ObserverInterface
 */
interface ObserverInterface
{
	public function update(Subject $subject) : void;
}
