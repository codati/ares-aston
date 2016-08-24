<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Liste des demandes</title>
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
        <h1 class="dash-title">Planning de la semaine</h1>
        <a href="<?= Routeur::getInstence()->getBaseUrl() ?>"><div class="logout"><i class="fa fa-sign-out"></i></div></a>
        <?php if (isset($_SESSION['chefdeprojet'])) : ?>
          <a href="addTache" class="add-tache"><i class="fa fa-plus"></i></a>
        <?php endif; ?>
      </div>
      <div class="menu-user">
        <ul class="liste-menu">
          <a href="dashboard"><li class="item-menu col-md-6">Liste des demandes</li></a>
          <?php if (isset($_SESSION['chefdeprojet'])) : ?>
            <a href="userboard"><li class="item-menu col-md-6">Liste des utilisateurs</li></a>
          <?php endif; ?>
          <?php if (isset($_SESSION['utilisateur'])) : ?>
            <a href="planning"><li class="item-menu col-md-6 active">Planning de la semaine</li></a>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
    <div class="table-responsive">
      <table rules="all" class="table table-taches"> 
        <tr> 
          <th>Lundi</th>
          <th>Mardi</th>
          <th>Mercredi</th>
          <th>Jeudi</th>
          <th>Vendredi</th>
          <th>Samedi</th>
        </tr> 
        <tr>
          <td>
            <?php foreach ($taches[0] as $tache) : ?>
              <a href="details?id=<?= $tache->getId() ?>" class="cell-link" style="text-decoration:none"><div class="cell-div"><?= $tache->getEcheanceDateTime()->format('H:i') ?><br><?= $tache->getTitre() ?></div></a>
            <?php endforeach; ?>
          </td>
          <td>
            <?php foreach ($taches[1] as $tache) : ?>
              <a href="details?id=<?= $tache->getId() ?>" class="cell-link" style="text-decoration:none"><div class="cell-div"><?= $tache->getEcheanceDateTime()->format('H:i') ?><br><?= $tache->getTitre() ?></div></a>
            <?php endforeach; ?>
          </td>
          <td>
            <?php foreach ($taches[2] as $tache) : ?>
              <a href="details?id=<?= $tache->getId() ?>" class="cell-link" style="text-decoration:none"><div class="cell-div"><?= $tache->getEcheanceDateTime()->format('H:i') ?><br><?= $tache->getTitre() ?></div></a>
            <?php endforeach; ?>
          </td>
          <td>
            <?php foreach ($taches[3] as $tache) : ?>
              <a href="details?id=<?= $tache->getId() ?>" class="cell-link" style="text-decoration:none"><div class="cell-div"><?= $tache->getEcheanceDateTime()->format('H:i') ?><br><?= $tache->getTitre() ?></div></a>
            <?php endforeach; ?>
          </td>
          <td>
            <?php foreach ($taches[4] as $tache) : ?>
              <a href="details?id=<?= $tache->getId() ?>" class="cell-link" style="text-decoration:none"><div class="cell-div"><?= $tache->getEcheanceDateTime()->format('H:i') ?><br><?= $tache->getTitre() ?></div></a>
            <?php endforeach; ?>
          </td>
          <td>
            <?php foreach ($taches[5] as $tache) : ?>
              <a href="details?id=<?= $tache->getId() ?>" class="cell-link" style="text-decoration:none"><div class="cell-div"><?= $tache->getEcheanceDateTime()->format('H:i') ?><br><?= $tache->getTitre() ?></div></a>
              <?php endforeach; ?>
          </td>
        </tr>
      </table> 
    </div>

    <script src="js/jquery-3.1.0.js"></script>
  </body>
</html>