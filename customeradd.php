<?php
$cid = $_POST['textcid'];
$cname = $_POST['textcname'];
$cphone = $_POST['textcphone'];
$csid = $_POST['textcsid'];
$link = mysqli_connect("localhost","root","","mycompany");
if(!$link)
{
	exit("can not connect database");
}
$sql = "insert into customer values('$cid','$cname','$cphone','$csid')";
echo $sql;
echo "<br>";
$result = mysqli_query($link,$sql);
if(!$result)
{
	exit("can not connect customer");
}
echo "insert completed<br>";
echo "<a href=customer.php>show customer</a>";
mysqli_close($link);
?>