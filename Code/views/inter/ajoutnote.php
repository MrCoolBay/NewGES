<?php

// Assurez-vous que l'utilisateur est identifié
if (!isset($_SESSION['intervenant_id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: index.php?page=session");
    exit;
}

$intervenant_id = $_SESSION['intervenant_id'];

$students = DbStudentByInter($intervenant_id);
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
        require("views/intervenant_menu.php")
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
                            <select name="student_id" id="student_id" required>
                                <option value="">Sélectionnez un étudiant</option>
                                <?php foreach ($students as $student) : ?>
                                    <option value="<?php echo $student['id_student']; ?>">
                                        <?php echo $student['name_student'] . ' ' . $student['surname_student']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <select name="id_matiere" id="id_matiere" required>
                                <option value="">Sélectionnez une matière</option>
                                <?php
                                // Appel de la fonction pour récupérer la liste des matières avec les informations de l'intervenant
                                $matieres = DbMatiereInterID();

                                // Parcourir chaque matière et afficher les options
                                foreach ($matieres as $matiere) {
                                    // Concaténer le nom de l'intervenant avec le nom de la matière pour créer une option lisible
                                    $optionLabel = "{$matiere['nom_matiere']} ({$matiere['name_intervenant']} {$matiere['surname_intervenant']})";
                                    echo "<option value=\"{$matiere['id_matiere']}\">$optionLabel</option>";
                                }
                                ?>
                            </select>

                            <input type="hidden" id="id_intervenant" name="id_intervenant" value="<?= $_SESSION['intervenant_id'] ?>" />
                            <input type="number" placeholder="Note" id="note" name="note" required />
                            <textarea type="text" placeholder="Information" id="info_note" name="info_note" required></textarea>
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