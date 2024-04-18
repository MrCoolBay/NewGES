<!DOCTYPE html>
<html lang="fr">

<?php


if (!isset($_SESSION['user_id'])) {
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
    <title>Notes - MyNewGes</title>
</head>

<body>
    <nav>
        <?php
        require("menu.php");
        ?>
        <section class="home-section">
            <div class="home-content">
                <i class="fa-solid fa-bars"></i>
                <span class="text">Mes notes</span>
            </div>
            <div class="tophead">
                <br>
                <p>Les notes de 0/20 qui apparaissent dans cette rubrique sont attribuées provisoirement dans l'attente de vérification ultérieure des justificatifs d'absence. <span>En cas d'erreur concernant vos notes ou absences, veuillez contacter votre attachée de promotion.</span> </p>
                <br>
            </div>
            <div class="note">
                <table border="3">
                    <tr>
                        <th> <i class="fas fa-briefcase"></i> Matière</th>
                        <th> <i class="fas fa-briefcase"></i> Intervenant</th>
                        <th><i class="fa-regular fa-square-1"></i> CC 1</th>
                        <th><i class="fa-regular fa-square-2"></i> CC 2</th>
                        <th><i class="fa-regular fa-flag-checkered"></i> Partiel</th>
                        <th><i class="fa-regular fa-calendar-days"></i> Date</th>
                        <th><i class="fa-regular fa-circle-info"></i> Information</th>
                        <th><i class="fa-regular fa-calculator-simple"></i> Moyenne</th>
                    </tr>

                    <?php foreach ($data as $note) { ?>
                        <tr>
                            <td><?php echo $note['matiere']; ?></td>
                            <td><?php echo $note['intervenant']; ?></td>
                            <td class="notes">
                                <?php echo $note['note1']; ?>

                            </td>
                            <td class="notes"><?php echo $note['note2']; ?></td>
                            <td class="notes"><?php echo $note['partiel']; ?></td>
                            <td><?php echo $note['date_note']; ?></td>
                            <td class="notes"><?php echo $note['moyenne']; ?></td>

                        </tr>
                    <?php } ?>
                    <tr>
                        <th class="notes">Moyenne</th>

                        <th><?php echo $note['moyenne_total'] ?></th>
                    </tr>
                </table>
            </div>
        </section>
    </nav>


    <script src="assets/js/script.js"></script>
</body>

</html>