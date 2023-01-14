<?php
session_start();
if(!$_SESSION['loggedIn']){
  header('location:admin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin's Dashboard</title>

    <script src="https://kit.fontawesome.com/9778dd3679.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="adminpage.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
  
  <div class="header">
    <h1>Admin's Dashboard</h1> 
    <a href="adminpage.php"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="admin.php"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div>


<style>
   table {
    border-collapse: collapse;
    margin-left: 1%;
    text-align: center;
    border-radius: 12px 12px 0 0;
    width: 98%;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
  }

  tr{
    transition: all .2s ease-in;
    cursor: pointer;
  }

  tr:hover{
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    transform: scale(1.02);
  }

  th{
    background: #33d9b2;
  }

  td{
    width: 20px;
    text-align: center;
    padding: 2%;
  }

  tr:nth-child(even) {background-color: #f2f2f2;}

  .update-button{
    background-color: #7bed9f;
    padding: 4%;
    color: black;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    border: none;
}

.update-button:hover{
    background-color: #2ed573;
    color: black;
}

.delete-button{
    background-color: #ff7675;
    padding: 4%;
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
}

.delete-button:hover{
    background-color: #d63031;
    color: white;
}
</style>

<?php
     include('DatabaseConnection.php');
    
    $sql= "select * from ".$_GET['tableName'];

    $fetchfile= mysqli_query($conn,$sql);

    $sn=1;
    
    
    
    if(mysqli_num_rows($fetchfile) > 0)
    {
  ?>
  <table>
    <tr>
    <th>SN.</th>
      <th>Bus Number</th>
      <th>Bus Name</th>
      <th>Time</th>
      <th>Action</th>
    </tr>
  <?php
      while($row= mysqli_fetch_assoc($fetchfile))
      {      
        $id=$row['id'];
        $Bus_No=$row['BusNumber'];
        $Bus_Name=$row['BusName'];
        $Time=$row['Time'];
              
  ?>
                <tr>
                  <form action="UpdateSchedule.php" method="POST">
                  <input type="hidden" value="<?php echo $_GET['tableName']; ?>" name="tableName">
                    <td><?php echo $sn++; ?></td>
                    <td>
                      <input class="form-control" type="text" value="<?php echo $Bus_No; ?>" name="BusNumber" required>
                    </td>
                    <td>
                      <input class="form-control" type="text" value="<?php echo $Bus_Name; ?>" name="BusName" required>
                    </td>
                    <td>
                      <input class="form-control" type="text" value="<?php echo $Time; ?>" name="Time" required>
                    </td>
                    <td>
                      <a href="DeleteSchedule.php?id=<?php echo $id; ?>&tableName=<?php echo $_GET['tableName']; ?>" class="delete-button" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-trash"></i></a>

                      <button class="update-button" name="id" type="submit" value="<?php echo $row['id']?>"> <i class="fa-solid fa-pen-to-square"></i></button>
                    </td>
                  </form>
                </tr>
      
  <?php   
      }
    }
    else
    {
      echo '<script>alert("No Schedules Available!");
      location="adminpage.php";
      </script>';
    }
   
  ?>
    
      
    </table>

    <!-- Button trigger modal -->

    <form action="UpdateSchedule.php" method="post">
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- <div class="mb-3">
                <label for="YourID" class="col-form-label">File ID:</label>
                <input type="text" class="form-control" id="FileName" name="fileID">
              </div> -->
              <input type="hidden" name="id" id="id">
            
            
              <div class="mb-3">
                <label for="YourID" class="col-form-label">Enter Bus Number:</label>
                <input type="text" class="form-control" id="FileLocation" name="BusNumber" required>
              </div>

              <div class="mb-3">
                <label for="YourID" class="col-form-label">Enter Bus Name:</label>
                <input type="text" class="form-control" id="FileLocation" name="BusName" required>
              </div>

              <div class="mb-3">
                <label for="YourID" class="col-form-label">Enter Time:</label>
                <input type="text" class="form-control" id="FileLocation" name="Time" required>
              </div>
  
  
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" value="<?php echo $_GET['tableName']?>" name="updateBus">Update</button>
          </div>
        </div>
      </div>
    </div>
    
   </form>


    
</body>
</html>
