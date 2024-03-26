<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <title>Accueil - MyNewGes</title>
</head>

<body>
  <nav>
    <?php
    require("menu.php")
    ?>

    <section class="home-section">
      <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">MyNewGES</span>
      </div>

    </section>
  </nav>

  <!-- Le grand rectangle avec des images -->
  <div class="grand-rectangle">
    <img src=".\NewGES\Code\assets\img\cathedrale.jpg" alt="Image 1">
    <img src=".\NewGES\Code\assets\img\eductive.jpg" alt="Image 2">
    <img src="chemin/vers/image3.jpg" alt="Image 3">
    <!-- Ajoutez d'autres images selon vos besoins -->
  </div>

  <script src="assets/js/script.js"></script>
</body>

</html>
