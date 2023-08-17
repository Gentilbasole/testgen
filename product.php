
<?php 

require("config/commandes.php");
$produits=afficher();

require 'elements/header.php';

?>
<main>

<div class="album py-5 bg-align">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <?php foreach($produits as $produit) : ?>
                <div class="col">
            
                    <div class="card shadow-sm">
                        <title><?= $produit->nom?></title>
                        <img src="<?= $produit->image?>">
                        <div class="card-body">
                            <p class="card-text"><?= $produit->description?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
                                </div>
                                <small class="text-muted"><strong><?= $produit->prix?> $</strong></small>
                         </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</div>


<?php require 'elements/footer.php';?>