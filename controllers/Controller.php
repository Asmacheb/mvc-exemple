<?php

require_once "models/BddConnect.php";
require_once "models/delete.php";

class Controller {

    public function index() {
        require_once "views/header.php";
    }

    public function affichageTaches() {
        $conn = new BddConnect;
        $data = $conn->readAll();
        
        require_once "views/affichageTaches.php";
    }

    public function affichageInscription() {
        require_once "views/taches.php";
    }

    public function addTaches() {
        if(isset($_POST['taches'])) {
            $tache = $_POST['taches'];
            $conn = new BddConnect;
            $conn->insertBdd($tache);
            header("Location: index.php?page=lecture");
            exit();
        }
    }

    public function delete() {
        if (isset($_GET['type']) && $_GET['type'] == 'supprimer'){ // Vérifiez si type=supprimer est défini dans l'URL
            $id = $_POST['id'];
            $conn = new BddConnect;
            $conn->deleteTache($id);
            // Pas besoin de rediriger ici, puisque le formulaire est déjà soumis à index.php?page=lecture
            exit();
        }
    }
    
    public function modifier() {
        if (isset($_POST['id']) && isset($_POST['taches'])) {
            $id = $_POST['id'];
            $tache = $_POST['taches'];
            $conn = new BddConnect;
            $conn->modifierTache($id, $tache);
            header("Location: index.php?page=lecture");
            exit();
        }
    }

}
?>



