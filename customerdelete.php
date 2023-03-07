<?php
$cid = $_GET['cid'];
$link = mysqli_connect('localhost','root','','mycompany') or die('Unable to connect');
$sql = "delete from customer where CustomerID='$cid'";
echo $sql;
echo "<br>";
$result = mysqli_query($link,$sql);
if(!$result)
{
	exit("can not delete friend");
}
echo "delete completed<br>";
echo "<a href=customer.php>customer</a>";
mysqli_close($link);
?>