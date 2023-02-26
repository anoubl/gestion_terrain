<?php
require 'connection.php';

class users extends connection
{
    public  $conn;
    public  function  tester($email,$password)
    {
        $con=$this->connection();
        $sql="select * from users where email='$email' and password='$password'";
        $resultat=$con->query($sql);
        if($resultat->rowcount()>0)
        {
            $row=$resultat->fetchall();
            foreach($row as $row)
            {
                return $row['id'];
            }
        }
        return -1;
    }
    public  function  get_name($id)
    {
        $con=$this->connection();
        $sql="select prenom,nom from users where id='$id'";
        $resultat=$con->query($sql);
        if($resultat->rowcount()>0)
        {
            $row=$resultat->fetchall();
            foreach($row as $row)
            {
                return $row['prenom']." ".$row['nom'];
            }
        }
        return -1;
    }
public function  add($prenom,$nom,$dob,$email,$password,$chemin)
{
    $con=$this->connection();
    $sql="INSERT INTO `users`(`id`, `prenom`, `nom`, `dob`, `email`, `password`,`file`) VALUES(null,'$prenom','$nom','$dob','$email','$password','$chemin') ";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  -1;
}
public  function  show()
{
    $con=$this->connection();
$sql="SELECT * FROM `users`";
$resultat=$con->query($sql);
return $resultat->fetchall();
}
public  function  delete($id)
{
    $con=$this->connection();
    $sql="DELETE from users where id='$id'";
    $result=$con->exec($sql);
    if($result)
    {
        return 1;
    }
    return  -1;

}
public  function  search($id)
{
    $con=$this->connection();
    $sql="select * from users where id='$id'";
    $result=$con->query($sql);
    return $result->fetchall();
}
    public function  rederiger($name)
    {
        header("Location:$name");
    }

}
