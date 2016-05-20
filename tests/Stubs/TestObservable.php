<?php

namespace Armory\Observer\Tests\Stubs;

use Armory\Observer\Contracts\ObservableInterface;
use Armory\Observer\Traits\ObservableTrait;

class TestObservable implements ObservableInterface
{
    use ObservableTrait;
}
