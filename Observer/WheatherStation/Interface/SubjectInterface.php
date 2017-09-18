<?php

interface SubjectInterface
{
    public function registerObserver(ObserverInterface $0);
    public function removeObserver(ObserverInterface $0);
    public function notifyObservers();
}
