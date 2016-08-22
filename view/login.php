<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../public/styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <h1>Plateforme ARES</h1>
    <div class="login-container">
      <form action="login.php" method="post">
        <p>Login</p>
        <input class="login-inline input" type="text" name="login">
        <p>Mot de passe</p>
        <input class="login-inline input" type="password" name="password">
        <p>Role utilisateur</p>
        <select name="select" class="selectrole">
          <option value="chefdeprojet">Chef de Projet</option> 
          <option value="utilisateur" selected>Utilisateur simple</option>
        </select>
        <button class="login-inline connection" type="submit">Se connecter</button>
      </form>
    </div>
  </body>
</html>