<?php
namespace Acme;

class Book implements BookInterface
{

    public function open()
    {
        var_dump("Book open");
    }

    public function turnPage()
    {
        var_dump("Book turn Page");
    }
}
