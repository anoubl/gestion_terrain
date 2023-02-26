<?php
require 'models/users.php';
session_start();
$user=new users();
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $resultat=$user->tester($email,$pass);
    if($resultat!=-1)
    {
        $_SESSION['id']=$resultat;
        $user->rederiger('home.php');
        $name=$user->get_name($resultat);
        $_SESSION['fullname']=$name;
        $_SESSION['valeur']=true;
    }
    else
    {
        $user->rederiger('index.php?tst=passoremail');
    }
}
?>