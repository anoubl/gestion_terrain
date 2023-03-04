<?php
require "models\connection.php";
$conn=new connection();
$con=$conn->connection();
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="DELETE FROM `terrain` WHERE id='$id'";
    $resultat=$con->exec($sql);
if($resultat)
{
    header("location:afficherlesterrains.php");
}
}
?>