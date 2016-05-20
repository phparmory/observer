<?php

namespace Armory\Observer\Tests\Stubs;

use Armory\Observer\Contracts\ObserverInterface;
use Armory\Observer\Contracts\ObservableInterface;

class TestObserver implements ObserverInterface
{
    /**
     * Check if the observer has been notified
     * @var bool
     */
    public $notified = false;

    /**
     * Notify the observer that a state change has occured
     * @param ObserverableInterface $observable
     * @return void
     */
    public function notify(ObservableInterface $observable)
    {
        $this->notified = true;
    }
}
