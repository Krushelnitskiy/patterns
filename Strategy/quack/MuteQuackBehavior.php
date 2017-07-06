<?php

include_once __DIR__.'QuackBehaviorInterface.php';

class MuteQuackBehavior implements QuackBehaviorInterface
{
    public function quack()
    {
        return 'Mute Quack';
    }
}
