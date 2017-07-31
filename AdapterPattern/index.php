<?php
require "vendor/autoload.php";
use Acme\Person;
use Acme\Book;
use Acme\Kindle;
use Acme\Nook;
use Acme\eReaderAdapter;

// Person(new eReaderAdapter(new Kindle));
new Person(new eReaderAdapter(new Nook));
