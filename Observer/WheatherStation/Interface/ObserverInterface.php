<?php

interface ObserverInterface
{
    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     *
     * @return mixed
     */
    public function update(float $temp, float $humidity, float $pressure)
}
