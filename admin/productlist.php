<?php require_once '../tools/_db.php';
if (isset($_SESSION['is_admin']) AND ($_SESSION['is_admin'] != 1) OR empty($_SESSION['user'])){
    header('location: ../index.php');
    exit;
}
?>


<?php
if(isset($_GET['product_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
    $query=$db->prepare('DELETE FROM product WHERE id = ?');
    $result= $query->execute(
        [
            $_GET['product_id']
        ]
    );

    if($result){
        $message= "Supression effectuée.";
    }
    else{
        $message="Impossible de supprimer l'article";
    }

}


?>


<?php
$query = $db->query('SELECT * FROM product');
$products = $query->fetchall();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Administration des produits - Mr.Domot</title>

    <?php require 'partials/head_assets.php'; ?>

</head>
<body class="index-body">
<div class="container-fluid">

    <?php require 'partials/header.php'; ?>

    <div class="row my-3 index-content">

        <?php require 'partials/nav.php'; ?>

        <section class="col-9">
            <header class="pb-4 d-flex justify-content-between">
                <h4>Liste des produits</h4>
                <a class="btn btn-primary" href="productform.php">Ajouter un produit</a>
            </header>


            <?php if (isset($message)): ?>
                <div class="message btn-success">
                    <?php echo $message ?>
                </div>
            <?php endif; ?>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Catégorie</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>En ligne ?</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach($products as $product): ?>

                    <tr>
                        <th><?php echo htmlentities($product['id']); ?></th>
                        <td><?php echo htmlentities($product['category_id']); ?></td>
                        <td><?php echo htmlentities($product['title']); ?></td>
                        <td><?php echo htmlentities($product['quantity']); ?></td>
                        <td><?php echo htmlentities($product['is_published']); ?></td>
                        <td><?php echo htmlentities($product['price']); ?></td>
                        <td><?php echo htmlentities($product['content']); ?></td>
                        <td>
                            <a href="productform.php?product_id=<?php echo $product['id']; ?>&action=edit" class="btn btn-warning">Modifier</a>
                            <a onclick="return confirm ('Voulez-vous vraiment effectuer cette action?')" href="productlist.php?product_id=<?php echo $product['id']; ?>&action=delete" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
                </tbody>
            </table>

        </section>

    </div>

</div>
</body>
</html>