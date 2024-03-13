<?php
require("controllers/controller.php");
if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = htmlspecialchars($_GET["page"]);
    if ($page == "home") {
        DisplayHome();
    } else if ($page == "partenaires") {
        DisplayPartenaires();
    }
} else {
    DisplayHome();
}
