<?php
   //echo "Succes er is contact met een andere pagina op de server (asynchroon)";
   session_start();

   // Maak contact met de database
   include("connect_db.php");

   $query = "SELECT * FROM `bpv_companies`
             WHERE `student_number` = '" . $_SESSION["id"] . "'";

   //echo $query; exit();

   $result = mysqli_query($conn, $query);

   $records = array();
   if ( $result ) {
      if ( mysqli_num_rows($result) > 0 ) {
         $records = mysqli_fetch_all($result, MYSQLI_ASSOC);
         var_dump($records);
      } else {
         echo "no_records_found";
      }
   } else {
      echo "error_database";
   }



?> 