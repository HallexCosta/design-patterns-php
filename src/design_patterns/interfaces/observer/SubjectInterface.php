<?php

namespace PHP\DesignPatterns\Interfaces\Observer;

/**
 * class SubjectInterface
 */
interface SubjectInterface
{
    public function attach(Observer $observer) : void;
    public function detach(Observer $observer) : void;
    public function notify() : void;
}
