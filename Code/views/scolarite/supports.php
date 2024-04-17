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
    <link rel="stylesheet" href="style.css" />
    <title>Supports - MyNewGes</title>
</head>

<body>
<nav>
<?php require("views/menu.php"); ?>
        <section class="home-section">
            <div class="home-content">
                <i class="fa-solid fa-bars"></i>
                <span class="text">Liste des supports </span>
    <div class="grand-rectangle">
        <img id="lan" src="assets\img\3.png" alt="lan valo">
        <img id="eductive" src="assets\img\1.png" alt="logo ecoles">
        <img id="porte-ouverte" src="assets\img\2.png" alt="porte ouverte">
    </div>

    <div id="telechargements">
        <h2>Documents disponibles :</h2>
        <table>
            <tr>
                <th>Nom doc.</th>
                <th>Type doc.</th>
                <th></th>
            </tr>
            <tr>
                <td>Document Uno</td>
                <td>PDF</td>
                <td><a href="documents/document1.pdf" download>Télécharger</a></td>
            </tr>
            <tr>
                <td>Document Dos</td>
                <td>Word</td>
                <td><a href="documents/document2.docx" download>Télécharger</a></td>
            </tr>
            <tr>
                <td>Document Tres</td>
                <td>Zip</td>
                <td><a href="documents/document3.zip" download>Télécharger</a></td>
            </tr>
            
        </table>
    </div>
</nav>
</body>
</html>