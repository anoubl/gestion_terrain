<?php

class connection
{
private $servername = "localhost";
private $username = "root";
private $password = "";
private $dbname = "gestion_terrain";
public function  connection()
{
    return new pdo("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
}

}