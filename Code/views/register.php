<?php
// Assurez-vous que l'utilisateur est identifié
session_start();
if (!isset($_SESSION['user_id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: index.php?page=session");
    exit;
}

// Vérifier si l'utilisateur a le bon identifiant pour accéder au lien restreint
$allowed_user_id = 1; // ID de l'utilisateur autorisé à accéder au lien
if ($_SESSION['user_id'] !== $allowed_user_id) {
    // Rediriger vers une page d'erreur ou afficher un message d'erreur
    DisplayAccessDenied();
    exit;
}

// Afficher le contenu restreint ici
echo "Bienvenue sur la page restreinte.";
