<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="icon" type="image/jpeg" href="images/logo.jpg" />
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img alt="Ares" class="logo-a" src="images/logo.jpg">
          </a>
        </div>
        <h1 class="main-title">Plateforme ARES</h1>
      </div>
    </nav>
    <a href="wikiares" class="doc-link">Documentation <i class="fa fa-book"></i></a>

    <div class="login-container">
      <form action="login" method="post">
        <input class="form-control input" type="text" name="login" placeholder="Identifiant" value="<?= $login ?>">
        <input class="form-control input" type="password" name="password" placeholder="Mot de passe"  value="<?= $password ?>">
        <p>Role utilisateur</p>
        <select name="type" class="form-control" >
          <option <?= 'chefdeprojet' == $type ? 'selected' : '' ?> value="chefdeprojet">Chef de Projet</option> 
          <option  <?= 'utilisateur' == $type ? 'selected' : '' ?>  value="utilisateur" >Utilisateur simple</option>
        </select>
        <button class="login-inline btn btn-success" type="submit">Se connecter</button>
      </form>
    </div>
    <script src="js/jquery-3.1.0.js"></script>
  </body>
</html>