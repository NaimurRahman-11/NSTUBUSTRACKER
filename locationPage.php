<?php
$Source=$_POST['Source'];

$Destination=$_POST['D'];
$busName=$_POST['busName'];

// echo $Source;
// echo $Destination;
// echo $busName;

if($Source=='Campus' && $Destination=='Maijdee'){
    header("Location: http://localhost/NSTUBUSTRACKER/CMLPage.php");
  }

?>