<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @@ -24,227 +13,110 @@
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Plannings - MyNewGes</title>
</head>

<body>
    <nav>
        <?php
        require("student_menu.php")
        ?>
    </nav>
    <section class="home-section">
        <div class="home-content">
            <i class="fa-solid fa-bars"></i>
            <span class="text">Mon Planning</span>
        </div>
    </section>

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
    <script src="assets/js/script.js"></script>
</body>

</html>