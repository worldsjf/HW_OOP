<?php
class Human{
    protected $name,$age,$address;
    public function __construct($name,$age,$address)
    {
        $this->name=$name;
        $this->age=$age;
        $this->address=$address;
    }
    public function displayPeople()
    {
        echo "Name:".$this->name."<br>";
        echo "Age:".$this->age."<br>";
        echo "Address:".$this->address."<br>";
    }
}

$people= new Human("Trịnh Đăng Tính","21","Hà Nội");
$people->displayPeople();

$people1= new Human("Hoàng Văn Sáng","25","Hà Nội");
$people1->displayPeople();

$people2= new Human("Nguyễn Văn A","18","Bắc Ninh");
$people2->displayPeople();
?>