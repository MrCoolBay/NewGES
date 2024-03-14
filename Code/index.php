<?php
require("controllers/controller.php");
if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = htmlspecialchars($_GET["page"]);
    if ($page == "home") {
        DisplayHome();
    } else if ($page == "partenaires") {
        DisplayPartenaires();
    } else if ($page == "connexion") {
        DisplayConnexion();
    } else if ($page == "plannings") {
        DisplayPlannings();
    } else if ($page == "notes") {
        DisplayNotes();
    }
} else {
    DisplayHome();
}
