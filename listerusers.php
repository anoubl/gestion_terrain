
<?php
require "models\users.php";
$user=new users();
$row=$user->show();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- bootstrap 5 CDN-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!-- bootstrap 5 Js bundle CDN-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
    <div class="container py-5 h-100">
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
    <table class="table">
    <thead>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <th>Email</th>
        <th>Etat</th>
        <th>Action</th>
     </thead>
     <?php foreach($row as $row)
     {

     ?>
     
     <tbody>
      <tr>

      <td><?php echo $row['prenom'] ; ?></td>
      <td><?php echo $row['nom'] ;  ?></td>
      <td><?php echo $row['dob'] ;  ?></td>
      <td><?php echo $row['email'] ;  ?></td>
      <?php if($row['role']==1)
      {
        echo " <td>Administrateur</td>";
      } 
      else
      {
        echo " <td>Client</td>";
      }
      ?>
       <td> 
        <a href="supprimer2.php?id=<?php  echo $row['id']; ?>">
        <img src="img/delete.png" alt="">
    </a></td> 
   
      </tr>
     <?php
     }
     ?>
     </tbody>
    </table>
    </div>
    <?php

require "footer.php";
?>
</body>
</html>
