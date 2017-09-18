<?php

class WheatherData implements SubjectInterface
{
    private $observers = [];

    private $temp;
    private $humidity;
    private $pressure;

    public function registerObserver(ObserverInterface $o) {
        $this->observers[] = $o;
    }

    public function removeObserver(ObserverInterface $o) {
        /** @var ObserverInterface $observer */
        foreach ($this->observers as $key => $observer) {
            if ($observer === $o) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notifyObservers()
    {
        /** @var ObserverInterface $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this->temp, $this->humidity, $this->pressure);
        }
    }

    public function measurementChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temp, float $humidity, float $pressure)
    {
        $this->temp = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementChanged();
    }
}
