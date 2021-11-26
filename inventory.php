<?php
  session_start();
  if (empty($_SESSION['username'])) {
    header("location:homepage.php");
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

    <a class="btn btn-primary fixed-left" href="add_data.php" style="margin-left: 10px;">+Add</a>
        <div class="table-container">
        <div class="table-responsive-md">
  <table class="table">
  <thead>
                <tr>
                    <th class="table-info" >No</th>
                    <th class="table-info" >Code</th>
                    <th class="table-info" >Name of Goods</th>
                    <th class="table-info" >Amount</th>
                    <th class="table-info" >Unit</th>
                    <th class="table-info" >Coming Date</th>
                    <th class="table-info" >Category</th>
                    <th class="table-info" >Status</th>
                    <th class="table-info" >Unit Price</th>
                    <th class="table-info" >Total Price</th>
                    <th class="table-info" >Action</th>

                </tr>
            </thead>
            <?php
              include 'connect.php';
              $no=0;
              $pricesum=0;
              
              if (isset($_GET['category'])) {
                $category=$_GET['category'];
                $sql = "SELECT * FROM inventory where category = '$category'";

              }else {
                $sql = "SELECT * FROM inventory";
              }

              $query = $connection->query($sql);
              
              while ($data = $query->fetch_object()) {
                $item_id = $data->item_id;
                $item_name = $data->item_name;
                $amount = $data->amount;
                $unit = $data->unit;
                $arrivaldate = $data->arrival_date;
                $category = $data->category;
                $item_status = $data->item_status;
                $price = $data->price;
                $totalitem=$price*$amount;

                $pricesum+=$totalitem;
                $formattedprice = number_format($price, 2);
                $formattedtotal = number_format($totalitem, 2);

                
            ?>
              <tr>
                <td class="table-light"><?php echo  ++$no?></td>
                <td class="table-light"><?php  echo $item_id?></td>
                <td class="table-light"><?php  echo $item_name?></td>
                <td class="table-light"><?php echo $amount?></td>
                <td class="table-light"><?php echo  $unit?></td>
                <td class="table-light"><?php echo  $arrivaldate?></td>
                <td class="table-light"><?php echo  $category?></td>
                <td class="table-light"><?php echo  $item_status?></td>
                <td class="table-light"><?php echo  "Rp $formattedprice"?></td>
                <td class="table-light"><?php echo  "Rp $formattedtotal"?></td>
                <td>
                  <a href="edit.php?id=<?=$item_id?>"> <button type="button" class="btn btn-primary">Edit</button> </a>
                  <a href="delete.php?id=<?=$item_id?>"> <button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
            
              <?php
              }
              $formattedpricesum = number_format($pricesum, 2);
            ?>
            
    </table>
  </div>
          <div class="total-invent">
            <h5>Total Inventory = Rp. <?php echo $formattedpricesum ?></h5>
          </div>
</div>

<div class="footer" style="display: flex; align-items:center; justify-content:center; width: 100%; height: 50px; background-color:#17a2b8; color: white;">
              <p>Inventory Web 2021</p>
</div>

    
</body>
</html>