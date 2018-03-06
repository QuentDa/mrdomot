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
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <title>MR.DOMOT - Boutique</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" id="principalnav">
        <a class="navbar-brand" href="#">
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
                        <a class="dropdown-item" href="#">Action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
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
                    <ul class="dropdown-menu" id="dropdownlogin">
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
        </div>
    </nav>

</body>
</html>