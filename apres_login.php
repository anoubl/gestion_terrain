<?php
session_start();
require 'models/connection.php';
$conne=new connection();
$con=$conne->connection();
echo  $_SESSION['id'];
$time=[
    "07:00",
    "08:00",
    "09:00",
    "10:00",
    "11:00",
    "12:00",
    "13:00",
    "14:00",
    "15:00",
    "16:00",
    "17:00",
    "18:00",
    "19:00",
    "20:00",
    "21:00",
    "22:00"];
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
</head>
<body>

<table  class="table table-striped">
<thead>
<th>Time</th>
<th>Etat</th>
</thead>
    <tbody> <?php
    for($i=0;$i<15;$i++)
    {
    ?>
    <tr >

            <td><?php echo $time[$i]."-".$time[$i+1];?></td>
    <td>
        <?php
        $sql="SELECT * FROM `reservation` WHERE heure_debut like concat('%','$time[$i]','%');";
        $resultat=$con->query($sql);
        $result=$resultat->rowcount();
        if($result==0)
        {
            ?>
            <td ><a class="btn btn-success" href="cassucces.php?time=<?php echo $time[$i];?>">Disponible</a></td>
        <?php
        }
        else
        {
        ?>
      <td class="table-danger">occuper</td>
            <?php
        }
        ?>

    </td>
    </tr>
            <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>
