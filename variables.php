<?php 
    define( "TITLE", "PHP Variables & Constants" );
?>



<!Doctype html>
<html>
    
    <head>
        <title><?php echo TITLE; ?></title>
    </head>
    
    <body>
        
        <?php 
            
            // Boolean: A boolean variable specifies a value of true or false
            $loogedIn = true;
            
            // Integer: An integer variable is any whole number
            $myAge = 26;
        
            // Floating point: Usually a fractional number, with a decimal
            $totalPrice = 146.28;
        
            // String: Simple text that must be enclosed within double quotations " " or single quotations ''
            $fullName = "Arjun Kumar";
        
            
            // Display variables on screen
            echo "Hello, my name is $fullName and I am $myAge years old!";
        
            
        
            
            
        ?>
        
    </body>
    
</html>