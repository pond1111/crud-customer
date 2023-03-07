<?php
$cid = $_GET['cid'];
$link = mysqli_connect("localhost","root","","mycompany");
if(!$link)
{
	exit("can not connect database");
}
$sql = "select * from customer where CustomerID='$cid'";
echo $sql;
echo "<br>";
$result = mysqli_query($link,$sql);
if(!$result)
{
	exit("can not select customer");
}
$data = mysqli_fetch_array($result);
$cname = $data['CustomerName'];
$cphone = $data['Customerphon'];
$csid = $data['Customerempoyee'];
mysqli_close($link);
?>
<html>
<body>
<form name="form1" method="post" action="customerupdate.php">
Cid:<input type="text" name="textcid" value='<?=$cid?>' readonly>
Cname:<input type="text" name="textcname" value='<?=$cname?>'>
Cphone:<input type="text" name="textcphone" value='<?=$cphone?>'>
Csid:<input type="text" name="textcsid" value='<?=$csid?>'>
<input type="submit" value="update customer">
</form>
</body>
</html>