<?php
require_once 'tools/_db.php';
if (isset($_SESSION['user'])){
    header('location:index.php');
    exit;
}
if(isset($_POST['login'])) {
    if (empty($_POST['email']) OR empty($_POST['password'])) {
        $message = "Merci de remplir tous les champs";
    } else {
        $query = $db->prepare('SELECT * FROM user WHERE email = ? AND password = ?');
        $query->execute(array($_POST['email'], $_POST['password']));
        $user = $query->fetch();
        if ($user) {
            $_SESSION['is_admin'] = $user['is_admin'];
            $_SESSION['user'] = $user['firstname'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['cart'] = $product

            header('location:index.php');
            exit;
        } else {
            $message = 'Mauvais identifiants';
        }
    }
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
   
 </head>
 <body>
 <?php require_once 'partials/nav.php'?>
	<div class="container-fluid">
		<div class="row">
			<main class="col-12 login d-flex justify-content-center align-items-center">

				<div class="d-flex justify-content-center align-items-center w-100">
					<div class="d-flex w-100 h-100 justify-content-center align-items-center tab-pane container-fluid <?php if(isset($_POST['login']) || !isset($_POST['register'])): ?>active<?php endif; ?>" id="login" role="tabpanel">
					
						<form action="login.php" method="post" class="w-100 row flex-column">
						
							<h4 class="pb-4 col-sm-8 offset-sm-2">Connectez vous chez vous.</h4>

                            <?php if (isset($message)): ?>
                            <?php echo $message; ?>
                            <?php endif; ?>
							
							<div class="form-group col-sm-8 offset-sm-2">
								<label for="email">Email</label>
								<input class="form-control" value="" type="email" placeholder="Email" name="email" id="email" />
							</div>
							
							<div class="form-group col-sm-8 offset-sm-2">
								<label for="password">Mot de passe</label>
								<input class="form-control" value="" type="password" placeholder="Mot de passe" name="password" id="password" />
							</div>
							
							<div class="text-right col-sm-8 offset-sm-2">
								<input class="btn btn-success" type="submit" name="login" value="Valider" />
							</div>
							
						</form>
					
					</div>

				</div>
			</main>
			
		</div>
		
	</div>
 </body>
</html>

