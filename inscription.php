<?php
if(isset($_GET['tst']))
{
    $tst=$_GET['tst'];
    if($tst=="sql")
    {
        echo "<script>alert('Please try again');</script>";   
     }
     if($tst=="pass")
     {
        echo "<script>alert('mot de passe un doit etre identique avec le mot de passe deux');</script>";

     }
     if($tst=="name")
     {
        echo "<script>alert('le nom et le prenom doit etre contient au moins trois caracteres'); </script>";

     }
     $tst=null;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        form
        {
            margin:5px;

        }
        input {
            width: 100px;
        }
        body {
            display: inline-block;
            margin: 0px auto;
            text-align: center;
        }
    </style>
</head>
<body>

<form method="POST" action="inscription_verefier.php" class="row g-3 needs-validation text-center" novalidate>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Prenom</label>
        <input type="text" name="prenom" class="form-control" id="validationCustom01"  required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control" id="validationCustom01" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">email</label>
        <div class="input-group has-validation">
            <input type="email"  name="email"class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">date of Brith</label>
        <div class="input-group has-validation">

            <input type="date"  name="dob"class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Password</label>
        <div class="input-group has-validation">
            <input type="password"  name="pass1"class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
    </div>
    
    <div class="w-100"></div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Confirmation Password</label>
        <div class="input-group has-validation">

            <input type="password"  name="pass2"class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
    </div>
    <br>
    <div class="w-100"></div>
    <br>
    <div class="col-md-4">
    <div class="col-12">
        <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
    </div>
    </div>
</form>
</body>
</html>
