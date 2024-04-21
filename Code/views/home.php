<!DOCTYPE html>
<html lang="fr">

<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
  header("Location: index.php?page=session");
  exit;
}
?>

<?php $name = $_SESSION['name'] ?>
<?php $surname = $_SESSION['surname'] ?>
<?php $school = $_SESSION['school'] ?>
<?php $pdp = $_SESSION['pdp'] ?>

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
        <i id="icon" class="fa-solid fa-bars"></i>
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
          <?php
          // Récupération du nom de l'école depuis la session
          $ecole = $school;

          // Affichage de l'iframe en fonction du nom de l'école
          if ($ecole == 'ESGI') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/esginformatique/embed" frameborder="0" scrolling="no"></iframe>';
          } elseif ($ecole == 'MODART') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/modart___/embed" frameborder="0" scrolling="no"></iframe>';
          } elseif ($ecole == 'ESUPCOM') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/esupcom_france/embed" frameborder="0" scrolling="no"></iframe>';
          } elseif ($ecole == 'EFAB') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/efab_france/embed" frameborder="0" scrolling="no"></iframe>';
          } elseif ($ecole == 'EIML') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/eiml_paris/embed" frameborder="0" scrolling="no"></iframe>';
          } elseif ($ecole == 'PPASPORT') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/ppa_sport/embed" frameborder="0" scrolling="no"></iframe>';
          } elseif ($ecole == 'PPA') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/ppabuisnessschool/embed" frameborder="0" scrolling="no"></iframe>';
          } elseif ($ecole == 'ISFJ') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/isfjournalisme/embed" frameborder="0" scrolling="no"></iframe>';
          } elseif ($ecole == 'EFET STUDIO CREA') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/efet_studio_crea/embed" frameborder="0" scrolling="no"></iframe>';
          } elseif ($ecole == 'EFET PHOTO') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/efet_photo_officiel/embed" frameborder="0" scrolling="no"></iframe>';
          } elseif ($ecole == 'MAESTRIS') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/maestris.bts/embed" frameborder="0" scrolling="no"></iframe>';
          } elseif ($ecole == 'ISA') {
            echo '<iframe class="instagram-iframe back" src="https://www.instagram.com/ecole_isa/embed" frameborder="0" scrolling="no"></iframe>';
          }
          ?>

        </div>
      </div>


      <?php require("footer.php") ?>
    </section>
  </nav>
  <script src="assets/js/script.js"></script>
</body>

</html>