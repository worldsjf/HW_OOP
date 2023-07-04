<?php
class AutoCar{
    protected $carCompany,$carColor,$manufactureYear;
    public function __construct($carCompany,$carColor,$manufactureYear)
    {
        $this->carCompany=$carCompany;
        $this->carColor=$carColor;
        $this->manufactureYear=$manufactureYear;
    }
    public function displayInfomation()
    {
        echo "carCompany:".$this->carCompany."<br>";
        echo "carColor:".$this->carColor."<br>";
        echo "manufactureYear:".$this->manufactureYear."<br>";
    }
}

$car= new AutoCar("Merscedes","Đen","2023");
$car->displayInfomation();
?>