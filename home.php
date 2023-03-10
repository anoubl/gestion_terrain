<?php
session_start();
$id=$_SESSION['id'];
$name=$_SESSION['fullname'];
require "models\users.php";
$users=new users();
$nombre=$users->reservation($id);
if($_SESSION['valeur']==true)
{
    echo "
      <div class='container'>
    <div class='alert alert-success alert-dismissable'>
    <a class='close' data-dismiss='alert' aria-label='close'>×</a>
    <strong>bonjour $name</strong>
</div>
        
        ";
    $_SESSION['valeur']=false;
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <!--  link alert -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- bootstrap 5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
    <script>
        function afficherHeure() {
            var maintenant = new Date();
            var heure = maintenant.getHours();
            var minute = maintenant.getMinutes();
            var seconde = maintenant.getSeconds();
            heure = ajouterZeros(heure);
            minute = ajouterZeros(minute);
            seconde = ajouterZeros(seconde);
            document.getElementById('heure').innerHTML = heure + ":" + minute + ":" + seconde;
        }
        function ajouterZeros(i) {
            if (i < 10) {i = "0" + i};
            return i;
        }
        setInterval(afficherHeure, 1000);
    </script>
    <link rel="stylesheet" href="style.css">
    <script src="file.js"></script>
</head>
<body>
<div class="container">
    <div class="position">
        <a class="btn " href="home.php">
            <img width="20" height="20" src="img/home.png"title="Home">
        </a>
        <a class="btn " href="reserver.php">
            <img width="20" height="20" src="img/reserve.png"title="Reserver">
        </a>
        <a href="liste.php">
            <img width="20" height="20" src="img/liste.png" title="Lister">
        </a>
        <a class="btn " href="profille.php">
            <img width="20" height="20" src="img/user.png" title="Mon Profille">
        </a>
        <a class="btn " href="deconnection.php">
            <img width="20" height="20" src="img/logout.png"title="Déconnecter">
        </a>
    </div>
   
<div class="card" id="left" style="width: 18rem;">
  <img class="card-img-top" style="width: 20px; height:20px;" src="img/reservation-icon.png" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title"><?php echo $nombre;
 ?>
  
</h5>
  <p>Number  of reservation </p>
  </div>
</div>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Anoubl and Ziyani
        </div>
        <!-- Copyright -->
    </footer>
</div>
</body>
</html>