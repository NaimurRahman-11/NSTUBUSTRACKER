<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="loginPage.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

    <div class="login">
        <h1 class="text-center"><span class="auto-type"></span></h1>

        <form class="needs-validation" action="test.php" method="POST">
            <div class="form-group was-validated">
                <label class="form-label" for="userName">Username:</label>
                <input class="form-control" type="username" id="username" name="username" required>
                <div class="invalid-feedback">Please enter your username</div>
            </div>

            <div class="form-group was-validated">
                <label class="form-label" for="password">Password:</label>
                <input class="form-control" type="password" id="password" name="password" required>
                <div class="invalid-feedback">Please enter your password</div>
            </div>



            <a href="#"><input class="btn btn-success w-100" type="submit" name="submit" value="Log In"></a>

            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>  
    <script>
        var typed = new Typed(".auto-type",{
            strings: ["Welcome User!"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true 
        })
    </script>
</body>
</html>

