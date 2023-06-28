<?php
class CarShowroom{
    public $car_N1;
    public function get_carN1(){
        return $this -> car_N1;
    }
    public function set_carN1($car_N1){
        $this -> car_N1 = $car_N1;
    }
}
$car_N1 = $_POST['Hundai'];

$CarShowroom = new CarShowroom();
$CarShowroom -> set_carN1($car_N1);