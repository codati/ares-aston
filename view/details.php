<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Détails</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="icon" type="image/jpeg" href="images/logo.jpg" />
    <script src="js/scripts.js"></script>
    <script src="js/jquery-3.1.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>

  </head>
  <body ng-app="ares" ng-controller="details as details">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="dashboard">
            <img alt="Ares" class="logo-a" src="images/logo.jpg">
          </a>
        </div>
        <h1 class="dash-title">Détails d'une demande</h1>
        <a href="<?= Routeur::getInstence()->getBaseUrl() ?>"><div class="logout"><i class="fa fa-sign-out"></i></div></a>
      </div>
    </nav>

    <?php if (isset($_SESSION['chefdeprojet'])) : ?>
      <a href="editTache?id=<?= $tache->getId() ?>" class="edit-tache"><i class="fa fa-pencil-square-o"></i></a>
    <?php endif; ?>

    <div id="test" class="detail-container col-md-5">
      <h2>Titre :</h2>
      <p class="title-details"><?= $tache->getTitre(); ?></p> 
      <hr>
      <h2>Temps estimé :</h2>
      <p> {{ time }}</p>
      <hr>
      <h2>Description :</h2>
      <p class="description-text"><?= $tache->getDescription(); ?>.</p>
    </div>
    <div class="chrono-container col-md-6">
      <h2>Temps écoulé :</h2>
      <div class="container-btn">
        <div id="div-chrono" ng-class="{ negatif :timeChrono.total < 0 }">
          <span class ="operateur" ng-show="timeChrono.total < 0"> - </span> <p id="heures">{{ timeChrono.h }}</p><p class="separator">:</p><p id="minutes">{{ timeChrono.m }}</p><p class="separator-s">:</p><p id="secondes">{{ timeChrono.s }}</p>
        </div><br>


        <button class="btn btn-chrono btn-primary" id="btn-play" ng-click="status = 'enCours'"><i class="fa fa-play-circle-o"></i></button>
        <button class="btn btn-chrono btn-danger" id="btn-pause" ng-click="status = 'bloque'"><i class="fa fa-pause-circle-o"></i></button>
        <button class="btn btn-success btn-chrono" id="btn-stop" ng-click="status = 'termine'"><i class="fa fa-stop-circle-o"></i></button>

        <hr>
        <h2 class="state">Statut :</h2>
        <select name="type" id="select-state" class="form-control state-control" ng-model="status">
          <option disabled value="assignee">Assigné</option>
          <option id="st-play" value="enCours" >En cours</option>
          <option id="st-pause" value="bloque" >Bloqué</option>
          <option id="st-stop" value="termine" >Terminé</option>
        </select>
      </div>
    </div>

    <script type="text/javascript" src="js/scripts.js"></script>

    <script type="text/javascript">

      angular.module('ares', [])
              .controller('details', function ($scope, $interval, $http) {
                $scope.status = '<?= $tache->getEtat() ?>';

                $scope.timeChrono = [];
                $scope.timeChrono.total = <?= $tache->getTmpRealisation() - $tache->getTmpReel(); ?> * 60;
                var h = Math.floor(<?= $tache->getTmpRealisation(); ?> / 60);
                var m = <?= $tache->getTmpRealisation(); ?> % 60;
                h = h < 10 ? '0' + h : h;
                m = m < 10 ? '0' + m : m;
                $scope.time = h + ':' + m;
                $interval(chrono, 1000);
                chrono();
                start = false;
                $scope.$watch('status', function (etat) {
                  if (start)
                  {

                    $http.post('statusChange', {idTache:<?= $tache->getId(); ?>, etat: etat, tmpReel: <?= $tache->getTmpRealisation(); ?> - Math.floor($scope.timeChrono.total / 60)});
                  }
                  start = true;
                });

                function chrono() {

                  $scope.timeChrono.s = Math.abs($scope.timeChrono.total % 60);

                  if ($scope.timeChrono.total < 0)
                  {
                    $scope.timeChrono.m = Math.abs(Math.ceil($scope.timeChrono.total / 60) % 60);
                    $scope.timeChrono.h = Math.abs(Math.ceil($scope.timeChrono.total / 3600));

                  } else {
                    $scope.timeChrono.m = Math.floor($scope.timeChrono.total / 60) % 60;
                    $scope.timeChrono.h = Math.floor($scope.timeChrono.total / 3600);

                  }
                  $scope.timeChrono.s = $scope.timeChrono.s < 10 ? 0 + '' + $scope.timeChrono.s : $scope.timeChrono.s;
                  $scope.timeChrono.m = $scope.timeChrono.m < 10 ? 0 + '' + $scope.timeChrono.m : $scope.timeChrono.m;
                  $scope.timeChrono.h = $scope.timeChrono.h < 10 ? 0 + '' + $scope.timeChrono.h : $scope.timeChrono.h;

                  if ($scope.timeChrono.total === 0) {
                    notifyMe();
                  }

                  if ($scope.status === 'enCours')
                  {
                    $scope.timeChrono.total--;
                  }

                }

                function notifyMe() {
                  if (Notification.permission !== "granted")
                    Notification.requestPermission();
                  else {
                    var notification = new Notification('Dépassement du temps imparti !', {
                      icon: 'images/logo.jpg',
                      body: "Vous avez dépassez le temps prévu à : " + <?= $tache->getTmpRealisation(); ?> + " minutes !"
                    });
                  }
                }

              });



    </script>

  </body>
</html>