<?php


      $DBhost = "52.60.109.91";
      $DBuser = "db2";
      $DBpass = "password";
      $DBname = "userDB2";

      try{

      $DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
      $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      }catch(PDOException $ex){

      die($ex->getMessage());
      }

        $query = "SELECT * FROM product LIMIT 5";

         $stmt = $DBcon->prepare($query);
         $stmt->execute();

         $userData = array();

         while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

          $userData['AllUsers'][] = $row;
         }

         echo json_encode($userData);
?>
