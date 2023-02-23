<?php
require("connexion.php");
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
     $sql="select * from users where email='$email' and password='$pass'";
     $resultat=$con->query($sql);
     if($resultat->rowcount()>0)
     {
        $row=$resultat->fetchall();
        foreach($row as $row)
        {
            echo "welcome ".$row['prenom']." ".$row['nom'];
            //reda
        }
     }
     else
     {
        rederiger("index.php?tst=passoremail");
     }
}
?>