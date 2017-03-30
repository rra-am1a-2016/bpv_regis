<?php
   //echo "Succes er is contact met een andere pagina op de server (asynchroon)";
   session_start();

   // Maak contact met de database
   include("connect_db.php");

   // Dit is de query die de gegevens uit de database haalt...
   $query = "SELECT * FROM `bpv_companies`
             WHERE `student_number` = '" . $_SESSION["id"] . "'";

   // De query wordt afgevuurd op de database...
   $result = mysqli_query($conn, $query);

   // We maken een leeg array aan genaamd $records...
   $records = array();

   // We checken of de database geen foutmelding geeft...
   if ( $result ) {
      /* Wanneer de database geen foutmelding geeft, 
       * gaan we checken of er 1 of meer records zijn gevonden
       * in de database. Als er 1 of meer zijn gevonden... */
      if ( mysqli_num_rows($result) > 0 ) {
         // Dan stoppen we alle gevonden records uit de database in een array...
         $records = mysqli_fetch_all($result, MYSQLI_ASSOC);
         // Helemaal voorin het array $records voegen we 
         // nog een tekst "succes_records_found" toe
         array_unshift($records, "succes_records_found");
      } else {
         // Als we geen records hebben gevonden in de database
         // dan voegen we alsnog een string "no_records_found" toe aan het 
         // lege array
         array_unshift($records, "no_records_found");
      }
   } else {
      // Als $result de waarde false heeft is er een database error opgetreden
      // en stoppen we de tekst "error_database" in het lege array
      array_unshift($records, "error_database");
   }

   // Uiteindelijk zetten we het niet lege array om in een 
   // JSON-string.
   $jsonStr = json_encode($records);

   // De JSON-sting wordt op de pagina weergegeven en is opvraagbaar
   // met xhr.responseText
   echo $jsonStr;
?> 