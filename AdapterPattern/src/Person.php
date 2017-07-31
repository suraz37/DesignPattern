<?php
namespace Acme;

class Person
{
    protected $reader;

    public function __construct(BookInterface $reader)
    {
        $this->reader = $reader;
        $this->reader->open();
        $this->reader->turnPage();
    }
}
