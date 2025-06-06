<?php 
error_reporting(-1);
SESSION_START();
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
$products = oget_products();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="assets/css/main.css">

    <title>Search...</title>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon.png">
</head>
<body>
<?php
if ($_POST['search']!=""){
$value = $_POST['search'];
if(binarySearch($products, $value)!=-1){
	$x = binarySearch($products, $value);
?>
      <div class="wrapper mt-5">
    <div class="container">
        <div class="row">

            <div class="product-cards mb-5">
                    
                        <div class="product-card">
                            <div class="card-thumb">
                                <a href="#"><img src="img/<?= $products[$x]['Image'] ?>" alt="<?= $products[$x]['Dish'] ?>"></a>
                            </div>
                                <div class="card-caption">
                                <div class="card-title">
                                    <a href="#"><?= $products[$x]['Dish'] ?></a>
                                </div>
                                <div class="card-price text-center">
                                    <?= $products[$x]['Price'] ?> 〒 .
                                </div>
                                <a href="?cart=add&id=<?= $products[$x]['ID'] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $products[$x]['ID'] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> Купить
                                </a>
                            </div>
                        </div><!-- /product-card -->


            </div><!-- /product-cards -->

        </div><!-- /row -->

<?php }
else{
	echo "This product doesnot exist";
}
?>
    </div>
</div>

<?php }
else { ?> 
<script> alert ('Чтобы что то найти нужно знать что искать!'); </script>
<?php header('Location:Home.php'); }?>

<a href="Home.php">Home</a>

<!-- Modal -->
<div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
		   <div class="modal-cart-content">

            </div>
            
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>

