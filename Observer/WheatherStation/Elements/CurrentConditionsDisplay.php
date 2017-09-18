<?php

include_once __DIR__.'/Interface/ObserverInterface.php';
include_once __DIR__.'/Interface/DisplayElementInterface.php';
include_once __DIR__.'/Interface/SubjectInterface.php';

class CurrentConditionsDisplay implements ObserverInterface, DisplayElementInterface
{
    /** @var float */
    protected $temperature;

    /** @var float */
    protected $humidity;

    /** @var SubjectInterface  */
    protected $whetherData;

    public function __construct(SubjectInterface $whetherData)
    {
        $this->whetherData = $whetherData;
        $this->whetherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure)
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo sprintf('Current conditions: %sF degrees and %s%%  humidity', $this->temperature, $this->humidity);
    }
}
