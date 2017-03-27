<?php
   session_start();
   // Maak contact met de database
   include("connect_db.php");

   // Zet de JSON string om naar een associatief array
   $data = json_decode($_GET["jsonstr"], true);

   $query = "SELECT *
             FROM `bpv_companies` 
             WHERE `student_number` = '" . $_SESSION["id"] . "'
             AND   `urlCompany` = " . $data["urlCompany"];

   $result = mysqli_query($conn, $query);

   if ( mysqli_num_rows($result) == 0 ) {

      // Bouw de query op
      $query = "INSERT INTO `bpv_companies` (`student_number`,
                                             `nameCompany`,
                                             `phoneNumberCompany`,
                                             `nameContact`, 
                                             `mobilePhoneNumber`, 
                                             `address`, 
                                             `addressNumber`, 
                                             `city`, 
                                             `postalCode`, 
                                             `urlCompany`, 
                                             `emailContact`, 
                                             `description`) 
               VALUES                      ('" . $_SESSION["id"] . "', 
                                             '" . $data["nameCompany"] . "', 
                                             '" . $data["phoneNumberCompany"] . "', 
                                             '" . $data["nameContact"] . "', 
                                             '" . $data["mobilePhoneNumber"] . "', 
                                             '" . $data["address"] . "', 
                                             '" . $data["addressNumber"] . "', 
                                             '" . $data["city"] . "', 
                                             '" . $data["postalCode"] . "', 
                                             '" . $data["urlCompany"] . "', 
                                             '" . $data["emailContact"] . "', 
                                             '" . $data["description"] . "');";

      $result = mysqli_query($conn, $query);

      if ($result) {
         echo "succes_record_saved";
      } else {
         echo "error_record_not_saved";
      }
   } else {
      echo "error_company_exists";
   }
?>