<?php 
    include 'connect.php';
    $item_code = $_POST['item_code'];
    $goods = $_POST['goods'];
    $amount = $_POST['amount'];
    $unit = $_POST['unit'];
    $coming_date = $_POST['coming_date'];
    $category = $_POST['category'];
    $status = $_POST['status'];
    $price = $_POST['price'];


    if (!empty($item_code) && !empty($goods) && !empty($amount) && !empty($unit) && !empty($coming_date) && !empty($category) && !empty($status) && !empty($price)) {
        $sql = "INSERT 
        INTO inventory (item_id,
                        item_name,
                        amount,
                        unit,
                        arrival_date,
                        category,
                        item_status,
                        price)
        VALUES ('$item_code', 
                '$goods', 
                '$amount', 
                '$unit', 
                '$coming_date',
                '$category',
                '$status',
                '$price') ";

        $insert = $connection->query($sql);
        if ($insert) {
            header("location:inventory.php");
        }else {
            header("location:add-data.php=invalid");
        }

    }else {
        header("location:add-data.php?message=empty");
    }


?>
