<?php
class Score_2D {
    protected $x;
    protected $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function calDistance($diff) {
        $xDiff = $diff->x - $this->x;
        $yDiff = $diff->y - $this->y;
        return sqrt(($xDiff * $xDiff) + ($yDiff * $yDiff));
    }
}

$x = 3;
$y = 4;
$xDiff = 6;
$yDiff = 8;

$point1 = new Score_2D($x, $y);
$point2 = new Score_2D($xDiff, $yDiff);

$distance = $point1->calDistance($point2);
echo "Khoảng cách từ điểm 1 tới điểm 2 là: " . $distance;
?>