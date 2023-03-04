<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type="submit"] {
    margin-top: 10px;
}

input:invalid {
    border-color: red;
}

input:valid {
    border-color: green;
}

input:invalid + span::before {
    content: "❌ ";
}

input:valid + span::before {
    content: "✅ ";
}

input:invalid + span {
    color: red;
}

input:valid + span {
    color: green;
}

</style>
</head>
<body>
    <div class="container">
    <div class="position">
        <a class="btn " href="home2.php">
            <img width="20" height="20" src="img/home.png" title="Home">
        </a>
        <a class="btn " href="creer_administrateur.php">
            <img width="20" height="20" src="img/administrateur.png" title="Ajouter un administrateur">
        </a>
        <a class="btn " href="listerusers.php">
            <img width="20" height="20" src="img/users.png" title="La liste des utilisateurs">
        </a>
        <a class="btn " href="ajouterterain.php">
            <img width="20" height="20" src="img/ajouter.png" title="Ajouter terrain">
        </a>
        <a class="btn " href="afficherlesterrains.php">
            <img width="20" height="20" src="img/liste.png" title="Lister les terrains">
        </a>
        <a class="btn " href="profillea.php">
            <img width="20" height="20" src="img/user.png" title="Mon Profille">
        </a>
        <a class="btn " href="deconnection.php">
            <img width="20" height="20" src="img/logout.png"title="Déconnecter">
        </a>
    </div>
    <form method="POST" enctype="multipart/form-data" action="#" class="row g-3 needs-validation text-center" novalidate>
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
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Votre image</label>
            <input type="file" name="image" class="form-control" id="validationCustom01" required>
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
    </div>
</body>
</html>

<?php
require 'models/users.php';
$user=new users();
        if(isset($_POST['submit']))
        {
    $email=$_POST['email'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $password1=$_POST['pass1'];
    $password2=$_POST['pass2'];
    $dob=$_POST['dob'];
            $file="uploads/".$_FILES['image']['name'];
            $name=$_FILES['image']['name'];
            $tmp=$_FILES['image']['tmp_name'];
            move_uploaded_file($tmp,'uploads/'.$name);



    if( strlen($prenom)>2 &&  strlen($nom)>2)
    {
         if($password1==$password2 )
    {

        $resultat= $user->add1($prenom,$nom,$dob,$email,$password1,$file);
        if($resultat == 1)
        {
            echo "
            <div class='container'>
          <div class='alert alert-success alert-dismissable'>
          <a class='close' data-dismiss='alert' aria-label='close'>×</a>
          <strong>l'administrateur a creé</strong>
      </div>
              
              ";
        }
        else
        {
            echo "
            <div class='container'>
          <div class='alert alert-warning alert-dismissable'>
          <a class='close' data-dismiss='alert' aria-label='close'>×</a>
          <strong>Please try again</strong>
      </div>
              
              ";
        }
    }
    else
    {
        echo "
        <div class='container'>
      <div class='alert alert-warning alert-dismissable'>
      <a class='close' data-dismiss='alert' aria-label='close'>×</a>
      <strong>les mots de passe doivent être identiques</strong>
  </div>";
    }
    }
    else
    {
        echo "
        <div class='container'>
      <div class='alert alert-warning alert-dismissable'>
      <a class='close' data-dismiss='alert' aria-label='close'>×</a>
      <strong>le nom et le prénom doit etre contient au moins trois Caractères</strong>
  </div>
          
          ";
    }
        }