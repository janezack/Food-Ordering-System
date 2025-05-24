<?php
error_reporting(-1);
SESSION_START();
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
$chicken = get_products_chicken();
$burger = get_products_burger();
$pizza = get_products_pizza();
$sauce = get_products_sauce();
$drinks = get_products_drinks();

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    
    <title>Меню</title>
    <link rel="stylesheet" href="page.css" media="screen">
<link rel="stylesheet" href="Главная.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js"></script>
    <script class="u-script" type="text/javascript" src="page.js" ></script>
   
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Alata:400">
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon.png">
    

  </head>
 <body class="u-body u-xl-mode"><header class="u-align-center-xs u-border-1 u-border-grey-25 u-clearfix u-header u-header" id="sec-92d8"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="login.php" data-page-id="821727490" class="u-border-2 u-border-hover-palette-3-base u-border-palette-1-base u-btn u-btn-round u-button-style u-none u-radius-50 u-text-palette-2-base u-btn-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/1077114.png" alt=""></span> 
        </a>
        <form action="search.php" method='post' class="u-border-1 u-border-grey-15 u-search u-search-right u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10 u-text-grey-40">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b04b"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-b04b" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </span>
          </button>
          <input class="u-search-input" type="search" name="search" value="" placeholder="Search...">
        </form>
        <nav class="u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Home.php" style="padding: 10px 20px;">Главная</a>
</li><li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Home.php#carousel_3243" data-page-id="2743911611" style="padding: 10px 20px;">Контакты</a>
</li><li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="menu1.php" data-page-id="2743911611" style="padding: 10px 20px;">Меню</a></li>
<li class="nav-item">
                <button id="get-cart" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart-modal">
                    Корзина <span class="badge badge-light mini-cart-qty"><?= $_SESSION['cart.Quantity'] ?? 0 ?></span>
                </button>
            </li>
</ul>
          </div>
        </nav>

      </div></header>
<section class="u-align-left u-clearfix u-section-2" id="sec-f681">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-palette-2-base u-text-1"> Menu</h2>
        <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-1">
          <ul class="u-spacing-30 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-palette-2-base u-button-style u-tab-link u-tab-link-1" id="link-tab-081f" href="#tab-081f" role="tab" aria-controls="tab-081f" aria-selected="true">Курица</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-2-base u-button-style u-tab-link u-tab-link-2" id="link-tab-4d57" href="#tab-4d57" role="tab" aria-controls="tab-4d57" aria-selected="false">Бургеры</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-2-base u-button-style u-tab-link u-tab-link-3" id="link-tab-3a42" href="#tab-3a42" role="tab" aria-controls="tab-3a42" aria-selected="false">Пицца</a>
            </li>
            <li class="u-tab-item u-tab-item-4" role="presentation">
              <a class="u-active-palette-2-base u-button-style u-tab-link u-tab-link-4" id="tab-d7e7" href="#link-tab-d7e7" role="tab" aria-controls="link-tab-d7e7" aria-selected="false">Cоусы</a>
            </li>
            <li class="u-tab-item u-tab-item-5" role="presentation">
              <a class="u-active-palette-2-base u-button-style u-tab-link u-tab-link-5" id="tab-6219" href="#link-tab-6219" role="tab" aria-controls="link-tab-6219" aria-selected="false">Напитки</a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane" id="tab-081f" role="tabpanel" aria-labelledby="link-tab-081f">
              <?php 
if (!empty($chicken)):
$array=array();
foreach ($chicken as $product): 
$array[]=$product['Dish'];
endforeach;
$length=count($array);
QuickSortRecursive($array, 0, $length-1);

?>
<div class="wrapper mt-5">
    <div class="container">
        <div class="row">

            <div class="product-cards mb-5">

                <?php 
				    for ($i=0; $i<$length; $i++) {?>
                    <?php foreach ($chicken as $product):
                        if ($product['Dish']==$array[$i]) {?>
                        <div class="product-card">
                            <div class="card-thumb">
                                <a href="#"><img src="img/<?= $product['Image'] ?>" alt="<?= $product['Dish'] ?>"></a>
                            </div>
                            <div class="card-caption">
                                <div class="card-title">
                                    <a href="#"><?= $product['Dish'] ?></a>
                                </div>
                                <div class="card-price text-center">
                                    <?= $product['Price'] ?> tg.
                                </div>
                                <a href="?cart=add&id=<?= $product['ID'] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['ID'] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> Купить
                                </a>
                            </div>
                        </div><!-- /product-card -->
						<?php }
					endforeach; ?>
					<?php } ?>


            </div><!-- /product-cards -->

        </div><!-- /row -->

        

    </div><!-- /container -->
</div><!-- /wrapper -->
<?php  else: ?>
  <br><br>
 <h4 align="center">Nothing</h4> 
<?php endif?>
            </div>

            <div class="u-container-style u-tab-pane" id="tab-4d57" role="tabpanel" aria-labelledby="link-tab-4d57">
               <?php 
if (!empty($burger)):
$array=array();
foreach ($burger as $product): 
$array[]=$product['Dish'];
endforeach;
$length=count($array);
QuickSortRecursive($array, 0, $length-1);

