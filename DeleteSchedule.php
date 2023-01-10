<?php
session_start();
if(!$_SESSION['loggedIn']){
  header('location:admin.php');
}

?>


<?php

include('DatabaseConnection.php');


$id = $_GET['id'];

$sql = "DELETE FROM ".$_GET['tableName']." WHERE `id`=$id";


if(mysqli_query($conn, $sql)){
       
  
 ?>

    
    <script>
     alert("Deleted Successfully!");
     location="SourceToDestination.php?tableName=<?php echo $_GET['tableName'];?>"
    </script>

    
<?php    
}
else {
  echo '<script>alert("failed to delete schedule!");
  // location="ManageFiles.php";
  </script>';
}

?>

