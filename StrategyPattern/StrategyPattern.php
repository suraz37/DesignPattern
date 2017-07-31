<?php

interface Logger
{
    public function log($data);
}

class logToFile implements Logger
{
    public function log($data)
    {
        var_dump($data);
    }
}

class logToDatabase implements Logger
{
    public function log($data)
    {
        var_dump($data);
    }
}

class logToXML implements Logger
{
    public function log($data)
    {
        var_dump($data);
    }
}

// Algorithn vary independently with clients use it
class App
{
    public function __construct($data, $logger)
    {

        $logger->log($data);
    }
}

//new App('Data to file', new logToFile);
//new App('Data to Database', new logToDatabase);
new App('Data to Xml', new logToXml);
