<?php
namespace Acme;

class TurkeySub extends SubAbstract
{

    public function addOneItem()
    {
        var_dump('Add Turkey');
        return $this;
    }
}
