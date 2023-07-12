<?php
class HotelBooking {
    public $name;
    public $checkInDate;
    public $numNights;
    public $roomRate;

    public function __construct($name, $checkInDate, $numNights, $roomRate) 
    {
        $this->name = $name;
        $this->checkInDate = $checkInDate;
        $this->numNights = $numNights;
        $this->roomRate = $roomRate;
    }

    public function calTotalAmount() 
    {
        $totalAmount = $this->numNights * $this->roomRate;
        return $totalAmount;
    }
}

$booking = new HotelBooking("Trinh Dang Tinh", "2023-07-10", 3, 100);
$totalAmount = $booking->calTotalAmount();

echo "Name: " . $booking->name . "<br>";
echo "Check-in Date: " . $booking->checkInDate . "<br>";
echo "Number of Nights: " . $booking->numNights . "<br>";
echo "Room Rate: $" . $booking->roomRate . "<br>";
echo "Total Amount: $" . $totalAmount . "<br>";

?>