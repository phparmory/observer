<?php

namespace Armory\Observer\Tests;

use Armory\Observer\Tests\Stubs\TestObservable;
use Armory\Observer\Tests\Stubs\TestObserver;
use PHPUnit_Framework_TestCase;

class ObserverTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test that an observer is notified properly
     * @return void
     */
    public function testObserverIsNotified()
    {
        $observable = new TestObservable;
        $observer = new TestObserver;

        // To begin with the test observer should not be notified
        $this->assertEquals(false, $observer->notified);

        // Register the observer and then notify
        $observable->registerObserver($observer);
        $observable->notifyObservers();

        // Assert that the observer is now notified
        $this->assertEquals(true, $observer->notified);
    }
}
