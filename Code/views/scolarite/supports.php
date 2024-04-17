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
    <title>Supports - MyNewGes</title>
</head>

<body>
<nav>
<?php require("views/menu.php"); ?>
        <section class="home-section">
            <div class="home-content">
                <i class="fa-solid fa-bars"></i>
                <span class="text">Liste des supports </span>
            </div>
            <br>
    <div class="telechargements">
        <table border="3">
            <tr>
                <th>Nom du document</th>
                <th>Type du document</th>
                <th>Télécharger</th>
            </tr>
            <tr>
                <td>Document Uno</td>
                <td>PDF</td>
                <td><a href="Ressources/projet annuel.pdf" download>Télécharger</a></td>
            </tr>
            <tr>
                <td>Document Dos</td>
                <td>Texte</td>
                <td><a href="Ressources/test.txt" download>Télécharger</a></td>
            </tr>
            <tr>
                <td>Document Tres</td>
                <td>Zip</td>
                <td><a href="#" download>Télécharger</a></td>
            </tr>
            
        </table>
    </div>
</nav>
<script src="assets/js/script.js"></script>
</body>
</html>