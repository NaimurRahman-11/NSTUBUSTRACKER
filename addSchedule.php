<?php
session_start();
if(!$_SESSION['loggedIn']){
  header('location:admin.php');
}

?>

<?php

include('DatabaseConnection.php');

$BusNumber=$_POST['BusNumber'];

$BusName=$_POST['BusName'];

$Time=$_POST['Time'];

$Source=$_POST['Source'];

$Destination=$_POST['D'];




if($Source=='Campus' && $Destination=='Maijdee'){
  $sql= "insert into campustomaijdee (`BusNumber`,`BusName`,`Time`)
  values('$BusNumber','$BusName','$Time')";
  
  if(mysqli_query($conn, $sql)){
         
      echo '<script>alert("Schedule is added successfully!");
       location="adminpage.php";
        </script>';
        
    }
    else {
      echo '<script>alert("Failed to add schedule!");
      location="adminpage.php";
      </script>';
    }
}

if($Source=='Maijdee' && $Destination=='Campus'){
  $sql= "insert into maijdeetocampus (`BusNumber`,`BusName`,`Time`)
  values('$BusNumber','$BusName','$Time')";
  
  if(mysqli_query($conn, $sql)){
         
      echo '<script>alert("Schedule is added successfully!");
       location="adminpage.php";
        </script>';
        
    }
    else {
      echo '<script>alert("failed to add schedule!");
      location="adminpage.php";
      </script>';
    }
}


if($Source=='Campus' && $Destination=='Chowrasta'){
  $sql= "insert into campustochowrasta (`BusNumber`,`BusName`,`Time`)
  values('$BusNumber','$BusName','$Time')";
  
  if(mysqli_query($conn, $sql)){
         
      echo '<script>alert("Schedule is added successfully!");
       location="adminpage.php";
        </script>';
        
    }
    else {
      echo '<script>alert("failed to add schedule!");
      location="adminpage.php";
      </script>';
    }
}

if($Source=='Chowrasta' && $Destination=='Campus'){
  $sql= "insert into chowrastatocampus (`BusNumber`,`BusName`,`Time`)
  values('$BusNumber','$BusName','$Time')";
  
  if(mysqli_query($conn, $sql)){
         
      echo '<script>alert("Schedule is added successfully!");
       location="adminpage.php";
        </script>';
        
    }
    else {
      echo '<script>alert("failed to add schedule!");
      location="adminpage.php";
      </script>';
    }
}

if($Source=='Campus' && $Destination=='Shubarnochar'){
  $sql= "insert into campustoshubarnochar (`BusNumber`,`BusName`,`Time`)
  values('$BusNumber','$BusName','$Time')";
  
  if(mysqli_query($conn, $sql)){
         
      echo '<script>alert("Schedule is added successfully!");
       location="adminpage.php";
        </script>';
        
    }
    else {
      echo '<script>alert("failed to add schedule!");
      location="adminpage.php";
      </script>';
    }
}

if($Source=='Shubarnochar' && $Destination=='Campus'){
  $sql= "insert into shubarnochartocampus (`BusNumber`,`BusName`,`Time`)
  values('$BusNumber','$BusName','$Time')";
  
  if(mysqli_query($conn, $sql)){
         
      echo '<script>alert("Schedule is added successfully!");
       location="adminpage.php";
        </script>';
        
    }
    else {
      echo '<script>alert("failed to add schedule!");
      location="adminpage.php";
      </script>';
    }
}

else {
  echo '<script>alert("Failed to add schedule!");
  location="adminpage.php";
  </script>';
}



?>