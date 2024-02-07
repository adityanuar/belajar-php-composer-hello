<?php

namespace Adit\Lib;

class Customer 
{
    
    public function __construct(private string $name) 
    {
        echo "Customer created\n";
    }

    public function sayHello(string $name): string
    {
        return "Hello, $name\n";
    }
}