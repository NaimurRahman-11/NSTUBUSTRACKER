<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver's Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<style>
    * {
    font-family: 'Poppins', sans-serif;
}

    body{
    background-color: black;
    
    }

    .container{
        height:500px;
        width:700px;
        background-color: white;
        border-radius: 5px;
        
        
        justify-content: center;

        margin-top:120px;
        margin-left: 400px;
    }

   
</style>
<body>

<section class="container" align="center">
    

<form action="locationPage.php" method="post">
    <div class="driver">
        <h2>Please Select Route and Bus Name</h2>
    </div><br>

    <div>
    <div class="content">
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
            <label for="busName">Choose Bus Name:</label><br>

                    <select name="busName" id="busName">
                    <option value="None" selected>None</option>
                      <option value="shurjomukhi">Shurjomukhi</option>
                      <option value="champa">Champa</option>
                      <option value="chameli">Chameli</option>
                      <option value="tulip">Tulip</option>
                    </select>
            </div><br> <br>

            <input type="submit" value="Submit">
    </div>
    </form>

</section>
    
</body>
</html>