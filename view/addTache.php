<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>AddTache</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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
    
    <div class="login-container">
      <form action="login" method="post">
        <input class="form-control input" type="text" name="titre" placeholder="Titre">
        <textarea  placeholder="Description">
          
        </textarea>
        <p>Role utilisateur</p>
        <button class="login-inline btn btn-success" type="submit">save</button>
      </form>
    </div>
    <script src="js/jquery-3.1.0.js"></script>
  </body>
</html>