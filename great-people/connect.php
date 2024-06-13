<?php
   $servername = 'localhost';
   $username   ='root';
   $password   ='';
   $dbname   = 'details';


   $conn = new mysqli($servername,$username,$password ,$dbname );

   if ($conn->connect_error){
    die("connect faild" .$conn->connect_error);
   }
?>