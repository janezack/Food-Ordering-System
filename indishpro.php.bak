<html>
<head><title>Добавление блюдо</title></head>
<body>
<?php
$l = mysqli_connect("localhost", "root", "", "order");
$n=mysqli_real_escape_string($l, $_POST['name']);
$t=mysqli_real_escape_string($l, $_POST['type']);
$e=mysqli_real_escape_string($l, $_POST['ing']);
$c=mysqli_real_escape_string($l, $_POST['time']);
$a=mysqli_real_escape_string($l, $_POST['quantity']);
$p=mysqli_real_escape_string($l, $_POST['price']);
$i=mysqli_real_escape_string($l, $_POST['img']);
$m= new mysqli("localhost", "root", "", "order");
$q="INSERT INTO menu (Dish, Type, Ingredients, Cooking_time, Portion, Price, Image) VALUES ('".$n."', '".$t."', '".$e."', '".$c."', '".$a."', '".$p."', '".$i."')";
$r=$m->query($q);
mysqli_close($m);
if (!$r) { echo "Dish has NOT been added into database.";
echo "<br><br><a href='indish.php'>Back to Home</a>";
echo mysql_error ();
}
else 
{ 
echo "Dish has been added into database.";
echo "<br><br><a href='indish.php'><-Back</a>";

}
?>
</body>
</html>
