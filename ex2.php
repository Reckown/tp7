<?php

abstract class Shape{
    abstract function getArea();
}

class Square extends Shape {
    private $width;
    private $height;
    function getArea(){
        return $this->width * $this->height;
    }

    function __construct($w, $h){
        $this->width = $w;
        $this->height = $h;
    }
}

class Circle extends Shape {
    private $radius;
    function getArea(){
        return 3.14 * $this->radius * $this->radius;
    }

    function __construct($c){
        $this->radius = $c;
    }
}

$square = new Square(5, 5);
$circle = new Circle(3);

echo get_class($square)." n Area ".$square->getArea();
echo "<br>";
echo get_class($circle). " Area ".$circle->getArea();
echo "<br>";