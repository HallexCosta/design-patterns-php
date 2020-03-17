<?php

namespace PHP\DesignPatterns;

use SplObserver;
use SplSubject;

/**
 * class Subject
 */
abstract class Subject implements SplSubject
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
    public function attach(SplObserver $observer) : void
    {
        $id = spl_object_hash($observer);
        $this->_observers[$id] = $observer;
    }
    /**
     * [detach description]
     * @param  SplObserver $observer [description]
     * @return void                  [description]
     */
    public function detach(SplObserver $observer) : void
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
