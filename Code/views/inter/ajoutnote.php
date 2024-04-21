<?php
session_start();
// Assurez-vous que l'utilisateur est identifié
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
    <link rel="stylesheet" href="assets/css/style-ajoutnote.css">
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
        require("views/menu.php")
        ?>
        <section class="home-section">
            <div class="home-content">
                <i id="icon" class="fa-solid fa-bars"></i>
                <span class="text">Ajout Notes</span>
            </div>
            <div class="form">
                <section class="wrapper">
                    <div class="form signup">
                        <form action="index.php?form=add" method="post">
                            <select name="id_user" id="id_user" required>
                                <option name="id_user" id="id_user" value="">Sélectionnez un élève</option>
                                <?php
                                // Boucle à travers la liste des utilisateurs et affiche-les dans les options
                                foreach (DbUsers() as $utilisateur) {
                                    echo "<option value=\"{$utilisateur['id_user']}\">{$utilisateur['name']} {$utilisateur['surname']}</option>";
                                }
                                ?>
                            </select>
                            <input type="text" placeholder="Nom de la matière" id="matiere" name="matiere" required />
                            <input type="text" placeholder="<?= $_SESSION['name'], ' ', $_SESSION['surname'] ?>" value="<?= $_SESSION['name'], ' ', $_SESSION['surname'] ?>" id="intervenant" name="intervenant" required />
                            <input type="number" placeholder="Note" id="note1" name="note1" required />
                            <textarea type="text" placeholder="Information" id="info_note1" name="info_note1" required></textarea>
                            <div class="button">
                                <input type="submit" value="Ajoutez">
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <?php require("views/footer.php") ?>
        </section>
        <script src="assets/js/script.js"></script>
</body>

</html>