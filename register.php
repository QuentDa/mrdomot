<?php
require_once 'tools/_db.php';
if (isset($_SESSION['user'])){
    header('location:index.php');
    exit;
}
if(isset($_POST['register'])){

    //un enregistrement utilisateur ne pourra se faire que sous certaines conditions

    //en premier lieu, vérifier que l'adresse email renseignée n'est pas déjà utilisée
    $query = $db->prepare('SELECT email FROM user WHERE email = ?');
    $query->execute(array($_POST['email']));

    //$userAlreadyExists vaudra false si l'email n'a pas été trouvé, ou un tableau contenant le résultat dans le cas contraire
    $userAlreadyExists = $query->fetch();

    //on teste donc $userAlreadyExists. Si différent de false, l'adresse a été trouvée en base de données
    if($userAlreadyExists){
        $message = "Adresse email déjà enregistrée";
    }
    elseif(empty($_POST['firstname']) OR empty($_POST['password']) OR empty($_POST['email'])){
        //ici on test si les champs obligatoires ont été remplis
        $message = "Merci de remplir tous les champs obligatoires (*)";
    }
    elseif($_POST['password'] != $_POST['password_confirm']) {
        //ici on teste si les mots de passe renseignés sont identiques
        $message = "Les mots de passe ne sont pas identiques";
    }
    else {

        //si tout les tests ci-dessus sont passés avec succès, on peut enregistrer l'utilisateur
        //le champ is_admin étant par défaut à 0 dans la base de données, inutile de le renseigner dans la requête
        $query = $db->prepare('INSERT INTO user (firstname,lastname,email,password) VALUES (?, ?, ?, ?)');
        $newUser = $query->execute(
            [
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['email'],
                $_POST['password'],
            ]
        );
        //une fois l'utilisateur enregistré, on le connecte en créant sa session
        $_SESSION['is_admin'] = 0; //PAS ADMIN !
        $_SESSION['user'] = $_POST['firstname'];
    }
}
//si l'utilisateur a une session (il est connécté), on le redirige ailleurs
if(isset($_SESSION['user'])){
    header('location:index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Connexion - Mr.Domot</title>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">


</head>
<body>
<?php require_once 'partials/nav.php'?>
<div class="container-fluid">
    <div class="row">
        <main class="col-12 login d-flex justify-content-center align-items-center">

            <div class="d-flex justify-content-center align-items-center w-100">
                <div class="tab-pane container-fluid <?php if(isset($_POST['register'])): ?>active<?php endif; ?>" id="register" role="tabpanel">

                    <form action="register.php" method="post" class="p-4 row flex-column">

                        <h4 class="pb-4 col-sm-8 offset-sm-2">Inscription</h4>

                        <?php if(isset($message)): ?>
                            <div class="text-danger col-sm-8 offset-sm-2 mb-4"><?php echo $message; ?></div>
                        <?php endif; ?>

                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="firstname">Prénom <b class="text-danger">*</b></label>
                            <input class="form-control" value="" type="text" placeholder="Prénom" name="firstname" id="firstname" />
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="lastname">Nom de famille</label>
                            <input class="form-control" value="" type="text" placeholder="Nom de famille" name="lastname" id="lastname" />
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="email">Email <b class="text-danger">*</b></label>
                            <input class="form-control" value="" type="email" placeholder="Email" name="email" id="email" />
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="password">Mot de passe <b class="text-danger">*</b></label>
                            <input class="form-control" value="" type="password" placeholder="Mot de passe" name="password" id="password" />
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2">
                            <label for="password_confirm">Confirmation du mot de passe <b class="text-danger">*</b></label>
                            <input class="form-control" value="" type="password" placeholder="Confirmation du mot de passe" name="password_confirm" id="password_confirm" />
                        </div>

                        <div class="text-right col-sm-8 offset-sm-2">
                            <p class="text-danger">* champs requis</p>
                            <input class="btn btn-success" type="submit" name="register" value="Valider" />
                        </div>

                    </form>

                </div>
            </div>
        </main>

    </div>

</div>
<?php require_once 'partials/footer.php'?>
</body>
</html>

