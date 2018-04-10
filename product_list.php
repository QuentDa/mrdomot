<?php

require_once 'tools/_db.php';

if(isset($_GET['category_id']) ){ //si une catégorie est demandée via un id en URL

    //selection de la catégorie en base de données
    $query = $db->prepare('SELECT * FROM category WHERE id = ?');
    $query->execute( array($_GET['category_id']) );

    $currentCategory = $query->fetch();

    if($currentCategory){ //Si la catégorie demandé existe bien

        //récupération des articles publiés qui sont liés à la catégorie ET publiés
        $query = $db->prepare('SELECT * FROM product WHERE category_id = ? AND is_published = 1');
        $result = $query->execute( array($_GET['category_id']) );
        //fetchAll() renvoie un ensemble d'enregistrements (tableau), le résultat sera à traiter avec un boucle foreach
        $products = $query->fetchAll();
    }
    else{ //si la catégorie n'existe pas, redirection vers la page d'accueil
        header('location:index.php');
        exit;
    }

}
else{ //si PAS de catégorie demandée via un id en URL

    //séléction de tous les articles publiés
    $query = $db->query('SELECT product.* , category.name AS category_name
						FROM product
						JOIN category 
						ON product.category_id = category.id WHERE is_published = 1');
    $products = $query->fetchAll();
}

?>

<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="css/product_list.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title><?php if(isset($currentCategory)): ?><?php echo $currentCategory['name']; ?><?php else : ?>Tous les produits - <?php endif; ?> MR DOMOT</title>
</head>
<body>
    <?php require('partials/nav.php'); ?>

    <div class="container-fluid">
        <div class="row d-flex flex-column" id="header">
            <p class="productpre font-weight-light h-25 d-flex">boutique /
                <span class="ml-2"><?php if(isset($currentCategory)): ?><?php echo $currentCategory['name']; ?><?php else : ?>Tous les articles<?php endif; ?></span></p>
            <?php if(isset($currentCategory)): ?>
                <div id="productcatdesc"><?php echo $currentCategory['description']; ?></div>
            <?php endif; ?>
        </div>
    </div>

    <hr>
    <p class="small ml-2">Page 1 sur 1 - X Résultats</p>
    <hr>

    <div class="container-fluid">
        <div class="row">
            <div class="col md-8 d-flex flex-wrap justify-content-start" id="cards">
                <?php if(!empty($products)): ?>
                <?php foreach($products as $key => $product): ?>
                <div class="card ml-4 mb-4 mt-2 mr-4" style="width: 18rem;">
                    <a href="product.php?product_id=<?php echo $product['id']; ?>"><img src="images/product/<?php echo $product['id']; ?>.jpg" alt="test" width="100%"><br></a>
                    <div class="card-body text-center">
                        <a href="product.php?product_id=<?php echo $product['id']; ?>"><h5 class="card-title"><?php echo $product['title']; ?></h5></a>
                        <!-- Si nous n'affichons pas une catégorie en particulier, je souhaite que le nom de la catégorie de chaque article apparaisse à côté de la date -->
                        <?php if(!isset($currentCategory)): ?>
                            <b class="article-category">[<?php echo $product['category_name']; ?>]</b>
                        <?php endif; ?>
                        <p class="card-text font-weight-bold price"><?php echo $product['price']; ?>€</p>
                        <p class="card-text small quantity"><?php echo $product['quantity']; ?> restant(s)</p>
                        <a href="product.php?product_id=<?php echo $product['id']; ?>">Voir le produit</a>
                    </div>
                </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                        <!-- s'il n'y a pas d'articles à afficher (catégorie vide ou aucun article publié) -->
                        Aucun article dans cette catégorie...
                    <?php endif; ?>
            </div>
        </div>
    </div>



    <?php require 'partials/footer.php'; ?>
</body>
</html>