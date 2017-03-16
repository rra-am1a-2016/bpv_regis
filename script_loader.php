<?php
   if (isset($_GET["content"])) {
      if ($_GET["content"] == "register") {
         echo "<script src='./js/registration.js'></script>";
      } else if ($_GET["content"] == "login") {
         echo "<script src='./js/login.js'></script>";         
      }
   }
?>