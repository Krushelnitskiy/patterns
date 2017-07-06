<?php

include_once __DIR__.'./MallardDuck.php';
include_once __DIR__.'./quack/QuackBehavior.php';
include_once __DIR__.'./fly/FlyWithWings.php';

$mallarDuck = new MallardDuck();
$flyBehavor = new FlyWithWings();
$quackBehavor = new QuackBehavior();

$mallarDuck->setFlyBehavior($flyBehavor);
$mallarDuck->setQuackBehavior($quackBehavor);

echo $mallarDuck->performFly();
echo $mallarDuck->performQuack();
echo $mallarDuck->performQuack();
