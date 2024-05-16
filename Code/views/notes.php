<!DOCTYPE html>
<html lang="fr">

<?php


if (!isset($_SESSION['student_id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: index.php?page=session");
    exit;
}

$total = 0;
$count = 0;
foreach ($data as $note) {
    $total += $note['note'];
    $count++;
}
$moyenne = $total / $count;

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
        require("student_menu.php");
        ?>
        <section class="home-section">
            <div class="home-content">
                <i class="fa-solid fa-bars"></i>
                <span class="text">Mes notes</span>
            </div>
            <div class="tophead">
                <br>
                <p>Les notes de 0/20 qui apparaissent dans cette rubrique sont attribuées provisoirement dans l'attente de vérification ultérieure des justificatifs d'absence.
                </p>
                <p><span>En cas d'erreur concernant vos notes ou absences, veuillez contacter votre attachée de promotion.</span> </p>
                <br>
            </div>
            <div class="note">
                <table border="3">
                    <tr>
                        <th><i class="fas fa-briefcase"></i> Matière</th>
                        <th><i class="fas fa-briefcase"></i> Intervenant</th>
                        <th><i class="fa-regular fa-square-1"></i>Note</th>
                        <th><i class="fa-regular fa-calendar-days"></i> Date</th>
                    </tr>
                    <?php foreach ($data as $note) { ?>
                        <tr>
                            <td><?php echo $note['nom_matiere']; ?></td>
                            <td><?php echo $note['name_intervenant'], " ", $note['surname_intervenant']; ?></td>
                            <td class="notes">
                                <?php echo $note['note']; ?>
                            </td>
                            <td><?php echo $note['date_note']; ?></td>
                        </tr>
                    <?php } ?>

                </table>

            </div>
            <div class="moyenne">
                Votre moyenne est de : <?php echo $moyenne; ?>
                <?php
                if ($moyenne >= 0 && $moyenne <= 5) {
                    echo "<div>😢</div>";
                } elseif ($moyenne > 5 && $moyenne <= 10) {
                    echo "<div>😔</div>";
                } elseif ($moyenne > 10 && $moyenne <= 15) {
                    echo "<div>😊</div>";
                } elseif ($moyenne > 15 && $moyenne <= 20) {
                    echo "<div>😄</div>";
                }
                ?>
            </div>
            <?php require("footer.php") ?>
        </section>
    </nav>


    <script src="assets/js/script.js"></script>
</body>

</html>