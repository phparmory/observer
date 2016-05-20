<?php

namespace Armory\Observer\Contracts;

interface ObserverInterface
{
    /**
     * Notify the observer that a state change has occured
     * @param ObserverableInterface $observable
     * @return void
     */
    public function notify(ObservableInterface $observable);
}
