
  <?php
  include('inc/header.php');
  require_once('traitement.vin.php');
  ?>
  <div class="container">

        <a class="btn btn-lg btn-primary" href="index.php">Home</a>
      <h1 style="text-align:center;"> Win  List</h1>
      <?php foreach($wins as $win) : ?>
          <div class="well">
            <h2>Product Name: <h4><?php echo $win['prodName']; ?></h4></h2>
            <h2>Product Color ID: <small><?php echo $win['prodColorID']; ?> </small></h2>
            <h2>Product Sell Price: <small><?php echo $win['prodSellPrice']; ?> </small></h2>
            <a class="btn btn-default" href="win.php?id=<?php echo $win['prodID']; ?>">Read more</a>
          </div>
      <?php endforeach; ?>


  </div>
<?php
  include('inc/footer.php');
?>
