<?php

include_once __DIR__.'./fly/FlyBehaviorInterface.php';
include_once __DIR__.'/quack/QuackBehaviorInterface.php';

abstract class Duck
{
    /** @var  FlyBehaviorInterface */
    protected $flyBehaviour;

    /** @var  QuackBehaviorInterface */
    protected $quackBehaviour;

    abstract public function display();

    public function setFlyBehavior(FlyBehaviorInterface $flyBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    public function setQuackBehavior(QuackBehaviorInterface $quackBehaviour)
    {
        $this->quackBehaviour = $quackBehaviour;
    }

    public function performFly()
    {
        return $this->flyBehaviour->fly();
    }

    public function performQuack()
    {
        return $this->quackBehaviour->quack();
    }
}
