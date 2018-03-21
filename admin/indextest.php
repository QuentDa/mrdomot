<?php
require_once '../tools/_db.php'
$nbUsers = $db->query("SELECT COUNT(*) FROM user")->fetchColumn();
$nbCategories = $db->query("SELECT COUNT(*) FROM category")->fetchColumn();
$nbArticles = $db->query("SELECT COUNT(*) FROM product")->fetchColumn();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>ADMINISTRATION MR DOMOT</title>
</head>
<body>



<div class="nav-side-menu">
    <div class="brand"><a href=".././index.php"><img src="../images/test.svg" alt=""></a></div>
    <?php if (isset($_SESSION['user'])):?>
        <h3 class="text-center">Bienvenue dans l'administration <?php echo $_SESSION['user'];?></h3>
        <a href="index.php?logout" class="d-block btn btn-danger mb-4 mt-2">Déconnexion</a>
    <?php endif; ?>

    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>

            <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg"></i> Catégories (<?php echo $nbCategories; ?>) <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="products">
                <li><a href="#">Liste des catégories</a></li>
                <li><a href="#">Ajouter une catégorie</a></li>
            </ul>


            <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i> Produits (<?php echo $nbArticles; ?>) <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="service">
                <li>Liste des produits</li>
                <li>Ajouter un produit</li>
            </ul>


            <li data-toggle="collapse" data-target="#new" class="collapsed">
                <a href="#"><i class="fa fa-users fa-lg"></i> Utilisateurs (<?php echo $nbUsers; ?>) <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="new">
                <li>Liste des utilisateurs</li>
                <li>Ajouter un utilisateur</li>
            </ul>

        </ul>
    </div>
</div>
</body>
</html>