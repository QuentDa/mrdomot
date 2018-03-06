<?php require_once 'tools/_db.php';

if(isset($_GET['product_id'] ) ){

//selection de l'article dont l'ID est envoyé en paramètre GET
$query = $db->prepare('SELECT product.* , category.name AS category_name
FROM product
JOIN category
ON product.category_id = category.id
WHERE product.id = ? AND is_published = 1');
$query->execute( array( $_GET['product_id'] ) );

$product = $query->fetch();

if(!$product){
header('location:index.php');
exit;
}

}
else{ //si article_id n'est pas envoyé en URL, renvoyer l'utilisateur vers la page index
header('location:index.php');
exit;
}

?>

<!doctype html>
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
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <title><?php echo $product['title']; ?> - MR.DOMOT</title>
</head>
<body>
    <?php require('partials/nav.php'); ?>

    <div class="container-fluid">
        <div class="row" id="mainrow">
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <a href="product.php?product_id=<?php echo $product['id']; ?>"><img class="mt-5" src="images/product/<?php echo $product['id']; ?>.jpg" alt="test" width="60%"><br></a>
            </div>
            <div class="col-md-4 mb-5">
                <a href="product_list.php?category_id=<?php echo $category['id']; ?>"><p id="catname" class="article-category"><?php echo $product['category_name']; ?></p></a>
                <a href="product.php?product_id=<?php echo $product['id']; ?>"><h5 class="card-title"><?php echo $product['title']; ?></h5></a>

                <!-- A essayer d'intégrer en PHP et un système d'avis/commentaire -->
                <div class="rates d-flex">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <a href=""><p class="ml-2" id="ratings">24 avis</p></a>
                </div>
                <!-- A essayer d'intégrer en PHP et un système d'avis/commentaire -->

                <p class="price mt-2 font-weight-bold price"><?php echo $product['price']; ?>€</p>

                <button type="button" id="AddToCart" class="btn btn-primary">ajouter au panier</button>
                <p class="mt-2 small quantity"><?php echo $product['quantity']; ?> restant(s)</p>
                <p class="mt-5 description"><?php echo $product['content']; ?></p>
            </div>
            <div class="col-md-1"
        </div>
    </div>

    <div class="row whitespace">

    </div>


    <?php require 'partials/footer.php'; ?>
</body>
</html>