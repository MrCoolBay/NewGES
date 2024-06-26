<!DOCTYPE html>
<html lang="fr">

<?php
session_start();

if (!isset($_SESSION['student_id']) && !isset($_SESSION['intervenant_id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: index.php?page=session");
    exit;
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Plannings - MyNewGes</title>
</head>

<body>
    <nav>
        <?php
        if (isset($_SESSION['student_id'])) {
            require("views/student_menu.php");
        } elseif (isset($_SESSION['intervenant_id'])) {
            require("views/intervenant_menu.php");
        }
        ?>

        <section class="home-section">
            <div class="home-content">
                <i class="fa-solid fa-bars"></i>
                <span class="text">Mon Planning</span>
            </div>
            <div class="planning">
                <?php
                // Tableau associatif pour stocker les tâches pour chaque jour de la semaine
                $semainier = array(
                    "Lundi" => array(
                        "8:00 9:30" => "",
                        "9:45 11:15" => "",
                        "11:30 13:00" => "",
                        "14:00 15:30" => "",
                        "15:45 17:15" => "",
                        "17:30 19:00" => "",
                    ),
                    "Mardi" => array(
                        "8:00 9:30" => "",
                        "9:45 11:15" => "",
                        "11:30 13:00" => "",
                        "14:00 15:30" => "",
                        "15:45 17:15" => "",
                        "17:30 19:00" => "",
                    ),
                    "Mercredi" => array(
                        "8:00 9:30" => "",
                        "9:45 11:15" => "",
                        "11:30 13:00" => "",
                        "14:00 15:30" => "",
                        "15:45 17:15" => "",
                        "17:30 19:00" => "",
                    ),
                    "Jeudi" => array(
                        "8:00 9:30" => "",
                        "9:45 11:15" => "",
                        "11:30 13:00" => "",
                        "14:00 15:30" => "Projet annuel",
                        "15:45 17:15" => "",
                        "17:30 19:00" => "",
                    ),
                    "Vendredi" => array(
                        "8:00 9:30" => "Mathématiques",
                        "9:45 11:15" => "Mathématiques",
                        "11:30 13:00" => "",
                        "14:00 15:30" => "",
                        "15:45 17:15" => "",
                        "17:30 19:00" => "",
                    ),
                    "Samedi" => array(
                        "8:00 9:30" => "",
                        "9:45 11:15" => "",
                        "11:30 13:00" => "",
                        "14:00 15:30" => "",
                        "15:45 17:15" => "",
                        "17:30 19:00" => "",

                    ),
                    "Dimanche" => array(
                        "8:00 9:30" => "",
                        "9:45 11:15" => "",
                        "11:30 13:00" => "",
                        "14:00 15:30" => "",
                        "15:45 17:15" => "",
                        "17:30 19:00" => "",

                    )
                );

                // Vérifier si le formulaire a été soumis
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Mettre à jour les tâches avec les données soumises
                    foreach ($semainier as $jour => $horaires) {
                        foreach ($horaires as $heure => $matiere) {
                            $semainier[$jour][$heure] = $_POST[$jour][$heure];
                        }
                    }
                }

                // Afficher le formulaire
                echo "<div class='planning'>";
                echo "<form method='post'>";
                foreach ($semainier as $jour => $horaires) {
                    echo "<div class='jour'>";
                    echo "<h3>$jour :</h3>";
                    foreach ($horaires as $heure => $matiere) {
                        echo "<label>$heure :</label>";
                        echo "<input type='text' name='$jour" . "[$heure]' value='$matiere'><br>";
                    }
                    echo "</div>";
                }
                echo "<input type='submit' value='Enregistrer'>";
                echo "</form>";
                echo "</div>";

                ?>
            </div>


            <?php require("footer.php") ?>
        </section>
    </nav>
    <script src="assets/js/script.js"></script>
</body>

</html>