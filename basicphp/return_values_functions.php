<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php 
    
    function addNumber($number1, $number2){

    $sum = $number1 + $number2;
        return $sum;
    }
    
    $result = addNumber(500,200);
    echo $result . "<br>";
    
    $result = addNumber(500,$result);
    echo $result . "<br>";
    
    $result = addNumber(500,$result );
    echo $result;
    
    ?>
  
    
</body>
</html>