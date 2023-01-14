<?php
include('DatabaseConnection.php');




$sql="SELECT * from subscribers";

$res=mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0){


    while($x=mysqli_fetch_assoc($res)){
        $receiver = $x['email'];
        // $subject = "Email Test via PHP using Localhost";
         $subject = $_POST['title'];
         
          $body = $_POST['description'];
        // $body = "Hi, there...This is a test email send from Localhost.";
        $sender = "From:nirzon.naim@gmail.com";


    
    }
    if(mail($receiver, $subject, $body, $sender)){
        echo '<script>alert("Notified Successfully!");
        location="adminpage.php";
         </script>';
    }else{
        echo "Sorry, failed while sending mail!";
    }
    
}

else{
    echo "No data!";
}

// if(mail($receiver, $subject, $body, $sender)){
//     echo "Email sent successfully to $receiver";
// }else{
//     echo "Sorry, failed while sending mail!";
// }
?>