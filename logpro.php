<?php
SESSION_START();
$mysqli = new mysqli("localhost", "root", "", "order");
include 'security.php';
$l = mysqli_connect("localhost", "root", "", "order");
$strSQL ="select * from customer WHERE Name='$_POST[Name]' AND (Password)='$_POST[Password]'";
$result=$mysqli->query($strSQL);
$row_cnt = mysqli_num_rows($result);
IF ($row_cnt>0){
	$row=mysqli_fetch_assoc($result);
$_SESSION['Name']=$_POST['Name']; 
$_SESSION['ID']=$row['ID'];
header('Location:cuspage.php');
}
ELSE {
	echo "The username and password entered are incorrect";
	echo "<br><br><a href='log.php'>Back to login</a>";
exit();}
?>
