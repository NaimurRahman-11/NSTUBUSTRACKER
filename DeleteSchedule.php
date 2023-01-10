<?php

include('DatabaseConnection.php');


$id = $_GET['id'];

$sql = "DELETE FROM ".$_GET['tableName']." WHERE `id`=$id";


if(mysqli_query($conn, $sql)){
       
  echo '<script>alert("Schedule deleted!");
   location="adminpage.php";
    </script>';
    
}
else {
  echo '<script>alert("failed to delete schedule!");
  // location="ManageFiles.php";
  </script>';
}

?>