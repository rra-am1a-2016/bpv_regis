<?php
   include("./connect_db.php");

   if ( isset($_POST["submit"]))
   {
      $sql = "SELECT * FROM `users` WHERE `id` = ".$_POST["id"];

      $result = mysqli_query($conn, $sql);

      $record = mysqli_fetch_array($result, MYSQLI_ASSOC);

      if ( $_SESSION["userrole"] == 'admin')
      {
         $old_password = $record["password"];
      }
      else
      {
         $old_password = sha1($_POST["old_password"]);
      }

      if ( strcmp($record["password"], $old_password) == 0)
      {
         $sql = "UPDATE `users` 
                 SET `password` = '".sha1($_POST["password"])."'
                 WHERE `id` = ".$_POST["id"];

         $result = mysqli_query($conn, $sql);
 
         if ($result)
         {
            echo "Uw password is succesvol gewijzigd";
            header("Refresh: 3; url=index.php?content=login_form");
         }
         else
         {
            echo "Er is iets mis gegaan. Probeer opnieuw";
            header("Refresh: 3; url=index.php?content=change_password");
         }
      }
      else
      {
         echo "Uw oude password klopt niet. Probeer het opnieuw";
         header("Refresh: 4; url=index.php?content=change_password&id=".$_POST["id"]);
      }

   }

   if ( isset($_GET["id"]))
   {
      // Selecteer het record op basis van een id 
      $sql = "SELECT * FROM `users` WHERE `id` = ".$_GET["id"];

      // Vuur de query af op de database
      $result = mysqli_query($conn, $sql);

      $record = mysqli_fetch_array($result, MYSQLI_ASSOC);

      var_dump($record);
      $formtekst = "";
      $formtekst .=  "<form class='form-horizontal' action='index.php?content=change_password' method='post' >
                        <div class='form-group'>
                                <label class='control-label col-sm-2'>wachtwoord: </label> 
                                <div class='col-sm-4'>
                                        <input type='password'
                                               name='password' 
                                               required 
                                               class='form-control' 
                                               placeholder='wachtwoord' 
                                               id='password'>
                                </div>
                                <div class='col-sm-6'>
                                </div>
                        </div>
                        <div class='form-group'>
                                <label class='control-label col-sm-2'>Tik opnieuw in: </label> 
                                <div class='col-sm-4'>
                                        <input type='password' 
                                               name='verification_password' 
                                               required class='form-control' 
                                               placeholder='wachtwoord'
                                               id='verification_password'>
                                </div>
                                <div class='col-sm-6'>
                                </div>
                        </div>  
                        <div class='form-group'>
                                <div class='col-sm-2 col-sm-10'>
                                        <input type='submit' 
                                               name='submit' 
                                               required 
                                               class='btn btn-default' 
                                               value='wijzig'
                                               id='verification_password'>
                                        <input type='hidden' name='id' value='".$_GET["id"]."'>
                                        <input type='hidden' name='pw' value='".$_GET["pw"]."'>
                                        
                                </div>
                        </div>
           </form>";

      echo $formtekst;

}
