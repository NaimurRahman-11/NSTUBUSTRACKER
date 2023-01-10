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
      echo '<script>alert("failed to add schedule!");
      // location="ManageFiles.php";
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
      // location="ManageFiles.php";
      </script>';
    }
}

else {
  echo '<script>alert("failed to add schedule!");
  // location="ManageFiles.php";
  </script>';
}


// $sql= "insert into campustomaijdee (`BusNumber`,`BusName`,`Time`)
// values('$BusNumber','$BusName','$Time')";

// if(mysqli_query($conn, $sql)){
       
//     echo '<script>alert("Schedule is added successfully!");
//      location="adminpage.php";
//       </script>';
      
//   }
//   else {
//     echo '<script>alert("failed to add schedule!");
//     // location="ManageFiles.php";
//     </script>';
//   }

?>