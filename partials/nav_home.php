<nav id="headernav" class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#"><img src="images/test.svg" alt="" width="240px" height="80px"></a>
    <button style="background-color: white; color: black"  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav d-flex justify-content-center w-75 menu">
            <li class="nav-item active">
                <a class="nav-link navlink" href="introduce.php">INTRODUCTION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navlink" href="shop.php">BOUTIQUE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navlink" href="contact.php">CONTACT</a>
            </li>
        </ul>
        <ul class="navbar-nav d-flex justify-content-end w-25">
            <li class="nav-item active">
                <?php if (isset($_SESSION['user'])):?>
                    <p class="loginheader">Bonjour <?php echo $_SESSION['user'];?></p>
                    <?php if (isset($_SESSION['is_admin']) AND $_SESSION['is_admin'] == 1):?>
                        <a class="d-block btn btn-primary mb-4 mt-2" href="admin/index.php">Administration</a>
                    <?php endif; ?>
                    <a href="index.php?logout" class="d-block btn btn-danger mb-2 mt-2">Déconnexion</a>
                <?php else: ?>
                <a class="nav-link navlink small" href="login.php">Connexion</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link navlink small" href="#">S'inscrire</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</nav>