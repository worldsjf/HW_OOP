<?php
class Clock {
    protected $hour,$minute, $second;

    public function __construct($hour,$minute, $second){
        $this->hour=$hour;
        $this->minute=$minute;
        $this->second=$second;
    }
    public function show(){
        $showHour=sprintf("%02d",$this->hour);
        $showMinute=sprintf("%02d",$this->minute);
        $showSecond=sprintf("%02d",$this->second);
        echo $showHour .":".$showMinute.":".$showSecond;
    }
    public function plusSecond(){
        $this->second++;
        if($this->second>=60){
            $this->minute++;
            $this->second=0;
            if($this->minute>=60){
                $this->hour++;
                $this->minute=0;
                if($this->hour>=24){
                    $this->hour=0;
                }
            }
        }
    }
}

$clock = new Clock(13, 59, 0);
echo "Now: ";
echo $clock->show();

echo "<br>";
$clock->plusSecond();
echo "Next second: ";
echo $clock->show();
?>