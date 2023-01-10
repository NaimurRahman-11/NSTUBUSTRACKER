<?php
session_start();
include('DatabaseConnection.php');

if($_POST){

	$Username = $_POST['username'];
    $Password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE Username='$Username' AND Password='$Password'";

	$result= mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)==1){
		
		$_SESSION['loggedIn']='true';
		header('location: adminpage.php');

	}

	else{
		echo '<script>alert("Username & Password is Wrong!");
		location="admin.php";
		</script>';
		
	}
}
	

?>