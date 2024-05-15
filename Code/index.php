<?php
require_once 'controllers/controller.php';

if (isset($_GET['logout'])) {
    DbLogout();
} elseif (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = htmlspecialchars($_GET["page"]);

    if ($page == 'studentdash') {
        $page = isset($_GET['page']) ? $_GET['page'] : '';
        DisplayHome();
    } elseif ($page == 'plannings') {
        DisplayPlannings();
    } elseif ($page == 'notes') {
        DisplayNotes();
    } elseif ($page == 'supports') {
        DisplaySupports();
    } elseif ($page == 'offres') {
        DisplayOffer();
    } elseif ($page == 'session') {
        DisplaySession();
    } elseif ($page == 'logout') {
        DbLogout();
    } elseif ($page == 'admindash') {
        DisplayPanelAdmin();
    } elseif ($page == 'interdash') {
        DisplayPanelInter();
    } elseif ($page == 'inscriptionstudent') {
        DisplayInscriptionStudent();
    } elseif ($page == 'inscriptioninter') {
        DisplayInscriptionInter();
    } elseif ($page == 'consultcv') {
        dbConsult();
    } elseif ($page == 'documents') {
        DisplayDoc();
    } elseif ($page == 'ajoutnote') {
        DisplayAjoutNote();
    } elseif ($page == 'ciriculum') {
        session_start();
        DisplayCv();
    } elseif ($page == 'partenaires') {
        session_start();
        DisplayPartenaires();
    } else if ($page == 'trombino') {
        session_start();
        DisplayTrombino();
    }
} elseif (isset($_GET["form"]) && !empty($_GET["form"])) {
    $form = htmlspecialchars_decode($_GET["form"]);
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "login") {
        DbLogin();
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "registerstudent") {
        DbRegisterStudent();
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "registerinter") {
        DbRegisterInter();
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "logout") {
        DbLogout();
        DisplaySession();
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "upload") {
        // Récupération du nom et du contenu du fichier depuis $_FILES
        $fileName = $_FILES['file']['name'];
        $fileContent = file_get_contents($_FILES['file']['tmp_name']);

        // Appel de la fonction uploadCV avec les paramètres nécessaires
        uploadCV($fileName, $fileContent);
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "add") {
        AddNote();
    }
} else {
    // Rediriger vers la page de connexion si aucune page valide n'est spécifiée
    DisplaySession();
}
