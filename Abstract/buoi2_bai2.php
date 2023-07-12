<?php
//Tạo một abstract class "Animal" (Động vật) với một phương thức trừu tượng là "makeSound". Tạo các lớp con "Dog" (Chó) và "Cat" (Mèo) kế thừa từ lớp Animal và triển khai phương thức makeSound theo cách riêng của từng loại động vật.
abstract class Animal {
    abstract protected function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Gau Gau\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meo Meo\n";
    }
}

$dog = new Dog();
echo $dog->makeSound();

$cat = new Cat();
echo $cat->makeSound();

?>