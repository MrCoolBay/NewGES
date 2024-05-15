<?php
// Inclure le fichier contenant la fonction DbMatiereByEcole
require('../models/model.php');

// Vérifier si l'ID de l'école est spécifié dans la requête GET
if (isset($_GET['id_ecole'])) {
    // Récupérer l'ID de l'école depuis la requête GET
    $id_ecole = $_GET['id_ecole'];

    try {
        // Appeler la fonction pour récupérer les matieres en fonction de l'école sélectionnée
        $matieres = DbMatiereByEcole($id_ecole);

        // Créer un tableau pour stocker les données des matieres
        $matieresData = array();

        // Parcourir les promotions récupérées
        foreach ($matieres as $matiere) {
            // Créer un tableau associatif contenant l'ID et le nom de la matiere
            $matieresData = array(
                'id' => $matiere['id_promo'], // Suppose que l'ID de la matiere est stocké dans la colonne 'id_matiere'
                'name' => $matiere['nom_promo'] // Suppose que le nom de la matiere est stocké dans la colonne 'nom_matiere'
            );

            // Ajouter les données de la promotion au tableau des données des matieres
            $matieresData[] = $matieresData;
        }

        // Convertir les données des promotions en JSON
        $matieresJson = json_encode($matieresData);

        // Envoyer les données des promotions au format JSON
        header('Content-Type: application/json');
        echo $matieresJson;

        // Débogage - Afficher les données des matieres
        // echo $matieresJson;
    } catch (Exception $e) {
        // Afficher l'erreur
        echo 'Une erreur s\'est produite : ' . $e->getMessage();
    }
}
