<?php
require_once 'Person.php';
class Staff extends Person
{
    private string $school;
    private float $pay;
    public function __construct(string $name, string $address, string $school, float $pay)
    {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getSchool(): string
    {
        return $this->school;
    }

    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    public function getPay(): float
    {
        return $this->pay;
    }

    public function setPay(float $pay): void
    {
        $this->pay = $pay;
    }
    public function toString(): void
    {
        parent::toString();
        echo "School: {$this->school}<br>Pay: {$this->pay}<br>";
    }

}
$staff1 = new Staff('Ahmed','Cairo','BU School',2500);
$staff1->toString();
