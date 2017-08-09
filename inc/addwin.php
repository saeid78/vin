
  <?php
  require_once('../config/db.php');

//check for submit

if (isset($_POST['submit'])){

//get the form data via POSt method
  $name = mysqli_real_escape_string($conn, $_POST['prodName']);
  $prodBottleCharge = mysqli_real_escape_string($conn, $_POST['prodBottleCharge']);
  $prodSellPrice = mysqli_real_escape_string($conn, $_POST['prodSellPrice']);
//insert into the DB
  $sql = "INSERT INTO Products(prodName, prodBottleCharge, prodSellPrice ) VALUES('$name', '$prodBottleCharge', '$prodSellPrice')";
  if (mysqli_query($conn, $sql)){
    header('Location: winlist.php/');
  } else {
    echo 'Error: '. mysqli_error($conn);
  }
}

  ?>
  <?php include('header.php'); ?>
  <div class="container">

      <h1 style="text-align:center;"> Add Win</h1>

      <form  method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label>Name: </label>
            <input type="tetx" name="prodName" class="form-control">
        </div>
        <div class="form-group">
          <label>prodBottleCharge: </label>
            <input type="tetx" name="prodBottleCharge" class="form-control">
        </div>
        <div class="form-group">
          <label>prodSellPrice: </label>
            <input type="tetx" name="prodSellPrice" class="form-control">
        </div>

        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </form>

  </div>
<?php
  include('footer.php');
?>
