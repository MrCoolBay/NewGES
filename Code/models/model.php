<?php

function DbConnexion()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=myges;charset=utf8', 'root', '');
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
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $school = $_POST['school'];

    // Vérifier si l'adresse e-mail existe déjà
    $stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        // L'adresse e-mail existe déjà, afficher un message et arrêter le processus
        exit(DisplayIncorrectRegister());
    }

    // Hashage du mot de passe avec un sel aléatoire
    $salt = uniqid(mt_rand(), true);
    $hashed_password = password_hash($password . $salt, PASSWORD_DEFAULT);

    $stmt = $db->prepare("INSERT INTO users (name, surname, email, password, salt, school) VALUES (:name, :surname, :email, :password, :salt, :school)");
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
    $stmt->bindParam(':salt', $salt, PDO::PARAM_STR);
    $stmt->bindParam(':school', $school, PDO::PARAM_STR);
    try {
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
function DbLogout()
{
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php?page=session");
    exit;
}
