<?php
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM staff WHERE username = '$username' AND password = '$password'";
    $query = $connection->query($sql);

    $data = $query->fetch_object();
    $check = $query->num_rows;

    if ($check > 0) {
        session_start();
        $_SESSION['full_name'] = $data->full_name;
        $_SESSION['username'] = $username;
        header("location:homepage.php");
    }else {
        header("location:login.php?message=invalid");
    }

?>