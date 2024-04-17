<?php
require_once 'controllers/controller.php';

if (isset($_GET['logout'])) {
    DbLogout();
} elseif (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = htmlspecialchars($_GET["page"]);

    if ($page == 'home') {
        $page = isset($_GET['page']) ? $_GET['page'] : '';
        session_start();
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
    } elseif ($page == 'session') {
        DisplaySession();
    } elseif ($page == 'logout') {
        DbLogout();
    } elseif ($page == 'paneladmin') {
        session_start();
        DisplayPanelAdmin();
    } elseif ($page == 'inscription') {
        DisplayInscription();
    }

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
    }
} else {
    // Rediriger vers la page de connexion si aucune page valide n'est spécifiée
    DisplaySession();
}
