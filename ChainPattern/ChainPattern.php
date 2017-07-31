<?php

abstract class HomeChecker
{
    protected $successor;

    abstract public function check(HomeStatus $home);

    public function successorWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}

class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->locked) {
            throw new Exception("Please lock the door");
        }
        $this->next($home);
    }
}

class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->lighsOff) {
            throw new Exception("Please light off");
        }
        $this->next($home);
    }
}

class Alarms extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->alarmsOn) {
            throw new Exception("Please Alarms on");
        }
        $this->next($home);
    }
}

class HomeStatus
{
    public $locked = true;
    public $lighsOff = true;
    public $alarmsOn = false;
}

$locks = new Locks;
$lights = new Lights;
$alarms = new Alarms;

$locks->successorWith($lights);
$lights->successorWith($alarms);

$lights->check(new HomeStatus);
