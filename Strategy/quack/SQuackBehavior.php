<?php

include_once __DIR__.'QuackBehaviorInterface.php';

class SQuackBehavior implements QuackBehaviorInterface
{
    public function quack()
    {
        return 'SQuack';
    }
}
