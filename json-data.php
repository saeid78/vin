<?php


      $DBhost = "test.com";
      $DBuser = "db2";
      $DBpass = "password";
      $DBname = "test";

      try{

      $DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
      $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      }catch(PDOException $ex){

      die($ex->getMessage());
      }

        $query = "SELECT * FROM Products LIMIT 5";

         $stmt = $DBcon->prepare($query);
         $stmt->execute();

         $userData = array();

         while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

          $userData['AllUsers'][] = $row;
         }

         echo json_encode($userData);
?>
