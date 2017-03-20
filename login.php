<form class="form-signin">
        <h2 class="form-signin-heading">Inloggen</h2>
        <label for="inputStdNumber" class="sr-only">Student nummer</label>
        <input type="number" id="inputStdNumber" class="form-control" placeholder="student nummer" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn_login">Gaan!</button>
</form>
<div class="alert alert-danger" role="alert" id="error_id">
  Het door u ingevoerde studentnummer is niet bekent. Probeer het opnieuw.
  <a href="index.php?content=login" class="alert-link">Klik</a> hier om opnieuw in te loggen.
</div>
<div class="alert alert-danger" role="alert" id="error_pw">
  Het door u ingevoerde password is niet correct. Probeer het opnieuw.
  <a href="index.php?content=login" class="alert-link">Klik</a> hier om opnieuw in te loggen.
</div>
<div class="alert alert-warning" role="alert" id="error_activate">
  U heeft uw account nog niet geactiveerd. Bekijk uw activatiemail en klik op de link.
</div>
