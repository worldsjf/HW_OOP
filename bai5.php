<?php
class CollegeStudent {
    protected $list;

    public function __construct() {
        $this->list = [];
    }

    public function add($code, $fullName) {
        $student = [
            'code' => $code,
            'fullName' => $fullName
        ];
        $this->list[] = $student;
    }

    public function show() {
        return $this->list;
    }
}

$collegeStudent = new CollegeStudent();
$collegeStudent->add("MS01", "Trịnh Đăng Tính");
$collegeStudent->add("MS02", "Trịnh Đăng A");

print_r($collegeStudent->show());

?>