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
    $email = $_POST['email'];
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
}
function DbLogout()
{
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php?page=session");
    exit;
}
