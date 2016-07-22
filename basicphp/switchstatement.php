<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
  
   <?php 
    
    $number = 115;
    
    switch($number){
        case 15:
            echo "it is equal to fifteen ";
            break;
        case 16:
            echo "it is equal to sixteen";
            break;
        case 17:
            echo "it is equal to seventeen";
            break;
        case 14:
            echo "it is equal to fourteen";
            break;
        default:
            echo "it is not equal to ".$number;
    }
    ?>
    
</body>
</html>