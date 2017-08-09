<?php

 require_once('config/db.php');

 $query = 'SELECT * FROM Products LIMIT 5';

 $result = mysqli_query($conn, $query);

 $wins= mysqli_fetch_all($result, MYSQLI_ASSOC);

 //var_dump($wins);

 mysqli_free_result($result);
 

 mysqli_close($conn);


 ?>
