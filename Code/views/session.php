<!DOCTYPE html>
<html lang="fr">

<!-- <?php session_start(); ?> -->

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
              <div class="text"><a href="#">Mot de passe oublié ?</a></div>
              <div class="button input-box">
                <input type="submit" value="Connexion">
              </div>
              <div class="text sign-up-text">Pas de compte ? <label for="flip">S'inscrire</label></div>
            </div>
          </form>
        </div>
        <div class="signup-form">
          <div class="title">S'inscrire</div>
          <form method="POST" action="index.php?form=register">
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
              </div>
              <div class="text sign-up-text">Vous avez déjà un compte ? <label for="flip">Se connecter</label></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>