<?php
$query = $db->query('SELECT * FROM category');
?>

<nav class="navbar navbar-expand-lg" id="principalnav">
    <a class="navbar-brand" href="./index.php">
        <img src="images/test.svg" alt="" width="240px" height="70px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-item nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="introduce.php">Introduction</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Boutique
                </a>
                <div class="dropdown-menu" id="shopdropdown" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./shop.php">Aller à la boutique</a>
                    <div class="dropdown-divider"></div>
                    <?php while($category = $query->fetch()): ?>
                        <a class="dropdown-item" href="product_list.php?category_id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a>
                         <div class="dropdown-divider"></div>
                    <?php endwhile; ?>
                    <?php $query->closeCursor(); ?>
                    <a class="dropdown-item" href="./product_list.php">Tous les Articles</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="contact.php">Contact</a>
            </li>

        </ul>
        <div class="form-inline my-2 my-lg-0 mr-5">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-user"></i>
                </a>
                <ul class="dropdown-menu dropdownlogin">
                    <li>
                        <div class="navbar-login">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-center">
                                        <i class="fas fa-user icon-size"></i>
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <?php if (isset($_SESSION['user'])):?>
                                        <p class="loginheader font-weight-bold">Bonjour <?php echo $_SESSION['user'];?></p>
                                        <hr>
                                        <a class="dropdown-item" href="#">Mon compte</a>
                                        <a class="dropdown-item" href="#">Vos commandes</a>
                                        <hr>
                                        <?php if (isset($_SESSION['is_admin']) AND $_SESSION['is_admin'] == 1):?>
                                            <a class="dropdown-item"href="admin/index.php">Administration</a>
                                        <?php endif; ?>
                                        <a href="index.php?logout" class="d-block btn btn-danger m-4 mt-2"><i class="fas fa-power-off"></i></a>
                                    <?php else: ?>
                                    <a class="loginclick" href="./login.php"><div class="dropdown-item d-block btn btn-primary">Se Connecter</a></div>
                                <hr>
                                <p class="small">Pas encore de compte ? </p> <a class="small" href="./register.php">S'inscrire</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </div>

        <div class="form-inline my-2 my-lg-0 mr-5">
                <a class="d-flex mt-3" href="">
                    <p id="cartnumber">
                        0
                    </p>
                    <p class="ml-1" id="carttext">
                        Panier
                    </p>
                </a>
        </div>
    </div>
</nav>
