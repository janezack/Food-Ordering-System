<?php
SESSION_START();
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
if (!empty($_SESSION['cart'])):
?>
<script>
alert ('Ваш заказ оформлен');</script>
<?php endif;?>
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

    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​DiningOn The Lake, ​breakfast, 01, 02, 03, 04, 05, 06, Delivery services, Fast Food, Burger Menu, Delivery Services, Subscribe, location, follow us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Ваш аккаунт</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Главная.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Alata:400">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site2"
}</script>
    <meta name="theme-color" content="#18922c">
    <meta property="og:title" content="Главная">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
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
          <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
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
</li><li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="menu1.php" data-page-id="2743911611" style="padding: 10px 20px;">Меню</a>
</li></ul>
          </div>
        </nav>
      </div></header>

<div class="modal-body">
    <?php if (!empty($_SESSION['cart'])):
	$array=array();
	foreach ($_SESSION['cart'] as $id => $item): 
	$array[]=$item['Dish'];
	endforeach;
	$length=count($array);
	QuickSortRecursive($array, 0, $length-1);
	?>
        <table class="table">
            <thead>
			<th colspan='6' align='centre'> Сейчас вы заказали </th>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Dish</th>
                <th scope="col">Ingredients</th>
                <th scope="col">Cooking time</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
            </tr>
            </thead>
            <tbody>
            <?php for ($i=0; $i<$length; $i++) {
				    foreach ($_SESSION['cart'] as $id => $item):
					if ($item['Dish']==$array[$i]) { ?>
			
                <tr class="trow">
                    <td><a href="#"><img src="img/<?= $item['Image'] ?>" alt="<?= $item['Dish'] ?>"></a></td>
                    <td><a href="#"><?= $item['Dish'] ?></a></td>
                    <td><?= $item['Ingredients'] ?></td>
					<td><?= $item['Cooking_time'] * $item['Quantity'] ?> min</td>
                    <td><?= $item['Price'] ?> tg</td>
                    <td><?= $item['Quantity'] ?></td>
                </tr>
				
				<?php
				date_default_timezone_set('Asia/Almaty');
				$d=date('Y-m-d');
				$t=date('H:i:s');
				$mysqli = new mysqli("localhost", "root", "", "order");
				$strSQL ="insert into orders (`CustomerID`, `DishID`, `Quantity`, `Cost`, `Time`, `Date`) values ('".$_SESSION["ID"]."', '".$id."', '".$item["Quantity"]."', '".$item["Price"]*$item["Quantity"]."', '".$t."', '".$d."' )";
				$result=$mysqli->query($strSQL);		
					}				
            endforeach;
			}			?>

            <tr>
                <td colspan="6" align="right">Товаров: <span id="modal-cart-qty"><?= $_SESSION['cart.Quantity'] ?></span>
                    <br> Сумма: <?= $_SESSION['cart.sum'] ?> tg
                </td>
            </tr>
            </tbody>
        </table>

    <?php endif; 
		
                date_default_timezone_set('Asia/Almaty');
                $po=date('Y-m-d', strtotime("-4 day"));
				$date=(string)$po;
				$connect = new mysqli("localhost", "root", "", "order");
                $sql="SELECT orders.Date, SUM(Quantity), SUM(Cost) FROM orders INNER JOIN menu ON orders.DishID=menu.ID WHERE orders.CustomerID='".$_SESSION['ID']."' AND orders.Date>'".$date."' GROUP BY orders.Date";				
                $rest = $connect->query($sql);
				$sum=0;
				$price=0;
				if ($rest->num_rows > 0) { ?>
		<table class="table">
            <thead>
			<th colspan='6' align='centre'> В последние три дня вы заказывали: </th>
            <tr width="100%" align="center" >
			    <th scope="col">Date</th>
                <th><table  align="center" width="100%">
				<tr align="center">
				<th>Dish</th>
				<th>Quantity</th>
				<th>Cost</th>
				</tr>
				</table> </th>
                <th scope="col">Number of orders</th>
				<th scope="col">Cost per day</th>
            </tr>
            </thead>
            <tbody align="center" >
            <?php 
                while($row = $rest->fetch_assoc()) { ?>
				<tr width="100%" class="trow">
                    <td><a href="#"><?= $row['Date'] ?></a></td>
                    <td>
					<table width="100%" ><?php 
					$connec = new mysqli("localhost", "root", "", "order");
					$sqlr="SELECT menu.Dish, menu.Price, Quantity FROM orders INNER JOIN menu ON orders.DishID=menu.ID WHERE orders.CustomerID='".$_SESSION['ID']."' AND orders.Date='".$row["Date"]."'";				
                    $rests = $connec->query($sqlr);
					if ($rests->num_rows > 0) { 
					$array=array();
					$arr=array();
					$a=array();
					while($rowt = $rests->fetch_assoc()){
						if (in_array($rowt['Dish'], $array)) {
							$arr[$rowt['Dish']]=$arr[$rowt['Dish']]+$rowt['Quantity'];
							$a[$rowt['Dish']]=$rowt["Price"]*$arr[$rowt['Dish']];
						}
						else {
							$array[]=$rowt['Dish'];
							$arr[$rowt['Dish']]=$rowt['Quantity'];
							$a[$rowt['Dish']]=$rowt["Price"];
						}
						
					}
						$lt=count($array);
						for ($i=0; $i<$lt; $i++){
							?><tr width='100%'><td width='48%'><?php echo $array[$i];?></td>
							<td width='30%'><?php echo $arr[$array[$i]];?></td>
							<td width='30%'><?php echo $a[$array[$i]];?>tg</td> </tr>  <?php
						} 
					}?></table> </td>
					<td><?= $row['SUM(Quantity)'] ?></td>
					<td><?= $row['SUM(Cost)'] ?> tg</td>	
                </tr>
					<?php
					$sum=$sum+$row['SUM(Quantity)'];
					$price=$price+$row['SUM(Cost)'];
					}?>
            <tr>
                <td colspan="4" align="right">Товаров: <?php echo $sum; ?>
                    <br> Сумма: <?php echo $price; ?> tg
                </td>
            </tr>
            </tbody>
        </table>
		<?php 
				}		
		else { ?>
        <p>Вы еще ничего не заказывали...</p>
		<?php } ?>
</div>

<a href="index.php" onclick="<?php unset($_SESSION['cart']);
                unset($_SESSION['cart.sum']);
                unset($_SESSION['cart.Quantity']);?>">Home</a>
<a href="logout.php" >Log out</a>