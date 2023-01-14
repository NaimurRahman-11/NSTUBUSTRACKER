<?php
session_start();
if(!isset($_SESSION['loggedIn'])){
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
    <a href="#"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logout.php"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div>



              <!-- Bootstrap dynamic toggolable pills starts from here -->

              <br>
              <div class="mb-3">
                <div class="toggolable">
                  <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link active" href="#busSchedule">Bus Schedule</a></li>
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link" href="#notice">Notice</a></li>
                    <li class="nav-item"><a data-bs-toggle="pill" class="nav-link" href="#addSchedule">Add Schedule</a></li>
                  </ul><br>

                  <div class="tab-content center">
                    <div id="busSchedule" class="tab-pane active">
                      <!-- Stationary Table will be added here -->
                      
                    <!-- Bootstrap Cards Starts From Here -->
                            <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Campus - Maijdee</h5><br>
                                <i class="fa-solid fa-bus-simple fa-5x center"></i><br><br>
                                <a href="SourceToDestination.php?tableName=campustomaijdee" class="btn btn-primary">See Schedule</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Maijdee - Campus</h5><br>
                                <i class="fa-solid fa-bus-simple fa-5x center"></i><br><br>
                                
                                <a href="SourceToDestination.php?tableName=maijdeetocampus" class="btn btn-primary">See Schedule</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Campus - Chowrasta</h5><br>
                                <i class="fa-solid fa-bus-simple fa-5x center"></i><br><br>
                                
                                <a href="SourceToDestination.php?tableName=campustochowrasta" class="btn btn-primary">See Schedule</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Chowrasta - Campus</h5><br>
                                <i class="fa-solid fa-bus-simple fa-5x center"></i><br><br>
                               
                                <a href="SourceToDestination.php?tableName=chowrastatocampus" class="btn btn-primary">See Schedule</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-sm-3"><br>
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Campus - Shubarnochar</h5><br>
                                <i class="fa-solid fa-bus-simple fa-5x center"></i><br><br>
                                
                                <a href="SourceToDestination.php?tableName=campustoshubarnochar" class="btn btn-primary">See Schedule</a>
                            </div>
                            </div>
                        </div>


                        <div class="col-sm-3"><br>
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Shubarnochar - Campus</h5><br>
                                <i class="fa-solid fa-bus-simple fa-5x center"></i><br><br>
                                
                                <a href="SourceToDestination.php?tableName=shubarnochartocampus" class="btn btn-primary">See Schedule</a>
                            </div>
                            </div>
                        </div>

                        </div>
                            <!-- Bootstrap Cards Ends Here -->
                      
                    

                    </div>




                    <div id="notice" class="tab-pane fade">
                    
                    <form action="mail.php" method="POST">
            

            <div>
                <label class="form-label" for="title">Notice Title:</label>
                <input class="form-control" type="text" id="BusNumber" name="title" required>
                
            </div>

            <div>
                <label class="form-label" for="description">Description:</label><br>
                <textarea id="" name="description" rows="4" cols="40"></textarea>
                
            </div>

            <div>
            <input type="submit" class="btn btn-success w-30" value="Notify" name="add" id="add">
            </div>

            
        </form>
                      
                    </div>

                    <div id="addSchedule" class="tab-pane fade">
                      <!-- Personal Table will be added here -->

                      
                      
        <form action="addSchedule.php" method="POST">
            

            <div>
                <label class="form-label" for="BusNumber">Bus Number:</label>
                <input class="form-control" type="text" id="BusNumber" name="BusNumber" required>
                
            </div>

            <div>
                <label class="form-label" for="BusName">Bus Name:</label>
                <input class="form-control" type="text" id="BusName" name="BusName" required>
                
            </div>

            <div>
                <label class="form-label" for="Time">Time:</label>
                <input class="form-control" type="text" id="Time" name="Time" required> 
            </div>

            <div>
            <label for="Source">Choose Source Place:</label><br>

                    <select name="Source" id="Source">
                    <option value="None" selected>None</option>
                      <option value="Campus">Campus</option>
                      <option value="Maijdee">Maijdee</option>
                      <option value="Chowrasta">Chowrasta</option>
                      <option value="Shubarnochar">Shubarnochar</option>
                    </select>
            </div>

            <div>
            <label for="Destination">Choose Destinaton Place:</label><br>

                    <select name="D" id="Destination">
                    <option value="None" selected>None</option>
                      <option value="Campus">Campus</option>
                      <option value="Maijdee">Maijdee</option>
                      <option value="Chowrasta">Chowrasta</option>
                      <option value="Shubarnochar">Shubarnochar</option>
                    </select>
            </div>

            <div>
            <input type="submit" class="btn btn-success w-30" value="Add" name="add" id="add">
            </div>

            
        </form>
                      
                    </div>


                    

                  </div>
                </div>
              </div>
              <!-- Bootstrap dynamic toggolable pills ends here -->
    
           
          



   
</body>
</html>  