<!DOCTYPE html>
<html lang="fr">

<?php
session_start();

// if (!isset($_SESSION['user_id'])) {
//   // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
//   header("Location: index.php?page=session");
//   exit;
// }
?>


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/style-connexion.css" />
  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <title>Connexion - MyNewGES</title>
</head>

<body>

  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="assets/img/campus/campus.png" alt="">
        <div class="text">
          <span class="text-1">Bienvenue sur le <br> Réseau Skolae</span>
          <span class="text-2">Connectez-vous</span>
        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Se connecter
          </div>
          <div class="img">
            <img src="assets/img/mynewges.png" alt="logomyges">
          </div>
          <form action="index.php?form=login" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" for="email" placeholder="Entrez votre email" id="email" name="email" required>
              </div>
              <div class="input-box">
                <i class="fa-solid fa-lock-keyhole"></i>
                <input type="password" for="password" placeholder="Entrez votre mot de passe" id="password" name="password" required>
              </div>
              <div class="text"><label for="flip">Mot de passe oublié ?</label></div>
              <div class="button input-box">
                <input type="submit" value="Connexion">
              </div>
              <!-- <div class="text sign-up-text">Pas de compte ? <label for="flip">S'inscrire</label></div> -->
            </div>
          </form>
        </div>
        <div class="signup-form">
          <div class="title">Mot de passe oublié ?</div>
          <br>
          <h4>Veuillez contacter un administrateur à cette adresse mail :</h4>
          <br>
          <form action="mailto:support@mynewges.fr">
            <div class="button input-box">
              <input type="submit" value="support@mynewges.fr"></input>
            </div>

          </form>
          <!-- <form method=" POST" action="">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fa-solid fa-user"></i>
                  <input type="text" for="name" placeholder="Entrez le prénom" id="name" name="name" required>
                </div>
                <div class="input-box">
                  <i class="fa-solid fa-user"></i>
                  <input type="text" for="surname" placeholder="Entrez le nom" id="surname" name="surname" required>
                </div>
                <div class="input-box">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="email" for="email" placeholder="Entrez l'e-mail" id="email" name="email" required>
                </div>
                <div class="input-box">
                  <i class="fa-solid fa-lock-keyhole"></i>
                  <input type="password" for="password" placeholder="Entrez le mot de passe" id="password" name="password" required>
                </div>
                <div class="input-box">
                  <i class="fa-solid fa-school"></i>
                  <input type="text" for="school" placeholder="Entrez l'école de l'étudiant" id="school" name="school">
                </div>
                <div class="button input-box">
                  <input type="submit" value="S'inscrire">
                </div> -->
          <div class="text sign-up-text">Vous avez déjà un compte ? <label for="flip">J'ai retrouvé !</label></div>
          <!-- </div> 
          </form> -->
        </div>
      </div>
    </div>
  </div>
</body>

</html>