<?php
session_start();
$id=$_SESSION['id'];
require( "models\users.php");
$user=new users();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- bootstrap 5 CDN-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!-- bootstrap 5 Js bundle CDN-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<style>
    
    form {
            
        }
      body{
        display: flex;
            flex-direction: column;
            align-items: center;
        margin: 120px;
          }

</style>
</head>
<body>
    <div class="container">
        <div class="position">
        <form method="post" enctype="multipart/form-data"  class="p-5 rounded shadow"
              style="max-width: 30rem; width: 100%">
         Last Name : <input type="date" name="dob" id="">
              <br>
        <br>
        <input type="submit" name="submit" value="Editer">
     </form>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $dob=$_POST['dob'];
    $user->set_date($dob,$id);
    $user->rederiger('profille.php');
}
?>