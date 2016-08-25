<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Liste des demandes</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="icon" type="image/jpeg" href="images/logo.jpg" />

    <script src="js/jquery-3.1.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>
  </head>
  <body ng-app="ares" ng-controller="dashboard as dashboard">
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
        <tr ng-repeat="tache in taches" ng-class="{'tache-bloque': tache.etat === 'bloque','tache-encours' :tache.etat === 'enCours' ,'tache-termine' :tache.etat ==='termine'  }"> 
          <td>{{ tache.id}}</td>
          <td>{{ tache.etatDisplay}}</td>
          <td>le {{ tache.echeance | date: 'dd-MM-yyyy à HH:mm'}}</td>
          <td>{{ tache.utilisateur.lastName +' '+tache.utilisateur.firstName }}</td>
          <td>{{ tache.titre}}</td>
          <td>{{dashboard.calculTime( tache.tmpRealisation ) }}</td>
          <td>{{ tache.tmpReel  ? dashboard.calculTimeSeconde(tache.tmpReel) :"Non commencée"}}</td>
           <!-- <td>22/08/2016</td>-->
          <td class="edit"><a ng-href="details?id={{ tache.id }}"><i class="fa fa-info-circle details-icon"></i></a>
            <?php if (isset($_SESSION['chefdeprojet'])) : ?>
              <a ng-href="editTache?id={{ tache.id }}"><i class="fa fa-pencil-square-o details-icon"></i></a><a ng-href="deleteTache?id={{ tache.id }}"><i class="fa fa-trash-o details-icon"></i></a>
              <?php endif; ?>
          </td>
        </tr>
      </table> 
    </div>
    <script type="text/javascript">
      angular.module('ares', [])
              .controller('dashboard', function ($scope, $interval) {
                $scope.taches = <?= json_encode($taches, true); ?>;
                console.log($scope.taches);
                for (var tacheIndex in $scope.taches) {
                  var tache = $scope.taches[tacheIndex];
                  if (tache.tmpReel !== null)
                  {
                    tache.tmpReel *= 60;
                    if (tache.etat === 'enCours') {
                      tache.tmpReel += Math.floor(Date.now() / 1000) - tache.dateStartTimesTamp;
                    }
                  }

                }
                this.calculTime = function (time)
                {
                  var h = Math.floor(time / 60);
                  var m = time % 60;
                  h = h < 10 ? '0' + h : h;
                  m = m < 10 ? '0' + m : m;
                  return  h + ':' + m;
                }
                this.calculTimeSeconde = function (time)
                {

                  var s = Math.abs(time % 60);
                  if (time < 0)
                  {
                    m = Math.abs(Math.ceil(time / 60) % 60);
                    h = Math.abs(Math.ceil(time / 3600));

                  } else {
                    m = Math.floor(time / 60) % 60;
                    h = Math.floor(time / 3600);

                  }
                  s = s < 10 ? 0 + '' + s : s;
                  m = m < 10 ? 0 + '' + m : m;
                  h = h < 10 ? 0 + '' + h : h;
                  return  h + ':' + m + ':' + s;
                }
                $interval(function () {
                  for (var tacheIndex in $scope.taches) {
                    var tache = $scope.taches[tacheIndex];
                    if (tache.etat === 'enCours') {
                      tache.tmpReel++;

                    }
                  }

                }, 1000);



              });
    </script>
  </body>
</html>