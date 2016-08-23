<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Détails</title>
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
        <h1 class="dash-title">Détails d'une demande</h1>
        <a href="/"><div class="logout"><i class="fa fa-sign-out"></i></div></a>
      </div>
    </nav>

    <div class="detail-container col-md-5">
      <h2>Titre :</h2>
      <p class="title-details"><?= $tache->getTitre();?></p> 
      <hr>
      <h2>Temps estimé :</h2>
      <p><?= $tache->getTmpRealisation();?></p>
      <hr>
      <h2>Description :</h2>
      <p class="description-text"><?= $tache->getDescription();?>.</p>
    </div>

    <div class="chrono-container col-md-6">
      <h2>Temps écoulé :</h2>
      <div class="container-btn">
        <p id="heures">00</p><p class="separator">:</p><p id="minutes">00</p><p class="separator-s">:</p><p id="secondes">00</p><br>
        <button class="btn btn-chrono btn-primary" id="btn-play"><i class="fa fa-play-circle-o"></i></button>
        <button class="btn btn-chrono btn-danger" id="btn-pause"><i class="fa fa-pause-circle-o"></i></button>
        <button class="btn btn-success btn-chrono" id="btn-stop"><i class="fa fa-stop-circle-o"></i></button>
      </div>

      <hr>
      <h2 class="state">Statut :</h2>
      <select name="type" id="select-state" class="form-control state-control">
        <option <?= $tache->getEtat() == 'assigne' ? 'selected' : '' ?> value="assigne">Assigné</option>
        <option id="st-play" <?= $tache->getEtat() == 'encours' ? 'selected' : '' ?> value="encours">En cours</option>
        <option id="st-pause" <?= $tache->getEtat() == 'bloque' ? 'selected' : '' ?> value="bloque" >Bloqué</option>
        <option id="st-stop" <?= $tache->getEtat() == 'termine' ? 'selected' : '' ?> value="termine" >Terminé</option>
      </select>

    </div>

    <script src="js/jquery-3.1.0.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>