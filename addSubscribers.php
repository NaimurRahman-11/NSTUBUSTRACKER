<?php
include('DatabaseConnection.php');

$email = $_POST['email'];


$sql= "insert into subscribers (`email`)
values('$email')";

if(mysqli_query($conn, $sql)){
       
    echo '<script>alert("Subscription Successful!");
    location="index.php";
     </script>';
  }
  else {
    echo '<script>alert("Subscription Failed!");
    location="index.php";
     </script>';
  }


?>