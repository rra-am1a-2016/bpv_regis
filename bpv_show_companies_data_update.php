<?php
   session_start();

   // Maak contact met de database
   include("connect_db.php");

   // Dit is de query die het veld status update...
   $query = "UPDATE `bpv_companies` SET `status` = '" . $_POST["status"] . "'
             WHERE `student_number` = '" . $_SESSION["id"] . "' 
             AND   `urlCompany` = '" . $_POST["urlCompany"] . "'";

   //echo $query;
   // De query wordt afgevuurd op de database...
   $result = mysqli_query($conn, $query);
?> 