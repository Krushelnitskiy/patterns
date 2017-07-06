<?php

include_once __DIR__.'QuackBehaviorInterface.php';

class QuackBehavior implements QuackBehaviorInterface
{
    public function quack()
    {
        return 'Simple Quack';
    }
}
