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
    $id = $_GET['id'];

    if (!empty($item_code) && !empty($goods) && !empty($amount) && !empty($unit) && !empty($coming_date) && !empty($category) && !empty($status)&& !empty($price)) {
        $sql = "UPDATE inventory SET
            item_id = '$item_code',
            item_name = '$goods',
            amount = '$amount',
            unit = '$unit',
            arrival_date = '$coming_date',
            category = '$category',
            item_status = '$status',
            price = '$price' WHERE item_id = $id; ";
            
            $update = $connection->query($sql);

            if ($update) {
                header("location:inventory.php");
            }else {
                header("location:edit.php?message=invalid&id=$id");
            }
    } else {
        header("location:edit.php?message=empty&id=$id");
    }




?>