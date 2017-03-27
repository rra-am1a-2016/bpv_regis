<?php
   function sanitize($text)
   {
      // Haalt spaties, \n, returns, enz.. links en rechts weg
      $text = trim($text);
      // Verwijdert html en php tags
      $text = strip_tags($text);
      // escaped kritische tekens zoals ' en "
      $text = addslashes($text);
      return $text;
   }
?>