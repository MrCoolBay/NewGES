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
    <title>Offres - MyNewGes</title>
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
                <span class="text">Liste des offres </span>
            </div>
            <br>
            <div class="tophead">
                <p>
                    Cette page regroupe l'ensemble des offres de stage diffusées par votre école ou partagées par les étudiants.
                </p>
                <p>
                    <span>
                        Vous pouvez également consulter les offres de notre partenaire Jpo-d en suivant <a href="https://ges.jpo-d.com/" target="_blank">ce lien.</a>
                    </span>
                </p>
            </div>
            <br>
            <div class="offre">
                <table border="3">
                    <tr>
                        <th class="top-left"><i class="fa-regular fa-calendar-days"></i> Date</th>
                        <th><i class="fa-regular fa-user-tie-hair"></i> Intitulé du poste</th>
                        <th><i class="fa-regular fa-buildings"></i> Entreprise</th>
                        <th><i class="fa-regular fa-hourglass-start"></i> Début</th>
                        <th><i class="fa-regular fa-billboard"></i> Type de poste</th>
                        <th><i class="fa-regular fa-square-person-confined"></i> Secteur</th>
                        <th><i class="fa-regular fa-earth-europe"></i> Région</th>
                        <th class="top-right"><i class="fa-regular fa-excavator"></i> Action</th>
                    </tr>
                    <tr>
                        <td>12/04</td>
                        <td>Administrateur Windows / Exchange</td>
                        <td>e-Progest</td>
                        <td>Dès que possible</td>
                        <td>Contrat d'apprentissage </td>
                        <td>Informatique</td>
                        <td>Champagne Ardennes</td>
                        <td><a href="../Ressources/FicheDePoste/eProgest.pdf" download="../Ressources/FicheDePoste/eProgest.pdf"> Fiche de poste <br><br>
                                <form action="index.php?form=upload" method="post" enctype="multipart/form-data">
                                    <label for="file">Déposez votre CV :</label><br>
                                    <input type="file" id="file" name="file" accept=".pdf,.doc,.docx,">
                                    <input class="send" type="submit" value="Envoyer">
                                </form>
                        </td>
                    </tr>
                    <tr>
                        <td>09/04</td>
                        <td>Alternance - Gestionnaire en maintenance et support informatique (H/F)</td>
                        <td>PlURIAL NOVILIA</td>
                        <td>Septembre 2024</td>
                        <td>Contrat d'apprentissage </td>
                        <td>Informatique</td>
                        <td>Non communiqué</td>
                        <td><a href="../Ressources/FicheDePoste/plurial.pdf" download="../Ressources/FicheDePoste/plurial.pdf"> Fiche de poste <br><br>
                                <form action="index.php?form=upload" method="post" enctype="multipart/form-data">
                                    <label for="file">Déposez votre CV :</label><br><br>
                                    <input type="file" id="file" name="file" accept=".pdf,.doc,.docx,"><br><br>
                                    <input class="send" type="submit" value="Envoyer">
                                </form>
                    </tr>
                    <tr>
                        <td>09/04</td>
                        <td>alternant(e) en informatique</td>
                        <td>HAFFNER ENERGY</td>
                        <td>Dès que possible</td>
                        <td>Contrat d'apprentissage </td>
                        <td>Informatique</td>
                        <td>Non communiqué</td>
                        <td><a href="../Ressources/FicheDePoste/HAFFNER.pdf" download="../Ressources/FicheDePoste/HAFFNER.pdf"> Fiche de poste <br><br>
                                <form action="index.php?form=upload" method="post" enctype="multipart/form-data">
                                    <label for="file">Déposez votre CV :</label><br><br>
                                    <input type="file" id="file" name="file" accept=".pdf,.doc,.docx,"><br><br>
                                    <input class="send" type="submit" value="Envoyer">
                                </form>
                    </tr>
                    <tr>
                        <td>21/02</td>
                        <td>Développeur Web</td>
                        <td>DÉPARTEMENT DE LA MARNE</td>
                        <td>Avril 2024</td>
                        <td>Contrat d'apprentissage </td>
                        <td>Informatique</td>
                        <td>CHAMPAGNE ARDENNE</td>
                        <td><a href="../Ressources/FicheDePoste/HAFFNER.pdf" download="../Ressources/FicheDePoste/HAFFNER.pdf"> Fiche de poste <br><br>
                                <form action="index.php?form=upload" method="post" enctype="multipart/form-data">
                                    <label for="file">Déposez votre CV :</label><br><br>
                                    <input type="file" id="file" name="file" accept=".pdf,.doc,.docx,"><br><br>
                                    <input class="send" type="submit" value="Envoyer">
                                </form>
                    </tr>
                </table>
            </div>
            <?php require("views/footer.php") ?>
        </section>
    </nav>
    <script src="assets/js/script.js"></script>
</body>

</html>