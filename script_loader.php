<?php
   if (isset($_GET["content"])) {
      echo "<script src='./js/" . $_GET["content"] . ".js'></script>";
   }
?>