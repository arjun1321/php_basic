
<?php 

if(isset($_POST['submit'])){
//    echo "yes it works";
    
    $name = ["Edwin", "Student", "peter", "samid", "mohad", "maria", "Jane", "Tom"];
    
    $minimum = 5;
    $maximum = 10;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(strlen($username) < $minimum){
        echo "Username has to be longer than 5";
    }
    
    if(strlen($username) > $maximum){
        echo "Username cannot be longer than 10";
    }
    
    if(!in_array($username, $name)){
        echo "Sorry you are not allowed";
    } else {
        echo "Welcome";
    }
    
    
    
    
//    echo "Hello ". $username;
//    echo "Your Password is ". $password;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
  <form action="forms.php" method="post">
     
     <input type="text" name="username" placeholder="Enter Username">
     <br>
     <input type="password" name="password" placeholder="Enter Password">
     <br>
     <input type="submit" name="submit">
     
  </form>
    
</body>
</html>