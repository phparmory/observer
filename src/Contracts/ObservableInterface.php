<?php

namespace Armory\Observer\Contracts;

interface ObservableInterface
{
    /**
     * Registers an observer of this object
     * @param  ObserverInterface $observer
     * @return void
     */
    public function registerObserver(ObserverInterface $observer);

    /**
     * Unregisters an observer of this object
     * @param  ObserverInterface $observer
     * @return void
     */
    public function unregisterObserver(ObserverInterface $observer);

    /**
     * Notify all observers that a state change has occured
     * @return void
     */
    public function notifyObservers();
}
