# Observer
Observer pattern implementation

### Observables

```php
use Armory\Observer\Contracts\ObservableInterface;
use Armory\Observer\Traits\ObservableTrait;

class TestObservable implements ObservableInterface
{
    use ObservableTrait;
}
```

### Observers

```php
use Armory\Observer\Contracts\ObserverInterface;
use Armory\Observer\Contracts\ObservableInterface;

class TestObserver implements ObserverInterface
{
    public function notify(ObservableInterface $observable)
    {
        echo 'Notified!';
    }
}
```
### Example

```php
$observable = new TestObservable;
$observer = new TestObserver;

$observable->registerObserver($observer);
$observable->notifyObservers(); // echos 'Notified!';
```
