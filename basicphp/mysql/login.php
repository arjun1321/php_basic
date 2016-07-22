<?php 

if(isset($_POST['submit'])){
    
//    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    
    if($connection){
        echo  "we are connected";
    } else {
        die("Database connection failed");
    }
    
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
//    echo $username."<br>";
//    echo $password;
    
//    if($username && $password){
//        echo $username;
//        echo $password;
//    } else {
//        echo "this field cannot be blank";
//    }
    
    
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22p";
    $hashF_and_salt = $hashFormat . $salt;
    
    $password = crypt($password, $hashF_and_salt);
    
    
    $query = "INSERT INTO users(username, password) ";
    $query .="VALUES('$username', '$password')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die('Query FAILED '. mysqli_error());
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body> 
   <div class="container">
       
       
       <div class="col-xs-6">
           
           <form action="login.php" method="post">
               <label for="username">Username</label>
               <div class="form-group">
                   <input type="text" class="form-control" name="username">
               </div> 
               
               <label for="password">Password</label>
               <div class="form-group">
                   <input type="password" class="form-control" name="password">
               </div>
               
               <input type="submit" name="submit" class="btn btn-primary" value="submit">
               
           </form>
       </div>
   </div>
  
    
</body>
</html>