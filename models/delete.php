<?php


// class Delete {
//     protected $pdo;

//     public function __construct() {
//         $dsn = 'mysql:host=localhost;dbname=Tâches';
//         $user = 'root';
//         $password = '';

//         try {
//             $this->pdo = new PDO($dsn, $user, $password);
//             $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         } catch (PDOException $e) {
//             echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
//             exit();
//         }
//     }

//     public function deleteTache($id) {
//         $sql = "DELETE FROM `taches` WHERE id = :id"; 
//         $stmt = $this->pdo->prepare($sql);
//         $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
//         try {
//             $stmt->execute();
//             return true;
//         } catch (PDOException $e) {
//             echo 'Erreur de suppression de la tâche : ' . $e->getMessage();
//             exit();
//         }
//     }}
    
?>