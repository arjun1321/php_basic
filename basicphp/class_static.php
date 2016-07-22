<?php 

class Car{
    
    static $wheels = 4;
    var $hood = 1;
    
    
    function  moveWheels(){
       echo Car::$wheels = 10;
    }
    
}

$bmw = new Car();

//$bmw -> wheels;

Car::moveWheels();

echo Car::$wheels;




?>


