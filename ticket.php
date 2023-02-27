<?php
session_start();
require 'models/connection.php';
$conne=new connection();
$con=$conne->connection();
$id=$_SESSION['id'];
$name=$_SESSION['fullname'];
if(isset($_GET['hr']) and isset($_GET['sn']) and isset($_GET['dr']) )
{
    $dr=$_GET['dr'];
    $hr=$_GET['hr'];
    $sn=$_GET['sn'];
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
    <!-- bootstrap 5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f6d365;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }
        .position
        {
            float:top;
        }
    </style>
    <script src="file.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
        function  ahmed()
        {
            window.print();
        }
    </script>
</head>
<body>
<div class="container">

    <div class="position">
        <a class="btn " href="reserver.php">
            <img width="20" height="20" src="img/reserve.png"title="Reserver">
        </a>
        <a class="btn " href="home.php">
            <img width="20" height="20" src="img/home.png"title="Home">
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
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-8 mb-3">
                                            <h6>date reservation</h6>
                                            <p class="text-muted"><?php echo $dr ?></p>
                                            <h6>Hour reservation</h6>
                                            <p class="text-muted"> <?php echo $hr?></p>
                                            <h6>Stade name</h6>
                                            <p class="text-muted"> <?php echo $sn?></p>
                                        </div>

                                    </div>
                                    <div class="position">
                                        <img  onclick="print();" class="btn " width="50" height="50" src="img/print.png" alt=""></img>
                                         <div class="position">
                                             <a href="liste.php">
                                                 <img src="img/back.png" alt="">
                                             </a>
                                         </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>
</body>
</html>
