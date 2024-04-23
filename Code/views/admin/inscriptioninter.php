<!DOCTYPE html>
<html lang="fr">

<?php


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

    <title>Inscription - MyNewGES</title>
</head>

<body>

    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="assets/img/campus/campus.png" alt="">
                <div class="text">
                    <span class="text-1">Bienvenue sur le <br> Panel d'inscription</span>
                    <span class="text-2">Inscrivez-vous</span>
                </div>
            </div>
        </div>

        <div class="forms">
            <div class="form-content">
                <div class="signup-form">
                    <div class="title">Inscrire un intervenant</div>
                    <form method="POST" action="index.php?form=registerinter">
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
                                <select name="id_matiere[]" id="id_matiere" required>
                                    <option name="id_matiere" id="id_matiere" value="">Sélectionnez une matière</option>
                                    <?php
                                    // Boucle à travers la liste des utilisateurs et affiche-les dans les options
                                    foreach (DbMatiere() as $matiere) {
                                        echo "<option value=\"{$matiere['id_matiere']}\">{$matiere['nom_matiere']} </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-school"></i>
                                <select name="id_matiere[]" id="id_matiere">
                                    <option name="id_matiere" id="id_matiere" value="">Sélectionnez une autre matière</option>
                                    <?php
                                    // Boucle à travers la liste des utilisateurs et affiche-les dans les options
                                    foreach (DbMatiere() as $matiere) {
                                        echo "<option value=\"{$matiere['id_matiere']}\">{$matiere['nom_matiere']} </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="input-box">
                                <i class="fa-regular fa-graduation-cap"></i>
                                <select name="id_ecole[]" id="id_ecole" required>
                                    <option name="id_ecole" id="id_ecole" value="">Sélectionnez une école</option>
                                    <?php
                                    // Boucle à travers la liste des utilisateurs et affiche-les dans les options
                                    foreach (DbEcole() as $ecole) {
                                        echo "<option value=\"{$ecole['id_ecole']}\">{$ecole['nom_ecole']} </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="input-box">
                                <i class="fa-regular fa-graduation-cap"></i>
                                <select name="id_ecole[]" id="id_ecole" required>
                                    <option name="id_ecole" id="id_ecole" value="">Sélectionnez une autre école</option>
                                    <?php
                                    // Boucle à travers la liste des utilisateurs et affiche-les dans les options
                                    foreach (DbEcole() as $ecole) {
                                        echo "<option value=\"{$ecole['id_ecole']}\">{$ecole['nom_ecole']} </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="S'inscrire">
                            </div>
                            <div class="text sign-up-text">Vous avez déjà un compte ? <label for=""><a href="index.php?page=session">Se connecter</a></label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/NewGES/Code/assets/js/promo.js"></script>
</body>

</html>