<?php

class BddConnect{
    public $connexion;
    
    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=Tâches"; // Remplacez 'nom_de_votre_base_de_donnees' par le nom réel de votre base de données
        $username = "root";
        $password = "";
        try {
            $this->connexion = new PDO($dsn, $username, $password);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }

    public function readAll() {
        $sql = "SELECT * FROM `taches`";
        $request = $this->connexion->query($sql);
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertBdd($tache) {
        try {
            $sql = "INSERT INTO `taches`(`taches`) VALUES (:tache)";
            $stmt = $this->connexion->prepare($sql);
            $stmt->bindParam(':tache', $tache);
            $stmt->execute();
            echo "Données bien ajoutées à la base de données";
        } catch(PDOException $e) {
            echo "Erreur lors de l'insertion : " . $e->getMessage();
        }
    }

    public function deleteTache($id) {
        $sql = "DELETE FROM `taches` WHERE id = :id"; 
        $stmt = $this->connexion->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        echo 'donnée supprimé';
    }

    public function modifierTache($id, $tache) {
        try {
            $sql = "UPDATE `taches` SET `taches` = :tache WHERE `id` = :id";
            $stmt = $this->connexion->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':tache', $tache);
            $stmt->execute();
            echo "Données bien modifiées dans la base de données";
        } catch(PDOException $e) {
            echo "Erreur lors de la modification : " . $e->getMessage();
        }
    }
}
?>

