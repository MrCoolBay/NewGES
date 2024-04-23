<?php
// Inclure le fichier contenant la fonction DbPromoByEcole
require('C:\xampp\htdocs\NewGES\Code\models\model.php');

// Vérifier si l'ID de l'école est spécifié dans la requête GET
if (isset($_GET['id_ecole'])) {
    // Récupérer l'ID de l'école depuis la requête GET
    $id_ecole = $_GET['id_ecole'];

    // Appeler la fonction pour récupérer les promotions en fonction de l'école sélectionnée
    $promos = DbPromoByEcole($id_ecole);

    // Créer un tableau pour stocker les données des promotions
    $promosData = array();

    // Parcourir les promotions récupérées
    foreach ($promos as $promo) {
        // Créer un tableau associatif contenant l'ID et le nom de la promotion
        $promoData = array(
            'id' => $promo['id_promo'], // Suppose que l'ID de la promotion est stocké dans la colonne 'id_promo'
            'name' => $promo['nom_promo'] // Suppose que le nom de la promotion est stocké dans la colonne 'nom_promo'
        );

        // Ajouter les données de la promotion au tableau des données des promotions
        $promosData[] = $promoData;
    }

    // Convertir les données des promotions en JSON
    $promosJson = json_encode($promosData);

    // Envoyer les données des promotions au format JSON
    header('Content-Type: application/json');
    echo $promosJson;
}
