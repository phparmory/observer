<?php

namespace Armory\Observer\Traits;

use Armory\Observer\Contracts\ObserverInterface;
use SplObjectStorage;

trait ObservableTrait
{
    /**
     * Stores the observers for this object
     * @var SplObjectStorage
     */
    protected $observers;

    /**
     * Create new observer storage for this object
     * @return void
     */
    protected function setupObservers()
    {
        $this->observers = new SplObjectStorage;
    }

    /**
     * Registers an observer of this object
     * @param  ObserverInterface $observer
     * @return void
     */
    public function registerObserver(ObserverInterface $observer)
    {
        if (!$this->observers) {
            $this->setupObservers();
        }

        $this->observers->attach($observer);
    }

    /**
     * Unregisters an observer of this object
     * @param  ObserverInterface $observer
     * @return void
     */
    public function unregisterObserver(ObserverInterface $observer)
    {
        if (!$this->observers) {
            $this->setupObservers();
        }

        $this->observers->detach($observer);
    }

    /**
     * Notify all observers that a state change has occured
     * @return void
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->notify($this);
        }
    }
}
