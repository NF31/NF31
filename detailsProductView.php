<?php
    $title = "Fiche produit";
    $link_css = "assets/css/detail-product.css" ;
    include "header.php";
?>

    <main>
        <section id="product-info">
            <div>
                <img src="<?= $product["urlImg"] ?>" >
                <p>Note: <?= $product["score"] ?> / 5</p>
            </div>
            <div>
                <h1 class="mb-4"><?= $product["name"] ?></h1>
                <h3 class="mb-4" ><?= $product["price"] ?> €</h3>
                <button id="addCart" class="btn btn-success">Ajouter au panier</button>
            </div>
        </section>
        <section id="product-description">
            <h4>description:</h4>
            <?= $product["description"] ?>
        </section>
    </main>


<?php include "footer.php"  ?>