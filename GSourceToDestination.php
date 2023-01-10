<?php
include('header.php');
?>

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
    
    
    
    if(mysqli_num_rows($fetchfile) > 0)
    {
  ?>
  <table>
    <tr>
      <th>Bus Number</th>
      <th>Bus Name</th>
      <th>Time</th>
      
    </tr>
  <?php
      while($row= mysqli_fetch_assoc($fetchfile))
      {      
        $Bus_No=$row['BusNumber'];
        $Bus_Name=$row['BusName'];
        $Time=$row['Time'];
              
  ?>
                <tr>
                    <td><?php echo $Bus_No; ?></td>
                    <td><?php echo $Bus_Name; ?> </td>
                    <td><?php echo $Time; ?></td>
                    
                </tr>
      
  <?php   
      }
    }
    else
    {
      echo '<script>alert("No file info to show.!");
      </script>';
    }
   
  ?>
    
      
    </table>

    <?php

include('footer.php');

?>