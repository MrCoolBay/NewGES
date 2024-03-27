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
  <title>Accueil - MyNewGes</title>
</head>

<body>
  <nav>
    <?php
    require("menu.php")
    ?>

    <section class="home-section">
      <div class="home-content">
        <i id="icon" class="fa-regular fa-bars"></i>
        <span class="text">MyNewGES</span>
      </div>
      <div class="grand-rectangle">
        <img id="lan" src="assets\img\3.png" alt="lan valo">
        <img id="eductive" src="assets\img\1.png" alt="logo ecoles">
        <img id="porte-ouverte" src="assets\img\2.png" alt="porte ouverte">

      </div>
      <div class="instagram-card" id="card">
        <div class="card-inner" id="cardInner">
          <iframe class="instagram-iframe front" src="https://www.instagram.com/eductive_reims/embed" frameborder="0" scrolling="no"></iframe>
          <iframe class="instagram-iframe back" src="https://www.instagram.com/esginformatique/embed" frameborder="0" scrolling="no"></iframe>
        </div>
      </div>



    </section>
  </nav>
  <script src="assets/js/script.js"></script>
</body>

</html>