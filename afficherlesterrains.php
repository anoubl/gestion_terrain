<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    
</div>
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
$sql = "SELECT * FROM `terrain`";

// Execute the query and store the result set
$result = $conn->query($sql);

// Check for errors in query execution
if (!$result) {
    echo "Error retrieving records: " . $mysqli->error;
    exit();
}

// Display the result set in a table

?>
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
    <table class="table" >
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">ville</th>
      <th scope="col">adresse</th>
      <th scope="col">prix</th>
      <th scope="col">supprimer</th>
    </tr>
  </thead>
   <tbody>
    <tr>
    <?php while ($row = $result->fetch_assoc()) {

        ?>
      
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['ville']?></td>
      <td><?php echo $row['adresse']?></td>
      <td><?php echo $row['prix']?></td>
      <td><a href="supprimer.php?id=<?php echo $row['id'];?>" > <img width="20" height="20" src="img/delete.png" alt=""  ></a></td>
      
      
    </tr>
   </tbody>
   
    
<?php } ?>
</table>

    </div>
    <?php

require "footer.php";
?>
</body>
</html>