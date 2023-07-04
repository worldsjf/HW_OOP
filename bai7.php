<?php
class Fraction{
    protected $numerator,$denominator;

    public function __construct($numerator,$denominator)
    {
        $this->numerator=$numerator;
        $this->denominator=$denominator;
    }
    public function calAdd($fractionDiff)
    {
        $newNumerator=$this->numerator*$fractionDiff->denominator+$fractionDiff->numerator*$this->denominator;
        $newDenominator=$this->denominator*$fractionDiff->denominator;
        return new Fraction($newNumerator,$newDenominator);
    }
    public function calSubtract($fractionDiff)
    {
        $newNumerator=$this->numerator*$fractionDiff->denominator-$fractionDiff->numerator*$this->denominator;
        $newDenominator=$this->denominator*$fractionDiff->denominator;
        return new Fraction($newNumerator,$newDenominator);
    }
    public function calMultiply($fractionDiff)
    {
        $newNumerator=$this->numerator*$fractionDiff->numerator;
        $newDenominator=$this->denominator*$fractionDiff->denominator;
        return new Fraction($newNumerator,$newDenominator);
    }
    public function calDivile($fractionDiff)
    {
        $newNumerator=$this->numerator*$fractionDiff->denominator;
        $newDenominator=$this->denominator*$fractionDiff->numerator;
        return new Fraction($newNumerator,$newDenominator);
    }
    public function show()
    {
        echo $this->numerator . "/" . $this->denominator;
    }
}
$fraction=new Fraction(2,4);
$fraction2=new Fraction(2,5);

$add=$fraction->calAdd($fraction2);
echo "Add: ";
$add->show();

$add=$fraction->calSubtract($fraction2);
echo "Subtract: ";
$add->show();

$add=$fraction->calMultiply($fraction2);
echo "Multiply: ";
$add->show();

$add=$fraction->calDivile($fraction2);
echo "Divile: ";
$add->show();
?>