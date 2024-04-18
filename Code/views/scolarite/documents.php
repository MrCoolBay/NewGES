<!DOCTYPE html>
<html lang="fr">

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
    <title>Documents - MyNewGes</title>
</head>

<body>
    <nav>
        <?php require("views/menu.php"); ?>
        <section class="home-section">
            <div class="home-content">
                <i class="fa-solid fa-bars"></i>
                <span class="text">Liste des offres </span>
            </div>
            <br>
            <div class="offre">
                <table border="3">
                    <tr>
                        <th><i class="fa-regular fa-folder-open"></i> Catégorie</th>
                        <th><i class="fa-regular fa-hourglass-start"></i> Dernière mise à jour</th>
                        <th><i class="fa-regular fa-billboard"></i> Intitulé</th>
                        <th><i class="fa-regular fa-file-arrow-down"></i> Téléchargement</th>
                    </tr>
                    <tr>
                        <td>CALENDRIER</td>
                        <td>12/04/2024</td>
                        <td><a href="../Ressources/FicheDePoste/eProgest.pdf" download="eProgest.pdf"> CALENDRIER 23-24 B1 </td>
                        <td><a href="../Ressources/FicheDePoste/eProgest.pdf" download="eProgest.pdf"><i class="fas fa-download"></i></td>
                    </tr>
                    <tr>
                        <td>CALENDRIER</td>
                        <td>11/07/2023</td>
                        <td><a href="../Ressources/FicheDePoste/eProgest.pdf" download="eProgest.pdf"> CALENDRIER 23-24 B1 </td>
                        <td><a href="../Ressources/FicheDePoste/eProgest.pdf" download="eProgest.pdf"><i class="fas fa-download"></i></td>
                    </tr>
                    <tr>
                        <td>HANDICAP</td>
                </table>
            </div>
    </nav>
    <script src="assets/js/script.js"></script>

</body>

</html>