<?php 
    define("TITLE", "PHP Loops");
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo TTILE; ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="container">
        <h1><?php echo TITLE; ?></h1>
        
        <?php 
            
            // WHILE LOOP
            $startingNum = 50;
        
            while ( $startingNum <= 100 ) {

                // execute code
                echo "$startingNum &nbsp;";
                
                $startingNum++;
            }
        
            
            // FOR LOOP
            for ( $a = 30; $a <= 40; $a++ ) {

                echo "Number $a <br>";
            }
        
            // FOREACH LOOP
        
            $friends = array( "Jim", "Sandra", "Kyle", "Cassandra" );
        
            for ( $friends as $friend ) {
                // output each individual value in tha array
                echo "$friend is my friend! <br>";
            }
        
        
            // DO WHILE LOOP 
        
            $foo = 10;
            do {
                echo "Numero $foo <br>";
                $foo++;
            } while( $foo <= 50 );
        
        ?>        
    </div>
    
    
    
    
    
    
    
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>