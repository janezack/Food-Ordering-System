<?
SESSION_START();

IF (!isset($_SESSION['Name'])){
	echo "sorry you can't use this page";
	exit();
}

$result=$mysqli_query("select * from customer WHERE Name='$_SESSION[Name]'");
  $row_cnt = mysqli_num_rows($result);


IF ($row_cnt!="1"){
	echo "sorry you can't use this page";
	exit();
}
?>