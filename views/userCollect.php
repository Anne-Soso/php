<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <label for="login">Votre adresse email</label>
  <input type="email" name="login" id="login">
  <label for="password">Votre mot de passe</label>
  <input type="password" name="password" id="password">
  <input type="hidden" name="a" value="check">
  <input type="hidden" name="e" value="user">
  <input type="submit" value="Identifiez-vous">
</form>
