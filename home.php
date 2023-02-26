<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <!-- bootstrap 5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <script src="file.js"></script>
</head>
<body>
<div class="container">
    <div class="position">

        <a class="btn " href="home.php">
            <img width="20" height="20" src="img/home.png"title="Home">
        </a>
        <a class="btn " href="reserver.php">
            <img width="20" height="20" src="img/reserve.png"title="Reserver">
        </a>
        <a href="liste.php">
            <img width="20" height="20" src="img/liste.png" title="Lister">
        </a>
        <a class="btn " href="profille.php">
            <img width="20" height="20" src="img/user.png" title="Mon Profille">
        </a>
        <a class="btn " href="deconnection.php">
            <img width="20" height="20" src="img/logout.png"title="Déconnecter">
        </a>
    </div>
    <p>L'heure actuelle est: <span id="heure"></span></p>
    <p>
        Le football (/futbol/), ou dans le langage courant simplement foot, par apocope, ou encore soccer (/sɔkœʁ/) en français d'Amérique du Nord, est un sport collectif qui se joue avec un ballon sphérique entre deux équipes de onze joueurs. Elles s'opposent sur un terrain rectangulaire équipé d'un but à chaque extrémité. L'objectif de chaque camp est de mettre le ballon dans le but adverse plus de fois que l'autre équipe, sans que les joueurs utilisent leurs bras à l'exception des gardiens de buts.

        Nommé à l'origine football association et codifié au Royaume-Uni à la fin du xixe siècle, le football s'est doté en 1904 d'une fédération internationale, la FIFA. Pratiqué en 2006 par environ 264 millions de joueurs à travers le monde, le football est le sport le plus populaire dans la majorité des pays. Certains continents, comme l'Afrique, l'Amérique du Sud et l'Europe, sont même presque entièrement dominés par cette discipline.

        Le calendrier est gouverné par deux types d'épreuves : celles concernant les clubs et celles des équipes nationales. La Coupe du monde est l'épreuve internationale la plus prestigieuse. Elle a lieu tous les quatre ans depuis 1930 (sauf entre 1938 et 1950). Pour les clubs, championnats nationaux et autres coupes sont au programme des compétitions.

        En compétition de clubs, la Ligue des champions de l'UEFA, disputée en Europe mais qui possède des équivalents sur les autres continents, est le trophée le plus convoité de ce sport, malgré la mise en place récente d'une Coupe du monde des clubs, encore à la recherche de prestige.
    </p>
    <!-- Carousel wrapper -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        <!-- Slides -->
   <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="album/stade1.jpg" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="album/stade2.jpeg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img src="album/Stade-Tanger.jpg" class="d-block  w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Anoubl and Ziyani
        </div>
        <!-- Copyright -->
    </footer>
</div>
</body>
</html>