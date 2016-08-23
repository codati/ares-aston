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
      </div>
    </nav>

    <div class="detail-container col-md-5">
      <h2>Titre :</h2>
      <p class="title-details"><?= $tache->getTitre();?></p>
      <h2>Description :</h2>
      <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur urna non tellus feugiat sodales. Quisque diam mauris, luctus ac libero sit amet, elementum vehicula metus. Mauris neque mi, dignissim quis elit eget, porta iaculis neque. Suspendisse potenti. Quisque tempus lacinia odio quis aliquam. Phasellus condimentum turpis et ipsum mattis sollicitudin. Duis ac gravida mauris, sit amet suscipit lorem. Fusce varius dolor ac felis tristique cursus.</p>
    </div>

    <div class="chrono-container col-md-6">
      <h2>Temps estimé :</h2>
      <p>1:50</p>
      <h2>Temps écoulé :</h2>
      <p class="chrono">00:00:00</p>
      <button class="btn btn-primary col-md-2"><i class="fa fa-play-circle-o"></i></button>
      <button class="btn btn-danger col-md-2"><i class="fa fa-pause-circle-o"></i></button>
      <button class="btn btn-success col-md-2"><i class="fa fa-stop-circle-o"></i></button>
      <h2>Statut :</h2>
      <p class="state">En cours, Bloqué, Terminé</p>

    </div>

    <script src="js/jquery-3.1.0.js"></script>
  </body>
</html>