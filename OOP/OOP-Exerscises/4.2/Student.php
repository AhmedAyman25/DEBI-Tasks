<?php
require_once 'Person.php';
class Student extends Person{
    private string $program;
    private int $year;
    private float $fee;
    public function __construct(string $name,string $address,string $program, int $year, float $fee){
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram(): string
    {
        return $this->program;
    }

    public function setProgram(string $program): void
    {
        $this->program = $program;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getFee(): float
    {
        return $this->fee;
    }

    public function setFee(float $fee): void
    {
        $this->fee = $fee;
    }

    public function toString(): void
    {
        parent::toString();
        echo "Program: {$this->program}<br>Year: {$this->year}<br>Fee: {$this->fee} <br>";
    }
}

$s1 = new Student('Ahmed','Cairo','Computer Science',2024,3500);
$s1->toString();