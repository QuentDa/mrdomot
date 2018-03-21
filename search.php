<?php require_once 'tools/_db.php';

if (isset($_POST['submit'])) {
    $query = $db->prepare('SELECT * FROM product WHERE title LIKE "%"?"%"');
    $query->execute([
        $_POST['search']
    ]);
    $search = $query->fetchAll();
}



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
        <link rel="stylesheet" href="css/product.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
        <title>MR.DOMOT - Recherche</title>
    </head>
    <body>
<?php require_once 'partials/nav.php'?>
<div class="container-fluid">
    <div class="row d-flex flex-column" id="header">
        <p class="productpre font-weight-light h-25 d-flex">boutique / recherche </p>
            <div id="productcatdesc"> résultats pour "<?php echo $_POST['search'] ?>" </div>
    </div>
</div>
<div class="container-fluid">
<?php if(!empty($search)): ?>
    <div id="rowsearch" class="row flex-wrap">
<?php foreach($search as $key => $value) : ?>


            <div class="card ml-4 mb-4 mt-2 mr-4" style="width: 18rem;">
                <a href="product.php?product_id=<?php echo $search[$key]['id']; ?>"><img src="images/product/<?php echo $search[$key]['id'];?>.jpg" alt="test" width="100%"><br></a>
                <div class="card-body text-center">
                    <a href="product.php?product_id=<?php echo $search[$key]['id']; ?>"><h5 class="card-title"><?php echo $search[$key]['title']; ?></h5></a>
                    <p class="card-text font-weight-bold price"><?php echo $search[$key]['price']; ?>€</p>
                    <p class="card-text small quantity"><?php echo $search[$key]['quantity']; ?> restant(s)</p>
                    <a href="product.php?product_id=<?php echo $search[$key]['id']; ?>">Voir le produit</a>
                </div>
            </div>


    <?php endforeach; ?>
    </div>
<?php endif; ?>
</div>
    </body>
</html>

