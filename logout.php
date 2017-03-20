<?php
   // verwijder alle session variables
   session_unset(); 

   // vernietig de session 
   session_destroy();

   // Stuur de gebruiker door naar de homepage
   header("Location: index.php?content=home");
?>