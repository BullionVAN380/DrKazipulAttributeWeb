<?php
 include "connect.php";
 if(isset($_POST['login'])){
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];


    $sql="SELECT*FROM atributes WHERE firstname= '$firstname' AND  email='$email'";
    $results=$conn->query($sql);
    if($results->num_rows>0){
        //$msg = 'Login Complete! Thanks';
        echo "<script> window.location.assign('dispplayer.php'); </script>";
    }else{
        echo "Invalid Password";
    } 
 }
 $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-details">
         <h1>Log In Details</h1>

        <form action="" method="POST">
           
                        First Name:<br/>
                        <input type="text" name="firstname"><br/>
                        Email:<br/>
                        <input type="email" name="email"><br/>
                       
                        <input type="submit" name="login" value="login">
                        <a href="login.php">REGISTER</a>
           
        </form>
    </div>


    
</body>
</html>