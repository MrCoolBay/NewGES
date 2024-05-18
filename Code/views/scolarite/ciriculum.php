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
    <link rel="stylesheet" href="style.css" />
    <title>Ciriculum Vitae - MyNewGes</title>
</head>

<body>
    <nav>
        <?php if (isset($_SESSION['student_id'])) {
            require("views/student_menu.php");
        } elseif (isset($_SESSION['intervenant_id'])) {
            require("views/intervenant_menu.php");
        } ?>
        <section class="home-section">
            <div class="home-content">
                <i class="fa-solid fa-bars"></i>
                <span class="text">Mes supports de cours</span>
            </div>
            <br>
            <div class="tophead">
                <p>
                    <span>Pour tout problème concernant les supports de cours ( fichier manquant...), veuillez voir avec votre attachée de promotion ou l'enseignant de la matière concernée.</span>
                </p>
            </div>
            <div class="telechargements">
                <table border="3">
                    <tr>
                        <th><i class="fa-regular fa-folder-open"></i> Nom du document</th>
                        <th><i class="fa-regular fa-file"></i> Type du document</th>
                        <th><i class="fa-regular fa-file-arrow-down"></i> Lien de téléchargement</th>
                    </tr>
                    <tr>
                        <td>Document Uno</td>
                        <td>PDF</td>
                        <td><a href="../Ressources/projetannuel.pdf" download="projetannuel.pdf"><i class="fas fa-download"></i></a></td>
                    </tr>
                    <tr>
                        <td>Document Dos</td>
                        <td>Texte</td>
                        <td><a href="../Ressources/test.txt" download="test.txt"><i class="fas fa-download"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Document Tres</td>
                        <td>Zip</td>
                        <td><a href="#" download><i class="fas fa-download"></i></a>
                        </td>
                    </tr>

                </table>
            </div>
    </nav>
    <script src="assets/js/script.js"></script>
</body>

</html>