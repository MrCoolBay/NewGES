<?php
// Assurez-vous que l'utilisateur est identifié
session_start();
if (!isset($_SESSION['user_id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: index.php?page=session");
    exit;
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style-paneladmin.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Panel Intervenant - MyNewGES</title>
</head>

<body>

    <nav>
        <?php
        require("menu.php")
        ?>
        <section class="home-section">
            <div class="home-content">
                <i id="icon" class="fa-solid fa-bars"></i>
                <span class="text">Panel Intervenant</span>
            </div>
            <div class="bienvenue">
                <h1>Bienvenue sur le panel Intervenant de MyNewGES</h1>
                <p>
                    Vous pouvez ici ajouter des notes, ajouter des documents pour les élèves et pleins d'autres choses !
                </p>
            </div>
        </section>
        <script src="assets/js/script.js"></script>
</body>

</html>