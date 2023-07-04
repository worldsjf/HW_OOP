<?php
class Product{
    protected $name,$price,$description;
    public function __construct($name,$price,$description)
    {
        $this->name=$name;
        $this->price=$price;
        $this->description=$description;
    }
    public function displayProduct()
    {
        echo "Name:".$this->name."<br>";
        echo "Price:".$this->price."<br>";
        echo "Description:".$this->description."<br>";
    }
}

$product1= new Product("Quần","2.100.000","Quần âu đen");
$product1->displayProduct();

$product2= new Product("Áo","950.000","Áo sơ mi trắng");
$product2->displayProduct();

$product3= new Product("Giầy","18.800.000","Giầy da đen");
$product3->displayProduct();
?>