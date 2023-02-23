<?php
if(isset($_GET['tst']))
{
    $tst=$_GET['tst'];
    if($tst=="true")
    {
        echo "<script>alert('merci vous avez creé le compte !!!! ');</script>";
    }
    if($tst="passoremail")
    {
        echo "<script>alert('mot de passe or email incorecte');</script>";
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>

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
            <a href="inscription.php">sign up</a>
        </form>
    </div>
    </body>
    </html>
