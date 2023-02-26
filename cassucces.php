<?php
if(isset($_GET['time']))
{

    session_start();
    $id=$_SESSION['id'];
    require 'models/connection.php';
    $conne=new connection();
    $con=$conne->connection();
    $time=$_GET['time'];
    $date=$_GET['date'];
    $sql="INSERT INTO `reservation`(`id`, `date_reserve`, `user_id`, `terrain_id`, `heure_debut`) VALUES (null,'$date','$id',1,'$time')";
    $resultat=$con->exec($sql);
   if($resultat)
   {
       header("location:reserver.php");
   }
   else
   {
       print_r($con->errorinfo());
   }
}