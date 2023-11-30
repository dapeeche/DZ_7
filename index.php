<?php
//for pull-request
interface CanEat
{
    public function eat();
}

interface CanFly
{
    public function fly();
}

class Swallow implements CanEat, CanFly
{
    public function eat(){}
    public function fly(){}
}

class Ostrich implements CanEat
{
    public function eat(){}
}
