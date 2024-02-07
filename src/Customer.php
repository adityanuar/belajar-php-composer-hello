<?php

namespace Adityanuar\Lib;

class Customer 
{

    public function __construct(private string $name) 
    {
        echo "Customer created\n";
    }

    public function sayHello(string $name = 'Guest'): string
    {
        return "Hello, $name\n";
    }
}