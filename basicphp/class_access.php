<?php 

class Car{
    
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;
    
  function showProperty(){
      echo $this -> engine."<br>";
  }
    
}


$bmw = new Car();

echo $bmw -> wheels."<br>";
//echo $bmw -> hood;
//echo $bmw -> engine;

$semi = new Semi();

class Semi extends Car{

//    function showProperty(){
//      echo $this -> engine."<br>";
//}
    
}

echo $bmw -> showProperty();





?>