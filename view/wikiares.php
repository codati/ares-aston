<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>WikiAres</title>
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
        <h1 class="main-title">WikiAres</h1>
      </div>
    </nav>
  	<div class="doc-container">
  		<div class="doc-presentation">
        <h2>Présentation</h2>
    			<p>Le site web Ares est un site servant à la gestion des tâches en entreprise. Il permet à l'utilisateur de consulter les tâches qui lui sont assignées, de voir les détails de la demande, le temps qui lui est imparti, et de se chronométrer afin de voir le temps passé sur chaque tâches</p>
    			<p>Pour le chef de projet, ce site permet d'ajouter des demandes, de gérer les assignations, et de voir le temps passé par chacun des employés sur la tâche qui lui est assignée. Il a également la possibilité d'éditer une demande et de consulter le planning personnel de chacun des membres de son équipe.</p>
        </div>

      <div class="doc-utilisation">
    		<h2>Utilisation</h2>

    		<h3>Login</h3>
    			<p>Lors de l'arrivée sur le site, deux choix s'offre à l'utilisateur, en effet il a la possibilité de se connecter, mais en spécifiant bien son rôle dans l'entreprise : Chef de Projet ou Utilisateur. C'est à partir de ce rôle que le site va offrir ou non différentes options à la personne qui se connecte.</p>

          <img class="img-doc" src="images/login-box.png">

    		<h3>Liste des demandes</h3>
    			<p>La liste des demandes est affectée par le rôle de l'utilisateur.</p>
    			<p>L'utilisateur simple va voir apparaître sur cette page l'ensemble des demandes qui lui sont affecté, avec le titre, l'identifiant de la demande, etc... Une seule action est disponible pour lui, il peut consulter le détail de ses demandes</p>
    			<p>Le Chef de Projet quant à lui va voir sur cette page un tableau contenant l'ensemble des tâches qu'il a pu créer, avec trois actions disponibles : l'édition d'une tâche, la consultation de la tâche, et enfin la suppression.</p>

          <img class="img-doc" src="images/liste-demandes.png">

    		<h3>Création / Edition d'une tâche</h3>
    			<p>Le Chef de Projet peut donc ajouter ou éditer des tâches. Pour cela, sur l'ensemble des pages du site, il aura la possibilité d'accéder directement à la création, via un icone en bas à gauche de l'écran.</p>
    			
          <img class="img-doc" src="images/ajouter-tache.png">

    			<p>Pour l'édition il à le choix entre éditer à partir de la liste des demandes, mais également lorsqu'il consulte, via un bouton qui apparaitra encore une fois en bas à gauche de l'écran.</p>
    			
          <img class="img-doc" src="images/editer-tache.png">

    		<h3>Liste des utilisateurs</h3>
    			<p>La liste des utilisateurs est disponnible uniquement pour le Chef de Projet. Sur cette page, accessible via le menu, il retrouvera la liste complète des membres de son équipe, avec la possibilité dans la colonne 'Action' de consulter son planning de travail.</p>

          <img class="img-doc" src="images/list-user.png">

    		<h3>Planning des utilisateurs</h3>
    			<p>L'utilisateur, lors de la connexion, a automatiquement la possibilité de consulter son planning via le menu. Une fois sur cette page, il voit apparaître une liste de tâche jour par jour. La date affiché est la date d'échéance de la tâche, il sait donc directement pour quelle jour et quelle heure une tâche doit être terminé.</p>

    			<p>Le chef de projet accède quant à lui à la page de planning via la liste des utilisateurs, en cliquant sur l'icone 'Action' créé à cet effet.</p>
        </div>
  	</div>
  </body>
</html>
