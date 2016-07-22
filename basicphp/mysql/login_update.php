<?php include "functions.php";?>
<?php include "db.php";?>

<?php 

    if(isset($_POST['submit'])){
        
        update();
        
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
           
        <form action="login_update.php" method="post">
               <label for="username">Username</label>
               <div class="form-group">
                   <input type="text" class="form-control" name="username">
               </div> 
               
               <label for="password">Password</label>
               <div class="form-group">
                   <input type="password" class="form-control" name="password">
               </div>
               
               <div class="form-group">
                  <select name="id" id="">
                      
                    <?php 
                      showAllData();
                      ?>
                  </select>
                  
               </div>
               
               <input type="submit" name="submit" class="btn btn-primary" value="Update">
           </form>
           
       </div>
   </div>
  
    
</body>
</html>