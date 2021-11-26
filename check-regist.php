<?php
    include 'connect.php';

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_num = $_POST['phone_num'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($full_name) && !empty($email) && !empty($phone_num) && !empty($username) && !empty($password)) {
        $sql = "INSERT INTO staff (full_name, email, phone_num, username, password) VALUES 
        ('$full_name', '$email', '$phone_num', '$username', '$password')";
        $insert = $connection->query($sql);

        if ($insert) {
            header("location:login.php");
        }else {
            header("location:register.php?message=invalid");
        }
    }else {
        header("location:register.php?message=empty");
    }


?>