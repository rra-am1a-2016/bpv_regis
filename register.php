<div class="page-header">
        <h1>Registratie</h1>
</div>

<p class="lead">U kunt zich hier registreren</p>
<p>
<form class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Studentnummer: </label>
    <div class="col-sm-4">
      <input type="number" class="form-control" id="leerlingnummer" placeholder="voor uw studentnummer in">
    </div>
    <div class="col-sm-6">
    </div>
  </div>  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button id="btn_regis" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</p>
<div class="alert alert-success" role="alert" id="alert_is_activated">
  Uw account is succesvol geactiveerd. Klik <a href="index.php?content=login" class="alert-link">hier</a> om in te loggen
</div>
<div class="alert alert-danger" role="alert" id="alert_already_activated">
  Uw account is al geactiveerd. U wordt doorgestuurd naar de login pagina.
  Klik <a href="index.php?content=login" class="alert-link">hier</a> om nu in te loggen.
</div>