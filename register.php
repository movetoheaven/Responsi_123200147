<?php

    session_start();
    
    if (isset($_POST['full_name']) | isset($_POST['email']) | isset($_POST['phone_num']) | isset($_POST['username']) | isset($_POST['password'])) {
        include 'connect.php';

        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone_num = $_POST['phone_num'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO staff (full_name, email, phone_num, username, password) VALUES 
        ('$full_name', '$email', '$phone_num', '$username', '$password')";
        $insert = $connection->query($sql);

        if ($insert) {
            header("location:login.php");
        }else {
            header("location:register.php?message=invalid");
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="log-reg.css">
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <title>Register - 123200147</title>
    
</head>
<body>
  
<div class="p-3 mb-2 bg-info text-white">
    <div class="container">
        <div class="row pt-3">
            <div class="col text-center">
                <h1>LIST OF INVENTORY</h1>
                <h1>EVERYTHING OFFICE</h1>
            </div>
        </div>
    </div>
</div>


<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    REGISTER
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">FULL NAME</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">EMAIL</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PHONE NUMBER</label>
                                <input type="text" class="form-control" id="phone_num" name="phone_num" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <?php
                                if (isset($_GET['message'])) {
                                    if ($_GET['message']=="invalid") {
                                        echo "<p>Username already taken!</p>";
                                    }elseif ($_GET['message'=="empty"]) {
                                        echo "<p>Field can't be empty!</p>";
                                    }
                                }else {
                                    echo "<br>";
                                }


                            ?>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary" id="btn" name="register">REGISTER</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2">
                    <a href="login.php">Login</a>
                </div>
    

            </div>
           
        </div>
    
</body>
</html>