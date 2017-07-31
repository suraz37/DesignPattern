<?php
namespace Acme;

abstract class SubAbstract
{

    public function make()
    {
        return $this->layDown()
            ->addFlour()
            ->addOneItem()
            ->addWater();
    }

    public function layDown()
    {
        var_dump('lay Down');
        return $this;
    }

    public function addFlour()
    {
        var_dump('Add flour');
        return $this;
    }

    public function addWater()
    {
        var_dump('Add Water');
        return $this;
    }

    abstract protected function addOneItem();
}
