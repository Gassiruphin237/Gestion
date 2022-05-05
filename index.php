<?php
    include_once '_functions/functions.php';
    //include_once 'views/error_view.php';
// Définition de la page courante
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}
//   if($_GET[$page]=$page.'.php'){
//       var_dump($_GET[$page]);

//     header("location: error");

//   }
// Tableau contenant toutes les pages
$allPages = scandir('controllers/');
//var_dump($allPages);
// Vérification de l'existence !de la page
if (in_array($page.'_controller.php', $allPages)) {

    // Connexion à la base de données
    include_once '_config/config.php';

    // Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

} else {

    // Inclusion de la page erreur
    include_once 'models/error_model.php';
    include_once 'controllers/error_controller.php';
    include_once 'views/error_view.php';

}