<?php
require_once "controllers/Controller.php";
require_once "views/header.php";

$controller = new Controller;

if (isset($_GET['page']) && $_GET['page'] == "lecture") {
    $controller->affichageTaches();
} elseif (isset($_GET['page']) && $_GET['page'] == "taches") {
    $controller->affichageInscription();
} else {
    $controller->index();
}

if (isset($_POST['submit'])) {
    $controller->addTaches();
}
if (isset($_GET['type']) && $_GET['type'] == 'supprimer'){
    $controller->delete();
}

?>