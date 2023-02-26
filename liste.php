<?php
session_start();
require 'models/connection.php';
$conne=new connection();
$con=$conne->connection();
$id=$_SESSION['id'];

?>
<!doctype html>
<html lang="en">
<head>
    <!-- bootstrap 5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .position
        {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-primary">La liste des reservation</h1>
    <table class="table align-middle mb-0 bg-white">
        <thead>
        <th>Full Name</th>
        <th>Stade Name</th>
        <th>date reservation</th>
        <th>Hour reservation</th>
        <th>Print</th>
        </thead>
        <tbody>
        <?php
        $sql="SELECT reservation.id,reservation.heure_debut,reservation.date_reserve,terrain.name FROM `reservation`,terrain WHERE reservation.terrain_id=terrain.id and reservation.user_id='$id';";
        $resultat=$con->query($sql);
        $row=$resultat->fetchall();
        foreach ($row as $row)
        {
        ?>
        <tr>
         <td><?php echo $_SESSION['fullname']?></td>
            <td><?php echo $row['name'];     ?></td>
            <td><?php echo $row['date_reserve'];     ?></td>
            <td>
                <?php echo $row['heure_debut'];     ?>
            </td>
            <td>
                <a href="ticket.php?sn=<?php echo $row['name'];?>&hr=<?php echo$row['heure_debut'];?>&dr=<?php echo$row['date_reserve'];?>" ><img width="20" height="20" src="img/print.png" alt=""  ></a>
            </td>

        </tr>
        <?php }?>
        </tbody>
    </table>
    <div class="position">
        <a href="apres_login.php">
            <img width="50" height="50" src="img/back.png" alt="">
        </a>
    </div>
</div>
</body>
</html>
