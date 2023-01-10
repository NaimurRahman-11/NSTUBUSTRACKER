
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/9778dd3679.js" crossorigin="anonymous"></script>

	<!-- CSS only -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>


	<!-- Header Section Starts Here -->
	<nav class="navbar sticky-top navbar-expand-lg bg-light mynav">
		<div class="container-fluid">
		  <a class="navbar-brand" href="index.php"><img src="./img/logo.png" style="height: 120px; width: 100px" alt="logo"></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto mb-2 mb-lg-0" id="myId">
			  <li class="nav-item">
				<a class="nav-link" aria-current="page" href="index.php">হোম</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="busSchedule.php">বাস শিডিউল</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">বাস লোকেশন</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">নোটিশ</a>
			  </li>
			</ul>
			
		  </div>
		</div>
	  </nav>

	  <!-- Header Section Ends Here -->

      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

      </body>
</html>
