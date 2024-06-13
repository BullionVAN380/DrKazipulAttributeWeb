
<?php
include "connect.php";
if (isset($_POST['submit'])){
    $firstname =$_POST['firstname']; 
    $lastname =$_POST['lastname'];
    $email =$_POST['email'];
    $comment =$_POST['comment'];
    

    $sql = "INSERT INTO `atributes`(`firstname`,`lastname`,`email`,`comment`) 
    VALUES ('$firstname','$lastname','$email','$comment')";

    $results=$conn->query($sql);
    if($results == TRUE){
        echo"New record added";

    }else{
        echo "error" .$sql."<hr>" .$conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greatpeple</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-details">
         <h1>Register Here</h1>

        <form action="" method="POST">
            
                        First Name:<br/>
                        <input type="text" name="firstname"><br/>
                        Second Name:<br/>
                        <input type="text" name="lastname"><br/>
                        Email:<br/>
                        <input type="email" name="email"><br/>
                       Comment:<br/>
                       <textarea name="comment" id=""></textarea>
                        <input type="submit" name="submit" value="submit">
                        <a href="index.php">LOGIN</a>
           
        </form>
    </div>
</body>
</html>