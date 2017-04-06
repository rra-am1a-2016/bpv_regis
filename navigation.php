<?php
   session_start();
   if ( isset($_SESSION["content"])) {
      echo $_SESSION["content"];
   } else {
      echo "home";
   }
?>