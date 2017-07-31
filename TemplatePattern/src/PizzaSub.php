<?php
namespace Acme;

class PizzaSub extends SubAbstract
{

    public function addOneItem()
    {
        var_dump('Add Pizza sub1');
        return $this;
    }
}
