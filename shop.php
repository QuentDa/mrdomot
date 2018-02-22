<?php
require_once 'tools/_db.php';
$query = $db->query('SELECT * FROM category');
$categories = $query->fetchAll();


?>


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
<?php require_once 'partials/nav.php'?>
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
        <?php foreach ($categories as $key => $category): ?>
        <div class="col-md-4 cardshead d-flex flex-column align-items-center justify-content-center">
                <h3><a href="product_list.php?category_id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a></h3>
            <h5><a href="product_list.php?category_id=<?php echo $category['id']; ?>"><?php echo $category['description']; ?></a></h5>
            <img src="images/<?php echo $category['id']; ?>.png" alt="" width="35%"><br>
            <a href="index.html"><button type="button" class="btn btn-outline-secondary"  style="color:">Lire la suite</button></a>
        </div>
        <?php endforeach; ?>

    </div>
</div>
<footer class=" d-flex flex-column justify-content-center align-items-center bg-dark" style="color: white">
    <div class="mt-2 mb-2 small font-weight-light d-flex">
        <p>© 2018. DOMOT GROUP S.A. All rights reserved.</p>
        <a class="ml-1 navlink" href="">Mentions légales</a>
        <a class="ml-1 navlink" href="">Contact</a>
    </div>
        <img class="mb-3" src="images/test.svg" alt="" width="10%">
</footer>
</body>
</html>
