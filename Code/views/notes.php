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
    <title>Notes - MyNewGes</title>
</head>

<body>

    <nav>
        <?php require("menu.php"); ?>
        <section class="home-section">
            <div class="home-content">
                <i class="fa-solid fa-bars"></i>
                <span class="text">Mes notes</span>
            </div>
            <table border='1'>
                <tr>
                    <th>Note</th>
                    <th>Date</th>
                    <th>Information</th>
                </tr>

                <?php foreach ($data as $note) { ?>
                    <tr>
                        <td><?php echo $note['note1']; ?></td>
                        <td><?php echo $note['note2']; ?></td>
                        <td><?php echo $note['note3']; ?></td>
                        <td><?php echo $note['date_note']; ?></td>
                        <td><?php echo $note['information_note']; ?></td>
                    </tr>
                <?php } ?>
            </table>
            </table>
        </section>
    </nav>


    <script src="assets/js/script.js"></script>
</body>

</html>