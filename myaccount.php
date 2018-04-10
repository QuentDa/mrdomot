<?php
require_once 'tools/_db.php';
if(!isset($_SESSION['user'])){
    header('location:../index.php');
    exit;
}

$query = $db->prepare('SELECT * FROM user WHERE id = ?');
$query->execute(array($_SESSION['id']));
$query->execute(array($_SESSION['id']));

$user = $query->fetch();

if(isset($_POST['update'])){
    $query = $db->prepare('SELECT email FROM user WHERE email = ?');
    $query->execute(array($_POST['email']));
    $emailAlreadyExists = $query->fetch();

    if($emailAlreadyExists && $emailAlreadyExists['email'] != $user['email']){
        $updateMessage = "Adresse email déjà utilisée";
    }
    elseif(empty($_POST['firstname']) OR empty($_POST['email'])){
        //ici on test si les champs obligatoires ont été remplis
        $updateMessage = "Merci de remplir tous les champs obligatoires (*)";
    }
    //uniquement si l'utilisateur souhaite modifier son mot de passe
    elseif( !empty($_POST['password']) AND ($_POST['password'] != $_POST['password_confirm'])) {
        //ici on teste si les mots de passe renseignés sont identiques
        $updateMessage = "Les mots de passe ne sont pas identiques";
    }
    else {
        $queryString = 'UPDATE user SET firstname = :firstname, lastname = :lastname, email = :email ';
        //début du tableau de paramètres de la requête de mise à jour
        $queryParameters = [ 'firstname' => $_POST['firstname'], 'lastname' => $_POST['lastname'], 'email' => $_POST['email'], 'id' => $_SESSION['id'] ];
        //uniquement si l'utilisateur souhaite modifier son mot de passe
        if( !empty($_POST['password'])) {
            //concaténation du champ password à mettre à jour
            $queryString .= ', password = :password ';
            //ajout du paramètre password à mettre à jour
            $queryParameters['password'] = $_POST['password'];
        }

        //fin de la chaîne de caractères de la requête de mise à jour
        $queryString .= 'WHERE id = :id';

        //préparation et execution de la requête avec la chaîne de caractères et le tableau de données
        $query = $db->prepare($queryString);
        $result = $query->execute($queryParameters);
        if($result){
            //une fois l'utilisateur enregistré, on modifie $_SESSION['user'] car il a peut être changé son firstName
            $_SESSION['user'] = $_POST['firstname'];
            $updateMessage = "Informations mises à jour avec succès !";

            //récupération des informations utilisateur qui ont été mises à jour pour affichage
            $query = $db->prepare('SELECT * FROM user WHERE id = ?');
            $query->execute(array($_SESSION['id']));
            $user = $query->fetch();
        }
        else{
            $updateMessage = "Erreur";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Modification des informations - Mr.Domot</title>

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
    <div class="row myaccount">
        <main class="col-12 d-flex flex-column align-items-center justify-content-center">

            <form id="formaccount" action="myaccount.php" method="post" class="p-4 row flex-column w-75">

                <h4 class="pb-4 col-sm-8 offset-sm-2">Mise à jour des informations utilisateur</h4>
                <hr>

                <?php if(isset($updateMessage)): ?>
                    <div class="text-danger col-sm-8 offset-sm-2 mb-4"><?php echo $updateMessage; ?></div>
                <?php endif; ?>

                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="firstname">Prénom <b class="text-danger">*</b></label>
                    <input class="form-control" value="<?php echo $user['firstname']?>" type="text" placeholder="Prénom" name="firstname" id="firstname" />
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="lastname">Nom de famille</label>
                    <input class="form-control" value="<?php echo $user['lastname']?>" type="text" placeholder="Nom de famille" name="lastname" id="lastname" />
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="email">Email <b class="text-danger">*</b></label>
                    <input class="form-control" value="<?php echo $user['email']?>" type="email" placeholder="Email" name="email" id="email" />
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="password">Mot de passe (uniquement si vous souhaitez modifier votre mot de passe actuel)</label>
                    <input class="form-control" value="" type="password" placeholder="Mot de passe" name="password" id="password" />
                </div>
                <div class="form-group col-sm-8 offset-sm-2">
                    <label for="password_confirm">Confirmation du mot de passe (uniquement si vous souhaitez modifier votre mot de passe actuel)</label>
                    <input class="form-control" value="" type="password" placeholder="Confirmation du mot de passe" name="password_confirm" id="password_confirm" />
                </div>


                <div class="text-right col-sm-8 offset-sm-2">
                    <p class="text-danger">* champs requis</p>
                    <input class="btn btn-success" type="submit" name="update" value="Valider" />
                </div>

            </form>
        </main>

    </div>

</div>
</body>
</html>

