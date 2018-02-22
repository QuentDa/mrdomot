<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="images/test.svg" alt="" width="240px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="introduce.php">Introduction</a>
            <a class="nav-item nav-link" href="shop.php">Produits</a>
            <a class="nav-item nav-link" href="contact.php">Contact</a>
            <div class="d-flex">
                <div class="dropdown ml-5">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </button>
                    <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
                        <?php if (isset($_SESSION['user'])):?>
                            <p class="loginheader font-weight-bold">Bonjour <?php echo $_SESSION['user'];?></p>
                            <hr>
                            <a class="dropdown-item" href="#">Mon compte</a>
                            <a class="dropdown-item" href="#">Vos commandes</a>
                            <hr>
                            <?php if (isset($_SESSION['is_admin']) AND $_SESSION['is_admin'] == 1):?>
                                <a class="dropdown-item"href="admin/index.php">Administration</a>
                            <?php endif; ?>
                            <a href="index.php?logout" class="d-block btn btn-danger m-4 mt-2">Déconnexion</a>
                        <?php else: ?>
                        <a class="loginclick" href="./login.php"><div class="dropdown-item d-block btn btn-primary">Se Connecter</a></div>
                        <?php endif; ?>
                    </div>
                </div>
            <div class="btn-group ml-3">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i> Panier (0)
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" href="#"></button>
                    <p class="small text-center">Votre panier ne contient aucun article</p>
                    <a class="loginclick" href=""><button class="dropdown-item" type="button">Voir mon Panier</button></a>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    .loginclick{
        text-decoration: none!important;
    }
    .loginclick:active{
        color: white;
    }
</style>
