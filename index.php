<?php
if(isset($_GET['tst']))
{
    $tst=$_GET['tst'];
    if($tst=="true")
    {
        echo "
      <div class='container'>
    <div class='alert alert-success alert-dismissable'>
    <a class='close' data-dismiss='alert' aria-label='close'>×</a>
    <strong>merci vous avez creé le compte !!!!</strong>
</div>
        
        ";
    }
    if($tst="passoremail")
    {
        echo "
      <div class='container'>
    <div class='alert alert-warning alert-dismissable'>
    <a class='close' data-dismiss='alert' aria-label='close'>×</a>
    <strong>mot de passe or email Incorrecte</strong>
</div>
        
        ";
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- bootstrap 5 CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <!-- bootstrap 5 Js bundle CDN-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    </head>
    <body>

    <div class="d-flex justify-content-center align-items-center"
         style="min-height: 100vh;">
        <form method="POST" action="login.php" class="p-5 rounded shadow"
              style="max-width: 30rem; width: 100%"
              >

            <h1 class="text-center display-4 pb-5">LOGIN</h1>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?=htmlspecialchars($_GET['error']); ?>
                </div>
            <?php } ?>

            <div class="mb-3">
                <label for="exampleInputEmail1"
                       class="form-label">Email address</label>
                <input type="email"
                       class="form-control"
                       name="email"
                       id="exampleInputEmail1"
                       aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1"
                       class="form-label">Password</label>
                <input type="password"
                       class="form-control"
                       name="password"
                       id="exampleInputPassword1">
            </div>
            <button name="submit" type="submit"
                    class="btn btn-primary">
                Login</button>
            <a href="inscription.php">
                <img src="img/add-user.png" width="20" height="20" alt="">
            </a>
        </form>
    </div>
    </body>
    </html>