?>
<div class="wrapper mt-5">
    <div class="container">
        <div class="row">

            <div class="product-cards mb-5">

                <?php 
				    for ($i=0; $i<$length; $i++) {?>
                    <?php foreach ($burger as $product):
                        if ($product['Dish']==$array[$i]) {?>
                        <div class="product-card">
                            <div class="card-thumb">
                                <a href="#"><img src="img/<?= $product['Image'] ?>" alt="<?= $product['Dish'] ?>"></a>
                            </div>
                            <div class="card-caption">
                                <div class="card-title">
                                    <a href="#"><?= $product['Dish'] ?></a>
                                </div>
                                <div class="card-price text-center">
                                    <?= $product['Price'] ?> tg.
                                </div>
                                <a href="?cart=add&id=<?= $product['ID'] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['ID'] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> Купить
                                </a>
                            </div>
                        </div><!-- /product-card -->
						<?php }
					endforeach; ?>
					<?php } ?>


            </div><!-- /product-cards -->

        </div><!-- /row -->

        

    </div><!-- /container -->
</div><!-- /wrapper -->
<?php  else: ?>
  <br><br>
 <h4 style="text-align:center;">Nothing</h4> 
<?php endif?>
            </div>

            <div class="u-container-style u-tab-pane" id="tab-3a42" role="tabpanel" aria-labelledby="link-tab-3a42">
                 <?php 
if (!empty($pizza)):
$array=array();
foreach ($pizza as $product): 
$array[]=$product['Dish'];
endforeach;
$length=count($array);
QuickSortRecursive($array, 0, $length-1);

?>
<div class="wrapper mt-5">
    <div class="container">
        <div class="row">

            <div class="product-cards mb-5">

                <?php 
				    for ($i=0; $i<$length; $i++) {?>
                    <?php foreach ($pizza as $product):
                        if ($product['Dish']==$array[$i]) {?>
                        <div class="product-card">
                            <div class="card-thumb">
                                <a href="#"><img src="img/<?= $product['Image'] ?>" alt="<?= $product['Dish'] ?>"></a>
                            </div>
                            <div class="card-caption">
                                <div class="card-title">
                                    <a href="#"><?= $product['Dish'] ?></a>
                                </div>
                                <div class="card-price text-center">
                                    <?= $product['Price'] ?> tg.
                                </div>
                                <a href="?cart=add&id=<?= $product['ID'] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['ID'] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> Купить
                                </a>
                            </div>
                        </div><!-- /product-card -->
						<?php }
					endforeach; ?>
					<?php } ?>


            </div><!-- /product-cards -->

        </div><!-- /row -->

        

    </div><!-- /container -->
</div><!-- /wrapper -->
<?php  else: ?>
  <br><br>
 <h4 style="text-align:center;">Nothing</h4> 
<?php endif?>        
            </div>

            <div class="u-container-style u-tab-pane" id="link-tab-d7e7" role="tabpanel" aria-labelledby="tab-d7e7">
              <?php 
if (!empty($sauce)):
$array=array();
foreach ($sauce as $product): 
$array[]=$product['Dish'];
endforeach;
$length=count($array);
QuickSortRecursive($array, 0, $length-1);

?>
<div class="wrapper mt-5">
    <div class="container">
        <div class="row">

            <div class="product-cards mb-5">

                <?php 
				    for ($i=0; $i<$length; $i++) {?>
                    <?php foreach ($sauce as $product):
                        if ($product['Dish']==$array[$i]) {?>
                        <div class="product-card">
                            <div class="card-thumb">
                                <a href="#"><img src="img/<?= $product['Image'] ?>" alt="<?= $product['Dish'] ?>"></a>
                            </div>
                            <div class="card-caption">
                                <div class="card-title">
                                    <a href="#"><?= $product['Dish'] ?></a>
                                </div>
                                <div class="card-price text-center">
                                    <?= $product['Price'] ?> tg.
                                </div>
                                <a href="?cart=add&id=<?= $product['ID'] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['ID'] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> Купить
                                </a>
                            </div>
                        </div><!-- /product-card -->
						<?php }
					endforeach; ?>
					<?php } ?>


            </div><!-- /product-cards -->

        </div><!-- /row -->

        

    </div><!-- /container -->
</div><!-- /wrapper -->
<?php  else: ?>
  <br><br>
 <h4 style="text-align:center;">Nothing</h4> 
<?php endif?>
            </div>

            <div class="u-container-style u-tab-pane" id="link-tab-6219" role="tabpanel" aria-labelledby="tab-6219">
              <?php 
if (!empty($drinks)):
$array=array();
foreach ($drinks as $product): 
$array[]=$product['Dish'];
endforeach;
$length=count($array);
QuickSortRecursive($array, 0, $length-1);

?>
<div class="wrapper mt-5">
    <div class="container">
        <div class="row">

            <div class="product-cards mb-5">

                <?php 
				    for ($i=0; $i<$length; $i++) {?>
                    <?php foreach ($drinks as $product):
                        if ($product['Dish']==$array[$i]) {?>
                        <div class="product-card">
                            <div class="card-thumb">
                                <a href="#"><img src="img/<?= $product['Image'] ?>" alt="<?= $product['Dish'] ?>"></a>
                            </div>
                            <div class="card-caption">
                                <div class="card-title">
                                    <a href="#"><?= $product['Dish'] ?></a>
                                </div>
                                <div class="card-price text-center">
                                    <?= $product['Price'] ?> tg.
                                </div>
                                <a href="?cart=add&id=<?= $product['ID'] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['ID'] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> Купить
                                </a>
                            </div>
                        </div><!-- /product-card -->
						<?php }
					endforeach; ?>
					<?php } ?>


            </div><!-- /product-cards -->

        </div><!-- /row -->

        

    </div><!-- /container -->
</div><!-- /wrapper -->
<?php  else: ?>
  <br><br>
 <h4 style="text-align:center;">Nothing</h4> 
<?php endif?>
            </div>

          </div>
        </div>
      </div>
    </section>

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
