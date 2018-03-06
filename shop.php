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
            <a href="product_list.php?category_id=<?php echo $category['id']; ?>"><button type="button" class="btn btn-outline-secondary"  style="color:">Voir les produits</button></a>
        </div>
        <?php endforeach; ?>
    </div>
</div>


<div class="container-fluid">
    <div class="row d-flex justify-content-center" id="rates">
        <h1 class="text-center font-weight-light mt-4">Ils nous ont testés</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-3">
                <div id="tb-testimonial" class="testimonial testimonial-default-filled">
                    <div class="testimonial-section">
                        Simple, pratique, esthétique, polyvalent ! Je suis ravie de mon achat, je me sens plus en sécurité, je ne suis pas mécontente d'avoir franchis le pas !
                    </div>
                    <div class="testimonial-desc">
                        <img src="images/photo1" alt="" width="100px" height="100px" />
                        <div class="testimonial-writer">
                            <div class="testimonial-writer-name">Sophie Rose</div>
                            <div class="testimonial-writer-designation">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <a href="#" class="testimonial-writer-company">Perpignan</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div id="tb-testimonial" class="testimonial testimonial-primary-filled">
                    <div class="testimonial-section">
                        Grâce à ma nouvelle installation, je peux quitter ma maison la conscience tranquille, et garder un oeil sur mes animaux grâce aux caméras.
                    </div>
                    <div class="testimonial-desc">
                        <img src="images/photo2.png" alt="" width="100px" height="100px" />
                        <div class="testimonial-writer">
                            <div class="testimonial-writer-name">Arthur Delbeck</div>
                            <div class="testimonial-writer-designation">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="#" class="testimonial-writer-company">Rouen</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mb-4">
                <div id="tb-testimonial" class="testimonial testimonial-info-filled">
                    <div class="testimonial-section">
                        Plus besoin de d'avoir un appareil par-ci, un appareil par là, et les télécommandes qui vont avec. Un simple clic sur mon smartphone et le tour est joué!
                    </div>
                    <div class="testimonial-desc">
                        <img src="images/photo3.png" alt="" width="100px" height="100px" />
                        <div class="testimonial-writer">
                            <div class="testimonial-writer-name">Nicolas Boisdé</div>
                            <div class="testimonial-writer-designation">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <a href="#" class="testimonial-writer-company">Paris</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'partials/footer.php'?>
</body>
</html>
