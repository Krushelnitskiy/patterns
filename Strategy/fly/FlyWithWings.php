<?php

include_once __DIR__.'FlyBehaviorInterface.php';

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        return 'flyWithWings';
    }
}
