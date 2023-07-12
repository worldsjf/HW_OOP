<?php
interface Drawable {
    public function draw();
}

class Circle implements Drawable {
    public function draw() {
        echo "Drawing a circle";
    }
}

class Square implements Drawable {
    public function draw() {
        echo "Drawing a square";
    }
}


$circle = new Circle();
$circle->draw(); 
echo "<br>";
$square = new Square();
$square->draw();
