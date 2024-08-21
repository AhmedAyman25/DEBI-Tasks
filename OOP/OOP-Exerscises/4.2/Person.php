<?php
 class Person
{
    protected string $name;
    protected string $address;
    public function __construct(string $name, string $address){
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
    public function toString(): void
    {
        echo "Name: {$this->name}<br>Address: {$this->address} <br>";
    }

}


