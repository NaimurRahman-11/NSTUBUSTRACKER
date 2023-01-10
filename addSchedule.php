<?php

include('DatabaseConnection.php');

$BusNumber=$_POST['BusNumber'];

$BusName=$_POST['BusName'];

$Time=$_POST['Time'];


$sql= "insert into campustomaijdee (`BusNumber`,`BusName`,`Time`)
values('$BusNumber','$BusName','$Time')";

if(mysqli_query($conn, $sql)){
       
    echo '<script>alert("Schedule is added successfully!");
     location="adminpage.php";
      </script>';
      
  }
  else {
    echo '<script>alert("failed to add schedule!");
    // location="ManageFiles.php";
    </script>';
  }

?>