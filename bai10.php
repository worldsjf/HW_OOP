<?php
class HotelBooking {
    public $name;
    public $checkInDate;
    public $numOfNights;
    public $roomRate;

    public function __construct($name, $checkInDate, $numOfNights, $roomRate) 
    {
        $this->name = $name;
        $this->checkInDate = $checkInDate;
        $this->numOfNights = $numOfNights;
        $this->roomRate = $roomRate;
    }

    public function calculateTotalAmount() 
    {
        $totalAmount = $this->numOfNights * $this->roomRate;
        return $totalAmount;
    }
}

$booking = new HotelBooking("Trinh Dang Tinh", "2023-07-10", 3, 100);
$totalAmount = $booking->calculateTotalAmount();

echo "Name: " . $booking->name . "<br>";
echo "Check-in Date: " . $booking->checkInDate . "<br>";
echo "Number of Nights: " . $booking->numOfNights . "<br>";
echo "Room Rate: $" . $booking->roomRate . "<br>";
echo "Total Amount: $" . $totalAmount . "<br>";

?>