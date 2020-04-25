<?php

namespace DesignPatterns\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

/**
 * trait Subject
 */
trait Subject
{
    /**
     * @var SplObjectStorage $observers
     */
    private SplObjectStorage $observers;
    /**
     * __construct
     */
    final public function __construct()
    {
        $this->observers = new SplObjectStorage;
    }
    /**
     * attach
     * @param  SplObserver $observer
     * @return SplSubject
     */
    public function attach(SplObserver $observer) : SplSubject
    {
        $id = spl_object_hash($observer);
        $this->observers->attach($observer, $id);
        return $this;
    }
    /**
     * detach
     * @param  SplObserver $observer
     * @return SplSubject
     */
    public function detach(SplObserver $observer) : SplSubject
    {
        $this->observers->detach($observer);
        return $this;
    }
    /**
     * notify
     * @return void
     */
    public function notify() : void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
