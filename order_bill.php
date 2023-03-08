<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>หน้าสั่งซื้อสินค้า</title>
    </head>
    <body>
        <form action="bill_service.php" method="get">
            <label for="customer_bill">CustomerName:</label>
            <select name="customer_id">
         <?php 
            $link = mysqli_connect("localhost","root","","mycompany");
            $customer = "SELECT * FROM customer";
            $qry = mysqli_query($link, $customer);
            foreach ($qry as $customer){ ?>
            <option value="<?php echo $customer['CustomerID'];?>"> ชื่อ <?php echo $customer['CustomerName'];?></option>
            <?php } ?>
            ?>
        </select>
        <label for="customer_bill">Product:</label>
        <select name="product_id">
            <?php 
            $product = "SELECT * FROM product";
            $qry = mysqli_query($link, $product);
            foreach ($qry as $product){ ?>
            <option value="<?php echo $product['ProducID'];?>"> สินค้า <?php echo $product['ProducName'];?></option>
            <?php } ?>
            ?>
        </select>
        <label for="customer_bill">Salesman:</label>
        <select name="salesman_id">
            <?php 
            $csid = "SELECT * FROM salesman";
            $qry = mysqli_query($link, $csid);
            foreach ($qry as $csid){ ?>
            <option value="<?php echo $csid['salesmanID'];?>"> พนักงานขาย <?php echo $csid['salesmanName'];?></option>
            <?php } ?>
            ?>
        </select>
        จำนวน <input type="text" name="amount" required>
        Bill code <input type="text" name="bill_code" required>
        <button type="submit">submit</button>
    </form>
</body>
</html>