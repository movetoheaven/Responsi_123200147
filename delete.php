<?php 
    session_start();
    $id = $_GET['id'];
    if (isset($_GET['delete'])) {
        include 'connect.php';
        $sql = "DELETE FROM inventory WHERE item_id = '$id'";
        $query = $connection->query($sql);
        if ($query) {
            header("location: inventory.php");
        }else {
            header("location: delete.php");
        }   
    }else {
        include 'connect.php';
        $sql = "SELECT * FROM inventory WHERE item_id = '$id'";
        $query = $connection->query($sql);
        $data = $query->fetch_object();
        $goods = $data->item_name;
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
    <title>Inventory - 123200147</title>
</head>
<body>
    <style>
        footer {
     position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
        }
    </style>

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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inventory.php">List of Inventory</a>
        </li>
        <li class="nav-item dropdown">
                <div class="dropdown">
          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            List per Category
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="inventory.php?category=Building">Buildings</a>
            <a class="dropdown-item" href="inventory.php?category=Vehicle">Vehicles</a>
            <a class="dropdown-item" href="inventory.php?category=Office stationery">Office Inventory</a>
            <a class="dropdown-item" href="inventory.php?category=Electronic">Electronics</a>
          </div>
        </div>
        </li>
      </ul>
    </div>
    <a class="btn btn-primary fixed-right" href="logout.php" role="button">Logout</a>
  </div>
  </nav>
    
  <div class="form-container">
      <div class="head-title" style="color: white; background-color:#17a2b8;width: 50%;margin-left: 400px;">
      <center>
          Delete Inventory Data
      </center>
      </div>
      <center>
          <h3>Are you sure you want to remove the <?php echo $goods?>? </h3>
          <a href="?id=<?=$id?>&delete=true" class="btn btn-success">Delete</a>
          <a  class="btn btn-outline-warning" href="homepage.php">Cancel</a>
          <div class="btn-merge" style="margin-left: 600px;">
                
              </div>
      </center>
     
    
  </div>
  <div class="footer" style="display: flex; align-items:center; justify-content:center; width: 100%; height: 80px; background-color:#17a2b8; color: white;margin-top :100px;">
              <p>Inventory Web 2021</p>
</div>
    
</body>
</html>