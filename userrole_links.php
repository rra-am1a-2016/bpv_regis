<?php
   if (isset($_SESSION["userrole"])) {
      switch ($_SESSION["userrole"]) {
         case "student":
            echo "<li><a href='./index.php?content=bpv_record'>BPV bedrijf toevoegen</a></li>";
            echo "<li><a href='./index.php?content=bpv_show_companies'>Ingevoerde BPV bedrijven</a></li>";
            break;
         case "bpvco":
            echo "<li><a href='./index.php?content=bpv_std_view'>BPV student overzicht</a></li>";
            break;
      }
      echo "<li><a href='./index.php?content=logout'>
                  <span class='glyphicon glyphicon-log-out'></span>uitloggen</a></li>";      
   } else {
      echo "<li><a href='./index.php?content=register'>Registratie</a></li>";
      echo "<li><span class='glyphicon glyphicon-log-in'>
                  </span><a href='./index.php?content=login'>Inloggen
                </a>
            </li>";
   }
?>