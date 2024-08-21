<?php

class Circle
{
    protected float $radius;
    protected string $color;

    public function __construct(float  $radius, string $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getArea(): float
    {
        return pi() * $this->radius * $this->radius;

    }

    public function toString(): void
    {
        echo "Radius: {$this->radius}<br>Color: {$this->color} <br> Area: {$this->getArea()} <br>";
    }

}
$c1 = new Circle(2.5,'red');
$c1->toString();


