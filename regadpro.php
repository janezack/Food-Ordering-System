<html>
<head><title>Добавление пользователя</title></head>
<body>
<?php
SESSION_START();
$l = mysqli_connect("localhost", "root", "", "foodorder");
$id=mysqli_real_escape_string($l, $_POST['ID']);
$n=mysqli_real_escape_string($l, $_POST['name']);
$t=mysqli_real_escape_string($l, $_POST['telephone']);
$e=mysqli_real_escape_string($l, $_POST['email']);
$p=mysqli_real_escape_string($l, $_POST['password']);
$c=mysqli_real_escape_string($l, $_POST['code']);
if ($c!="AdminQwerty1!") { echo "Your manager code was wrong, Please try again!";
echo "<br><br><a href='RegMan.php'>Back to registration</a>";
}
else 
{ 
$m= new mysqli("localhost", "root", "", "foodorder");
$q="INSERT INTO manager (ID, Name, Telephone, Email, Password) VALUES ('".$id."', '".$n."', '".$t."', '".$e."', '".$p."')";
$r=$m->query($q);
mysqli_close($m);
if (!$r) { echo "User has NOT been added into database.";
echo mysql_error ();
}
else 
{ 
echo "User has been added into database.";
}
}
?>
</body>
</html>
