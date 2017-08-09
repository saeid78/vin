<?php

 require_once('config/db.php');

// get ID
$id = mysqli_real_escape_string($conn, $_GET['id']);

//perform the query
 $query = 'SELECT * FROM Products WHERE prodID = '.$id;

//put the resault in a var
 $result = mysqli_query($conn, $query);

//save it in assos array
 $win= mysqli_fetch_assoc($result);

 //var_dump($win);

 mysqli_free_result($result);

// close the connction
 mysqli_close($conn);


 ?>

 <?php
  include('inc/header.php');
  ?>

  <div class="container">

        <a class="btn btn-default" href="winlist.php">Back</a>
      <h1 style="text-align:center;"> Wins </h1>

            <h2>Product Name: <small><?php echo $win['prodName']; ?> </small></h2>
            <h2>Product Color ID: <small><?php echo $win['prodColorID']; ?> </small></h2>
            <h2>Product Sell Price: <small><?php echo $win['prodSellPrice']; ?> </small></h2>
            <h2>Product BottleCharge: <small><?php echo $win['prodBottleCharge']; ?></small></h2>
            <h2>Product BottleChargePerson: <small><?php echo $win['prodBottleChargePerson']; ?> </small></h2>
            <h2>Product QtyBuy: <small><?php echo $win['prodQtyBuy']; ?> </small></h2>

  </div>
  <?php
    include('inc/footer.php');
  ?>
