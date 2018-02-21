<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <title>MR.DOMOT - Boutique</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="images/test.svg" alt="" width="240px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="introduce.html">Introduction</a>
            <a class="nav-item nav-link active" href="shop.html">Produits</a>
            <a class="nav-item nav-link" href="contact.html">Contact</a>
            <div class="d-flex justify-content-end" style="width: 700px">
            <a class="nav-item nav-link" href="#"><i class="fas fa-user"></i></a>
            <a class="nav-item nav-link" href="#"><i class="fas fa-shopping-cart"></i> Panier (0)</a>
            </div>
        </div>
    </div>
</nav>
<div id="shopcarousel" class="row no-gutters p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/slide3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div id="cards" class="container-fluid no-gutters p-0">
    <div class="row no-gutters p-0">
        <div class="col-md-4 cardshead d-flex flex-column align-items-center justify-content-center">
            <h3>Ambiance & Éclairage Connectés</h3>
            <h5>Ampoules, lampes, kits...</h5>
            <img src="images/cards1.png" alt="" width="35%"><br>
            <a href="index.html"><button type="button" class="btn btn-outline-secondary"  style="color:">Lire la suite</button></a>
        </div>
        <div class="col-md-4 cardshead d-flex flex-column align-items-center justify-content-center">
            <h3>Sécurité et Alarmes Connectées</h3>
            <h5>Caméra, capteurs de mouvements, alarmes...</h5>
            <img src="images/cards2.png" alt="" width="35%"><br>
            <a href="index.html"><button type="button" class="btn btn-outline-secondary"  style="color:">Lire la suite</button></a>
        </div>
        <div class="col-md-4 cardshead d-flex flex-column align-items-center justify-content-center">
            <h3>Box</h3>
            <h5>Relier tout vos appareils entre eux</h5>
            <img src="images/box.png" alt="" width="50%"><br>
            <a href="index.html"><button type="button" class="btn btn-outline-secondary"  style="color:">Lire la suite</button></a>
        </div>
    </div>
</div>
</body>
</html>
