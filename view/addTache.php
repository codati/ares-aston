<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Ajouter une demande</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="icon" type="image/jpeg" href="images/logo.jpg" />
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="dashboard">
            <img alt="Ares" class="logo-a" src="images/logo.jpg">
          </a>
        </div>
        <h1 class="main-title">Création d'une demande</h1>
        <a href="<?= Routeur::getInstence()->getBaseUrl() ?>"><div class="logout"><i class="fa fa-sign-out"></i></div></a>
      </div>
    </nav>

    <div class="form-container">
      <form action="addTache" method="post">
        <input class="form-control input" type="text" name="titre" placeholder="Titre" maxlength="80" required>
        <p>Description détaillé de la demande : </p>
        <textarea  class="form-control" name="description" placeholder="Description" cols="87" rows="8" maxlength="88" required></textarea><br>

        <p>Date d'échéance : </p>
        <input class="form-control" type="date" name="echeance" class="echeance" required><br>
        <p>à quelle heure ? (si nécessaire)</p>
        <input class="form-control" type="time" name="hour"><br>

        <p>Temps prévisionel (en minute) : </p>
        <input class="form-control" type="number" name="tmp-prevision" min="0" step="5" required><br>

        <p>Assigné à :</p>
        <select class="form-control" name="utilisateur" required>
          <?php foreach ($utilisateurs as $utilisateur) : ?>
            <option value="<?= $utilisateur->getId() ?>"><?= $utilisateur->getLastname() . ' ' . $utilisateur->getFirstname() ?> </option>
          <?php endforeach ?>

        </select><br>

        <button class="login-inline btn btn-success" type="submit">Créer la demande</button>
      </form>
    </div>
    <script src="js/jquery-3.1.0.js"></script>
  </body>
</html>