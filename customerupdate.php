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
$sql = "update customer set CustomerName='$cname', Customerphon='$cphone', Customerempoyee='$csid' where CustomerID='$cid'";
echo $sql;
echo "<br>";
$result = mysqli_query($link,$sql);
if(!$result)
{
	exit("can not update customer");
}
echo "update completed<br>";
echo "<a href=customer.php>show customer</a>";
mysqli_close($link);
?>