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
    <title>Offres - MyNewGes</title>
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
                        <th>Date</th>
                        <th>Intitulé du poste</th>
                        <th>Entreprise</th>
                        <th>Début</th>
                        <th>Type de poste</th>
                        <th>Secteur</th>
                        <th>Région</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>12/04</td>
                        <td>Administrateur Windows / Exchange</td>
                        <td>e-Progest</td>
                        <td>Dès que possible</td>
                        <td>Contrat d'apprentissage </td>
                        <td>Informatique</td>
                        <td>Champagne Ardennes</td>
                        <td><a href="Ressources/test.txt" download> Fiche de poste
                                <form action="Ressources/docOffres.php" method="post" enctype="multipart/form-data">
                                    <label for="file">Déposez votre CV :</label>
                                    <input type="file" id="file" name="file" accept=".pdf,.doc,.docx,">
                                    <input type="submit" value="Envoyer">
                        </td>
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