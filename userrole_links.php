<?php
   if (isset($_SESSION["userrole"])) {
      switch ($_SESSION["userrole"]) {
         case "student":
            echo "<li><a href='./index.php?content=bpv_record'>BPV bedrijf toevoegen</a></li>";
            break;
      }
      echo "<li><a href='./index.php?content=logout'>uitloggen</a></li>";

   } else {
      echo "<li><a href='./index.php?content=register'>Registratie</a></li>";
      echo "<li><a href='./index.php?content=login'>Inloggen</a></li>";
   }
?>