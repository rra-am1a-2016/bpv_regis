<?php
   
   if (isset($_GET["stdNumber"]))
   {
     include("connect_db.php");
      
      $query = "SELECT * FROM `users` WHERE `id` = " . $_GET["stdNumber"];

      $result = mysqli_query($conn, $query);

      $record = mysqli_fetch_array($result, MYSQLI_ASSOC);

     
     if ($result)
      {
          $emailaddress = $_GET["stdNumber"]."@student.mboutrecht.nl";
          $firstName = $record["firstName"];
          $infix = $record["infix"];
          $lastname = $record["lastName"];
          $subject = "Activatie account";
          $last_id = $_GET["stdNumber"];
          $tempPassword = "geheim";

          $messageHtml = "<!DOCTYPE html>
                          <html>
                            <head>
                                <title>Page Title</title>
                                <style>
                                  body
                                  {
                                      font-family: Verdana, Arial;
                                      font-size: 1em;
                                      color: rgb(30, 30, 30);
                                  }
                                </style>
                            </head>
                            <body>
                            <h3>Beste ".$firstName." ".$infix." ".$lastname.",</h3>".
                                "<p>Bedankt voor het registreren, klik op onderstaande link<p>".
                                "<p><a href='http://localhost/2016-2017/am1a/Blok%203/web/bpvregis/index.php?content=activate&id=".
                                $last_id."&pw=".$tempPassword."'>activatielink</a></p><p>om uw account te activeren</p>". 
                                "<p>Met vriendelijke groet,</p>". 
                                "<p>admin</p>
                            </body>
                          </html>";
          
          $headers = "Content-Type: text/html; charset=UTF-8"."\r\n";
          $headers .= "Cc: adruijter@fopmail.com, hans@testmail.com, frans@realmail.com"."\r\n";
          $headers .= "Bcc: rra@mboutrecht.nl"."\r\n";
          $headers .= "From: adruijter@gmail.com";        
        
          //mail($emailaddress, $subject, $messageHtml, $headers);
          echo "Hallo dit is een test";
      }
      else {
           echo "Registreer opnieuw, er is iets misgegaan";
      }            
   }
?>