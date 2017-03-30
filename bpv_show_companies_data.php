<?php
   //echo "Succes er is contact met een andere pagina op de server (asynchroon)";
   session_start();

   // Maak contact met de database
   include("connect_db.php");

   $query = "SELECT * FROM `bpv_companies`
             WHERE `student_number` = '" . $_SESSION["id"] . "'";

   echo $query; exit();



?> 