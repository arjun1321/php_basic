<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
  <?php 
    
    function init(){
        
        saysomething();
        echo "<br>";
        calculate();
    }
    
    function saysomething(){
        echo "Hello Student, do you like the class? yes? okay great.";
    }
    
    function calculate(){
        echo 456+695;
    }
    
    init();
    
    ?>
    
</body>
</html>