<?php
require_once 'Circle.php';
class Cylinder extends Circle{
    private float $height;

    public function __construct(float  $radius, string $color, float $height)
    {
        parent::__construct($radius,$color);
        $this->height = $height;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function getVolume(): float
    {
        return $this->getArea() * $this->height;

    }

}
$cy1 = new Cylinder(2.5,'red',3);
echo "Radius: {$cy1->getRadius()}<br>Color: {$cy1->getColor()} <br> Area: {$cy1->getArea()} <br> Volume: {$cy1->getVolume()} <br>";