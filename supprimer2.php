<?php
require "models\users.php";
$user=new users();
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $resultat=$user->delete($id);
    if($resultat==1)
    {
        $user->rederiger('listerusers.php');
    }
}