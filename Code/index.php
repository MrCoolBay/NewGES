<?php
require_once 'controllers/controller.php';

if (isset($_GET['logout'])) {
    DbLogout();
} elseif (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = htmlspecialchars($_GET["page"]);

    if ($page == 'home') {
        $page = isset($_GET['page']) ? $_GET['page'] : '';
        DisplayHome();
    } elseif ($page == 'plannings') {
        session_start();
        DisplayPlannings();
    } elseif ($page == 'notes') {
        session_start();
        DisplayNotes();
    } elseif ($page == 'supports') {
        session_start();
        DisplaySupports();
    } elseif ($page == 'offres') {
        session_start();
        DisplayOffer();
    } elseif ($page == 'session') {
        DisplaySession();
    } elseif ($page == 'logout') {
        DbLogout();
    } elseif ($page == 'paneladmin') {
        session_start();
        DisplayPanelAdmin();
    } elseif ($page == 'inscription') {
        DisplayInscription();
    } elseif ($page == 'consultcv'){
        session_start();
        dbConsult();
    }
} elseif (isset($_GET["form"]) && !empty($_GET["form"])) {
    $form = htmlspecialchars_decode($_GET["form"]);
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "login") {
        DbLogin();
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "register") {
        DbRegister();
        DisplayConfRegister();
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "logout") {
        DbLogout();
        DisplaySession();
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "upload") {
        // Récupération du nom et du contenu du fichier depuis $_FILES
        $fileName = $_FILES['file']['name'];
        $fileContent = file_get_contents($_FILES['file']['tmp_name']);

        // Appel de la fonction uploadCV avec les paramètres nécessaires
        uploadCV($fileName, $fileContent);

    }
} else {
    // Rediriger vers la page de connexion si aucune page valide n'est spécifiée
    DisplaySession();
}
