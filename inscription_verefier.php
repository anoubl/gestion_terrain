<?php
require 'models/users.php';
$user=new users();
        if(isset($_POST['submit']))
        {
    $email=$_POST['email'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $password1=$_POST['pass1'];
    $password2=$_POST['pass2'];
    $dob=$_POST['dob'];
            $file="uploads/".$_FILES['image']['name'];
            $name=$_FILES['image']['name'];
            $tmp=$_FILES['image']['tmp_name'];
            move_uploaded_file($tmp,'uploads/'.$name);
    if( strlen($prenom)>2 &&  strlen($nom)>2)
    {
         if($password1==$password2 )
    {

        $resultat= $user->add($prenom,$nom,$dob,$email,$password1,$file);
        if($resultat == 1)
        {
             header("location:index.php?tst=true");
        }
        else
        {
            header("location:inscription.php?tst=sql");
        }
    }
    else
    {
        header("location:inscription.php?tst=pass");
    }
    }
    else
    {
        header("location:inscription.php?tst=name");

    }
        }