<?php
class IntArray{
    protected $array;
    public function __construct($array)
    {
        $this->array=$array;
    }
    public function calSum()
    {
        return array_sum($this->array);
    }
    public function calAvg()
    {
        return $this->calSum()/ count($this->array);
    }
    public function findMax()
    {
        return max($this->array);
    }
}
$array=[1, 3, 8, 2, 7];
$array= new IntArray($array);
$sum=$array->calSum();
$avg=$array->calAvg();
$max=$array->findMax();
echo "Sum : " . $sum . "\n";
echo "Average : " . $avg . "\n";
echo "Max array : " . $max . "\n";
?>