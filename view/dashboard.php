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
        <h1 class="dash-title">Liste des demandes</h1>
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
            <a href="planning"><li class="item-menu col-md-6">Planning de la semaine</li></a>
          <?php endif; ?>
        </ul>
      </div>
    </nav>

    <div class="table-responsive">
      <?php if ($messages['editTache']) : ?>
        <div class="message-edit bg-success"><p>La demande a bien été mise à jour.</p></div>
      <?php endif; ?>

      <?php if ($messages['addTache']) : ?>
        <div class="message-create bg-success"><p>La demande a bien été créée.</p></div>
      <?php endif; ?>

      <?php if ($messages['deleteTache']) : ?>
        <div class="message-create bg-success"><p>La demande a bien été supprimée.</p></div>
      <?php endif; ?>

      <table rules="all" class="table"> 
        <tr> 
          <th>Numéro de demande</th>
          <th>Statut</th>
          <th>Echéance</th>
          <th>Assigné à</th>
          <th>Titre</th> 
          <th>Temps estimé</th>
          <th>Temps de réalisation</th>
          <th>Actions</th>
        </tr> 
        <?php foreach ($taches as $tache): ?>
          <tr class="<?= $tache->getEtatDisplay() === "Bloqué"? "tache-bloque": "" ?><?= $tache->getEtatDisplay() === "En cours"? "tache-encours": "" ?><?= $tache->getEtatDisplay() === "Terminé"? "tache-termine": "" ?>"> 
            <td><?= $tache->getId() ?></td>
            <td><?= $tache->getEtatDisplay() ?></td>
            <td><?= $tache->getEcheance() ?></td>
            <td><?= $tache->getutilisateur()->getLastname() . ' ' . $tache->getutilisateur()->getFirstname() ?></td>
            <td><?= $tache->getTitre() ?></td>
            <td><?= $tache->getTmpRealisationDisplay() ?></td>
            <td><?= empty($tache->getTmpReelDisplay()) ? "Non commencée" : $tache->getTmpReelDisplay() ?></td>
             <!-- <td>22/08/2016</td>-->
            <td class="edit"><a href="details?id=<?= $tache->getId() ?>"><i class="fa fa-info-circle details-icon"></i></a>
              <?php if (isset($_SESSION['chefdeprojet'])) : ?>
                <a href="editTache?id=<?= $tache->getId() ?>"><i class="fa fa-pencil-square-o details-icon"></i></a><a href="deleteTache?id=<?= $tache->getId() ?>"><i class="fa fa-trash-o details-icon"></i></a></td>
                <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </table> 
    </div>

    <script src="js/jquery-3.1.0.js"></script>
  </body>
</html>