<?php

include_once __DIR__.'FlyBehaviorInterface.php';

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        return 'flyNoWay';
    }
}
