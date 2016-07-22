<?php 

class Car{
    
    function MoveWheels(){
        echo "Wheels move";
    }
    
}

if(method_exists("Car", "MoveWheels")){
    echo "The method exists";
} else {
    echo "no id does not";
}

?>