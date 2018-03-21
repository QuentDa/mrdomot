<?php require_once '../tools/_db.php';
if (isset($_SESSION['is_admin']) AND ($_SESSION['is_admin'] != 1) OR empty($_SESSION['user'])){
    header('location: ../index.php');
    exit;
}


if (isset($_POST['save']) ) {
    $query = $db->prepare('INSERT INTO product (category_id, title, quantity, is_published, price, content) VALUES (?, ?, ?, ?, ?, ?)');
    $newProduct = $query->execute(
        [
            $_POST['category_id'],
            $_POST['title'],
            $_POST['quantity'],
            $_POST['is_published'],
            $_POST['price'],
            $_POST['content'],
        ]

    );

    if($newProduct) {
        //upload de l'image si image envoyée via le formulaire
        if(isset($_FILES['image'])){
            //tableau des extentions que l'on accepte d'uploader
            $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
            //extension dufichier envoyé via le formulaire
            $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
            //si l'extension du fichier envoyé est présente dans le tableau des extensions acceptées
            if ( in_array($my_file_extension , $allowed_extensions) ){

                //je génrère une chaîne de caractères aléatoires qui servira de nom de fichier
                //le but étant de ne pas écraser un éventuel fichier ayant le même nom déjà sur le serveur
                $new_file_name = md5(rand());

                //destination du fichier sur le serveur (chemin + nom complet avec extension)
                $destination = '../image/product/' . $new_file_name . '.' . $my_file_extension;
                //déplacement du fichier à partir du dossier temporaire du serveur vers sa destination
                $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);
                //on récupère l'id du dernier enregistrement en base de données (ici l'article inséré ci-dessus)
                $lastInsertedProductId = $db->lastInsertId();

                //mise à jour de l'article enregistré ci-dessus avec le nom du fichier image qui lui sera associé
                $query = $db->prepare('UPDATE product SET
					image = :image
					WHERE id = :id'
                );
                $resultUpdateImage = $query->execute(
                    [
                        'image' => $new_file_name . '.' . $my_file_extension,
                        'id' => $lastInsertedProductId
                    ]
                );
            }
        }

        header('location:productlist.php');
        exit;
    }
    else {
        $message = "Impossible d'enregistrer la nouvelle categorie...";
    }
}

//Si $_POST['update'] existe, cela signifie que c'est une mise à jour d'utilisateur
if(isset($_POST['update'])) {

    $query = $db->prepare('UPDATE product SET
		category_id = :category_id,
		title = :title,
		quantity = :quantity,
		is_published = :is_published,
		price = :price,
		content = :content
		WHERE id = :id'
    );

    //données du formulaire
    $result = $query->execute(
        [
            'category_id' => $_POST['category_id'],
            'title' => $_POST['title'],
            'quantity' => $_POST['quantity'],
            'is_published' => $_POST['is_published'],
            'price' => $_POST['price'],
            'content' => $_POST['content'],
            'id' => $_POST['id'],
        ]
    );

    if ($result) {
        if (isset($_FILES['image'])) {
            $allowed_extensions = array('jpg', 'jpeg', 'gif', 'png');
            $my_file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            if (in_array($my_file_extension, $allowed_extensions)) {

                //si un fichier est soumis lors de la mise à jour, je commence par supprimer l'ancien du serveur s'il existe
                if (isset($_POST['current-image'])) {
                    unlink('../image/product/' . $_POST['current-image']);
                }
                $new_file_name = md5(rand());
                $destination = '../image/product/' . $new_file_name . '.' . $my_file_extension;
                $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                $query = $db->prepare('UPDATE category SET
					image = :image
					WHERE id = :id'
                );
                $resultUpdateImage = $query->execute(
                    [
                        'image' => $new_file_name . '.' . $my_file_extension,
                        'id' => $_POST['id']
                    ]
                );
            }
        }
        header('location:productlist.php');
        exit;
    } else {
        $message = 'Erreur.';
    }
}

//si on modifie un utilisateur, on doit séléctionner l'utilisateur en question (id envoyé dans URL) pour pré-remplir le formulaire plus bas
if(isset($_GET['product_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){

    $query = $db->prepare('SELECT * FROM product WHERE id = ?');
    $query->execute(array($_GET['product_id']));
    //$user contiendra les informations de l'utilisateur dont l'id a été envoyé en paramètre d'URL
    $product = $query->fetch();
}

?>


<!doctype html>
<html lang="fr">
<head>

    <title>Administration des produits - Mr.Domot !</title>

    <?php require 'partials/head_assets.php'; ?>

</head>
<body class="index-body">
    <div class="container-fluid">

        <div class="row my-3 index-content">

            <?php require 'partials/nav.php'; ?>

            <section class="col-9">
    <header class="pb-3">
        <!-- Si $user existe, on affiche "Modifier" SINON on affiche "Ajouter" -->
        <h4><?php if(isset($product)): ?>Modifier<?php else: ?>Ajouter<?php endif; ?> un produit</h4>
    </header>
                <?php if(isset($message)): //si un message a été généré plus haut, l'afficher ?>
                    <div class="bg-danger text-white">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>

    <form method="post" action="productform.php" enctype="multipart/form-data">
        <label>Choix de la catégorie</label>
        <?php $query = $db->query('SELECT * FROM category');?>
        <select class="form-control" name="category_id">

            <?php while ( $category = $query->fetch()) : ?>
                <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php endwhile; ?>
            <?php $query->closeCursor(); ?> ?>
        </select><br />

        <label>Nom du Produit :</label> <input class="form-control" type="text" name="title" <?php if(isset($product)): ?>value="<?php echo $product['title']?>"<?php endif; ?>><br />
        <label>Prix :</label> <input class="form-control" name="price" <?php if(isset($product)): ?>value="<?php echo $product['price']?>"<?php endif; ?></input><br />
        <label>Quantité</label> <input class="form-control" name="quantity" <?php if(isset($product)): ?>value="<?php echo $product['quantity']?>"<?php endif; ?></input><br />
        <label>Description du Produit :</label> <textarea class="form-control" name="content" ><?php if(isset($product)): ?><?php echo $product['content']?><?php endif; ?></textarea><br />
        <div class="form-group">
            <label for="summary">Image :</label>
            <input class="form-control" type="file" name="image" id="image" />
        </div>
        <label>Mettre en ligne</label>

        <select class="form-control" name="is_published">
            <option value="0" <?php if(isset($product) && $product['is_published'] == 0): ?>selected<?php endif; ?>>Non</option>
            <option value="1" <?php if(isset($product) && $product['is_published'] == 1): ?>selected<?php endif; ?>>Oui</option>

        </select><br />

        <div class="text-right">
            <!-- Si $user existe, on affiche un lien de mise à jour -->
            <?php if(isset($product)): ?>
                <input class="btn btn-success" type="submit" name="update" value="Mettre à jour" />
                <!-- Sinon on afficher un lien d'enregistrement d'un nouvel utilisateur -->
            <?php else: ?>
                <input class="btn btn-success" type="submit" name="save" value="Enregistrer" />
            <?php endif; ?>
        </div>
        <?php if(isset($product)): ?>
            <input type="hidden" name="id" value="<?php echo $product['id']?>" />
        <?php endif; ?>
    </form>
            </section>
</body>
</html>
