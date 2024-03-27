<?php
function DbConnexion()
{
    try {
        $db = new PDO('mysql:host=localhost:3306;dbname=fabienlu_books;charset=utf8', 'httpdocs', 'yk9g51BOMG');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function DbLogin()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Vérification des informations dans la base de données
        $db = DbConnexion();
        $stmt = $db->prepare("SELECT id, username, password, salt FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password . $user['salt'], $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Création d'un cookie pour garder l'utilisateur connecté
            $cookie_name = "user_id";
            $cookie_value = $user['id'];
            setcookie($cookie_name, $cookie_value, time() + (60), "/"); // cookie valide pendant 30 jours (86400 secondes dans une journée)

            header("Location: index.php?page=home"); // Rediriger vers le tableau de bord après la connexion
            exit;
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    }
}

function DbRegister()
{
    // Récupération de la connexion
    $db = DbConnexion();

    // Vérification de la connexion
    if (!$db) {
        // Gérer l'échec de la connexion
        exit("La connexion à la base de données a échoué.");
    }

    // Récupération des données du formulaire
    $username = $_POST['username'];
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Hashage du mot de passe avec un sel aléatoire
    $salt = uniqid(mt_rand(), true);
    $hashed_password = password_hash($password . $salt, PASSWORD_DEFAULT);

    // Insertion des données dans la base de données
    $stmt = $db->prepare("INSERT INTO users (username, email, password, salt) VALUES (:username, :email, :password, :salt)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':salt', $salt);
    $stmt->execute();

    echo "Inscription réussie!";
}
