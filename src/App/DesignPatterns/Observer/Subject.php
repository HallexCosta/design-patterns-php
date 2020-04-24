<?php

namespace DesignPatterns\Observer;

use SplObserver;
use SplSubject;

/**
 * trait Subject
 */
trait Subject
{
    /**
     * @var array $observers
     */
    private array $observers = [];
    /**
     * attach
     * @param  SplObserver $observer
     * @return SplSubject
     */
    public function attach(SplObserver $observer) : SplSubject
    {
        $id = spl_object_hash($observer);
        $this->observers[$id] = $observer;
        return $this;
    }
    /**
     * detach
     * @param  SplObserver $observer
     * @return SplSubject
     */
    public function detach(SplObserver $observer) : SplSubject
    {
        $id = spl_object_hash($observer);
        if (isset($this->observers[$id])) {
            unset($this->observers[$id]);
        }
        return $this;
    }
    /**
     * notify
     * @return void
     */
    public function notify() : void
    {
        $observers = $this->observers;
        foreach ($observers as $observer) {
            $observer->update($this);
        }
    }
}
