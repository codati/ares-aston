<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Liste des demandes</title>
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
        <h1 class="dash-title">Liste des demandes</h1>
        <a href="/"><div class="logout"><i class="fa fa-sign-out"></i></div></a>
        <?php if (isset($_SESSION['chefdeprojet'])) : ?>
          <a href="addTache" class="add-tache"><i class="fa fa-plus"></i></a>
        <?php endif; ?>

      </div>
    </nav>

    <div class="table-responsive">
      <table rules="all" class="table"> 
        <tr> 
          <th>Numéro de demande</th>
          <th>Statut</th>
          <th>Echéance</th>
          <th>Assigné à</th>
          <th>Titre</th> 
         <!-- <th>Date de création</th>-->
          <th>Détails</th>
        </tr> 
        <?php foreach ($taches as $tache): ?>
          <tr> 
            <td><?= $tache->getId() ?></td>
            <td><?= $tache->getEtat() ?></td>
            <td><?= $tache->getEcheance() ?></td>
            <td><?= $tache->getutilisateur()->getLastname() . ' ' . $tache->getutilisateur()->getFirstname() ?></td>
            <td><?= $tache->getDescription() ?></td>
             <!-- <td>22/08/2016</td>-->
            <td class="edit"><a href="details?id=<?= $tache->getId() ?>"><i class="fa fa-info-circle details-icon"></i></a>
            <?php if (isset($_SESSION['chefdeprojet'])) : ?>
              <a href="edit?id=<?= $tache->getId() ?>"><i class="fa fa-pencil-square-o details-icon"></i></a></td>
           <?php endif; ?>
              </td>
          </tr>
        <?php endforeach; ?>
      </table> 
    </div>

    <script src="js/jquery-3.1.0.js"></script>
  </body>
</html>