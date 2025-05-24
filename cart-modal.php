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
					<?php  }
					endforeach; 
			}?>

            <tr>
                <td colspan="6" align="right">Товаров: <span id="modal-cart-qty"><?= $_SESSION['cart.Quantity'] ?></span>
                    <br> Сумма: <?= $_SESSION['cart.sum'] ?> tg
                </td>
            </tr>
            </tbody>
        </table>
    <?php else: ?>
        <h6>Корзина пуста...</h6>
    <?php endif; ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <?php if (!empty($_SESSION['cart'])): ?>
        <a href="log.php" class="btn btn-primary" >Оформить заказ</a>
        <button type="button" class="btn btn-danger" id="clear-cart">Очистить корзину</button>
    <?php endif; ?>
</div>
