<?php
session_start();
if(!$_SESSION['loggedIn']){
  header('location:admin.php');
}

?>


<?php

include('DatabaseConnection.php');


$id = $_POST['id'];
$BusNumber = $_POST['BusNumber'];
$BusName = $_POST['BusName'];
$Time = $_POST['Time'];




 $sql= "UPDATE ".$_POST['tableName']." SET `BusNumber` = '".$BusNumber."', `BusName`= '".$BusName."', `Time`= '".$Time."' WHERE ".$_POST['tableName'].".`id` = ".$id;

 if(mysqli_query($conn, $sql)){
    ?>
   
       
       <script>
        alert("Updated Successfully!");
        location="SourceToDestination.php?tableName=<?php echo $_POST['tableName'];?>"
       </script>
   
       
   <?php    
   }
   else {
     echo '<script>alert("failed to update schedule!");
     // location="ManageFiles.php";
     </script>';
   }


?>

