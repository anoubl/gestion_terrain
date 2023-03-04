
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <!-- bootstrap 5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    <br>
    <br>
<form class="row g-3 needs-validation" novalidate action="#" method="post">
  <div class="col-md-4">
  <label for="ville">ville</label>
  <div class="w-100"></div>
  <input type="text" id="ville" name="ville"><br>
  </div>

  <div class="w-100"></div>

  <div class="col-md-4">
  <label for="datec">date de création</label>
  <div class="w-100"></div>
  <input type="date" id="datec" name="datec"><br>
  </div>

  <div class="w-100"></div>

  <div class="col-md-4">
  <label for="width">largeur </label>
  <div class="w-100"></div>
  <input type="number" id="width" name="width">
  </div>

  <div class="w-100"></div>

  <div class="col-md-4">
  <label for="height">hauteur</label>
  <div class="w-100"></div>
  <input type="number" id="height" name="height">
  </div>

  <div class="w-100"></div>

  <div class="col-md-4">
  <label for="description">description</label>
  <div class="w-100"></div>
  <input type="text" id="description" name="description"><br>
  </div>

  <div class="w-100"></div>

  <div class="col-md-4">
  <label for="adresse ">adresse</label>
  <div class="w-100"></div>
  <input type="text" id="adresse" name="adresse"><br>
  </div>
  
  <div class="w-100"></div>

  <div class="col-md-4">
  <label for="name">nom de terrain</label>
  <div class="w-100"></div>
  <input type="name" id="name" name="name">
  </div>

  <div class="w-100"></div>

  <div class="col-md-4">
  <label for="prix">prix</label>
  <div class="w-100"></div>
  <input type="number" id="prix" name="prix"><br>
  <div class="w-100"></div>
  <input class="btn" type="submit" value="Ajouter" name="submit">
  </div>
  
</form>
</div>
</html>
</body>
<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_terrain";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Prepare the SQL query
if(isset($_POST['submit']))
        {
    $ville=$_POST['ville'];
    $datec=$_POST['datec'];
    $width=$_POST['width'];
    $height=$_POST['height'];
    if(isset($_POST["description"])){
$description = $_POST["description"];
}
    $name=$_POST['name'];
    $adresse=$_POST['adresse'];
    $prix=$_POST['prix'];
    echo $ville;

$sql = "INSERT INTO `terrain`( `ville`, `date_creation`, `width`, `height`, `description`, `name`, `adresse`, `prix`) VALUES ('$ville', '$datec',  '$width' , '$height', '$description','$name','$adresse','$prix');";
//$sql= " INSERT INTO terrain (ville,date_creation,width,height, description, name,adresse,prix)
//VALUES ('rabat', '2023-02-26', 10, 20, 'Un terrain spacieux avec une vue magnifique sur la montagne', 'tiran 3imarat', 'ds', 100000)";
// Execute the query and store the result set

	// Exécution de la requête
    if ($conn->query($sql) === TRUE) {
        echo "<script> alert ('Terrain ajouté avec succès');</script>";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }


        }
?>