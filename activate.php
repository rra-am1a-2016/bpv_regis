<?php
   include("./connect_db.php");

   if ( isset($_POST["submit"]))
   {
      $sql = "SELECT * FROM `users` WHERE `id` = ".$_POST["id"];

      $result = mysqli_query($conn, $sql);

      $record = mysqli_fetch_array($result, MYSQLI_ASSOC);

    
      $old_password = $_POST["pw"];

      if ( !strcmp($record["password"], $old_password))
      {

         if ( !strcmp($_POST["password"], $_POST["verification_password"]))
         {
                $sql = "UPDATE `users` 
                        SET `password` = '".sha1($_POST["password"])."',
                            `activate` = 'true'
                        WHERE `id` = ".$_POST["id"];

                $result = mysqli_query($conn, $sql);
        
                if ($result)
                {
                echo "Uw password is succesvol gewijzigd";
                header("Refresh: 3; url=index.php?content=login");
                }
         }
         else
         {
            echo "U heeft twee vershillende passwords ingevoerd, probeer opnieuw";
            header("Refresh: 3; url=index.php?content=activate");
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

      //var_dump($record);
      $formtekst = "<p class='lead'>Kies een wachtwoord</p>";
      $formtekst .=  "<form class='form-horizontal' action='index.php?content=activate' method='post' >
                        <div class='form-group'>
                                <label class='control-label col-sm-2'>wachtwoord:</label> 
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
                                <label class='control-label col-sm-2'>Tik opnieuw in:</label> 
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
                                <label class='control-label col-sm-2'></label>                                
                                <div class='col-sm-4'>
                                        <input type='submit' 
                                               name='submit' 
                                               required 
                                               class='btn btn-default' 
                                               value='wijzig'
                                               id='verification_password'>
                                        
                                        
                                </div>
                                <div class='col-sm-6'>
                                        <input type='hidden' name='id' value='".$_GET["id"]."'>
                                        <input type='hidden' name='pw' value='".$_GET["pw"]."'>
                                </div>
                        </div>
           </form>";

      echo $formtekst;

}
