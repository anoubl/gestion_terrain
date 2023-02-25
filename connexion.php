<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_terrain";

// Create connection
$con = new pdo("mysql:host=$servername;dbname=$dbname",$username,$password);
function rederiger($name)
{
    header("location:$name");
}
?>