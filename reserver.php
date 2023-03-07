<?php
session_start();


require 'models/connection.php';
$conne=new connection();
$con=$conne->connection();
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
    <!--  link alert -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- bootstrap 5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="file.js"></script>
    <link rel="stylesheet" href="style.css">
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



<form  action="#" method="POST">
    <select name="option" class="form-select" aria-label="Default select example">
        <?php
        $sql="SELECT * FROM `terrain`";
        $resultat=$con->query($sql);
        $row=$resultat->fetchall();
        foreach($row as $row)
        {
            ?>
            <option value="<?php  echo $row['id'] ?>"><?php   echo $row['name']; ?></option>
<?php
 }
        ?>
    </select>
    <br>
    <div class="col-md-12 position-relative">
        <input type="date" name="date" class="form-control" id="validationTooltip01"  required>
    </div>
    <br>
    <button  onclick="anoubl();" id="submit" class="btn btn-primary"   type="submit" name="submit">Afficher</button>
</form>


<?php
if(isset($_POST['submit']) and isset($_POST['date']) and isset ($_POST['option']))
{
    $id=$_POST['option'];
    $date=$_POST['date'];
?>
      <div id="id1" style="visibility:">
        <div   class="position">
            <a  class="btn" onclick="reda();"  href="#">
                <img src="img/close%20(1).png" class="position" width="50" height="50" alt="">
            </a>
        </div>
    <table    class="table align-middle mb-0 bg-white">
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
                    $sql="SELECT * FROM `reservation` WHERE 	terrain_id='$id' and date_reserve='$date'  and  heure_debut like concat('%','$time[$i]','%');";
                    $resultat=$con->query($sql);
                    $result=$resultat->rowcount();
                    if($result==0)
                    {
                    ?>
                <td ><a class="btn btn-success" href="cassucces.php?time=<?php echo $time[$i];?>&date=<?php echo $date;?>">Disponible</a></td>
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
        }
        ?>
        </tbody>
    </table>





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
<script>

</script>