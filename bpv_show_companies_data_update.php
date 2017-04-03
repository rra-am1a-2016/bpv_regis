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
   
   // We maken een leeg array aan genaamd $records...
   $records = array();

   // We checken of de database geen foutmelding geeft...
   if ( $result ) {
      /* Wanneer de database geen foutmelding geeft*/      
         array_unshift($records, "succes_update");
   } else {
         array_unshift($records, "error_update");
   }
  
   // Uiteindelijk zetten we het niet lege array om in een 
   // JSON-string.
   $jsonStr = json_encode($records);

   // De JSON-sting wordt op de pagina weergegeven en is opvraagbaar
   // met xhr.responseText
   echo $jsonStr;
?> 