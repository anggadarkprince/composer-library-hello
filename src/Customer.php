<?php

namespace Anggadarkprince\ComposerLibraryHello;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guest", $title = ""): string
    {
        return "Hello $title $name, My Name is $this->name";
    }
}