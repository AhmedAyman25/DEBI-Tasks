<?php

class Rectangle
{
    private float $length = 1;
    private float $width = 1;
    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;

    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getArea(float $length, float $width)
    {
        return $length * $width;

    }
    public function getPerimeter(float $length, float $width)
    {
        return ($length + $width) * 2;

    }

    public function dispaly()
    {
        echo "Length: ". $this->length.'<br>';
        echo "Width: ". $this->width.'<br>';
        echo "Area: ". $this->getArea($this->length, $this->width).'<br>';
        echo "perimeter: ". $this->getPerimeter($this->length, $this->width).'<br>';
    }

}
$rec = new Rectangle(2,3);
$rec->dispaly();