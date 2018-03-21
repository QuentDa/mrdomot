<?php
$nbUsers = $db->query("SELECT COUNT(*) FROM user")->fetchColumn();
$nbCategories = $db->query("SELECT COUNT(*) FROM category")->fetchColumn();
$nbArticles = $db->query("SELECT COUNT(*) FROM product")->fetchColumn();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>ADMINISTRATION MR DOMOT</title>
</head>
<body>

<nav class="nav-side-menu col-3">
    <div class="brand"><a href=".././index.php"><img src="../images/test.svg" alt="" width="80%"></a></div>
    <hr>
    <?php if (isset($_SESSION['user'])):?>
    <div class="d-flex flex-column align-items-center">
        <h6 class="text-center">Bienvenue dans l'administration <?php echo $_SESSION['user'];?></h6>
        <a href="index.php?logout" class="d-block btn btn-danger mb-4 mt-2 w-50">Déconnexion</a>
    </div>
    <?php endif; ?>
    <hr>

    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <a href="./index.php">
                <li>
                    <i class="fas fa-tachometer-alt"></i></i> Dashboard
                </li>
            </a>

            <a href="./categorylist.php">
            <li>
                <i class="fas fa-list-alt"></i> Catégories (<?php echo $nbCategories; ?>)
            </li>
            </a>

            <a href="./productlist.php">
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                    <i class="fas fa-shopping-bag"></i> Produits (<?php echo $nbArticles; ?>)
                </li>
            </a>

            <a href="./user-list.php">
                <li data-toggle="collapse" data-target="#new" class="collapsed">
                    <i class="fa fa-users fa-lg"></i> Utilisateurs (<?php echo $nbUsers; ?>)
                </li>
            </a>


        </ul>
    </div>
</nav>
</body>
</html>