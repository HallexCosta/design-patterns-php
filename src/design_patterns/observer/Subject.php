<?php

namespace PHP\DesignPatterns;

use PHP\DesignPatterns\Interfaces\Observer\SubjectInterface;
use PHP\DesignPatterns\Observer;

/**
 * class Subject
 */
abstract class Subject implements SubjectInterface
{
    /**
     * [$_observers description]
     * @var array
     */
    protected array $_observers = [];
    /**
     * [attach description]
     * @param  SplObserver $observer [description]
     * @return void                  [description]
     */
    public function attach(Observer $observer) : void
    {
        $id = spl_object_hash($observer);
        $this->_observers[$id] = $observer;
    }
    /**
     * [detach description]
     * @param  SplObserver $observer [description]
     * @return void                  [description]
     */
    public function detach(Observer $observer) : void
    {
        $id = spl_object_hash($observer);
        if (isset($this->_observers[$id])) {
            unset($this->_observers[$id]);
        }
    }
    /**
     * [notify description]
     * @return void [description]
     */
    public function notify() : void
    {
        $observers = $this->_observers;
        foreach ($observers as $observer) {
            $observer->update($this);
        }
    }
}
