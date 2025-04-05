<?php

namespace Hs;

class Customer
{
    public function __construct (private string $name)
    {
    }
    public function sayHello(string $name = "Quest") : string
    {
        return "Hello $name, my name is $this->name";
    }
}