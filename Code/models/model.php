<?php
function DbConnexion()
{
    try {
        $db = new PDO('mysql:host=localhost:3306;dbname=myges;charset=utf8', 'root', '');
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

    // Hashage du mot de passe avec un sel aléatoire
    $salt = uniqid(mt_rand(), true);
    $hashed_password = password_hash($password . $salt, PASSWORD_DEFAULT);

    $stmt = $db->prepare("INSERT INTO users (name, surname, email, password, salt, school) VALUES (:name, :surname, :email, :password, :salt, :school)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':salt', $salt);
    $stmt->bindParam(':school', $school);
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

function Dbnote()
{
    // Récupération de la connexion
    $db = DbConnexion();

    // Vérification de la connexion
    if (!$db) {
        // Gérer l'échec de la connexion
        exit("La connexion à la base de données a échoué.");
    }
    // Préparation de la requête SQL
    $sql = "SELECT * FROM note";
    $stmt = $db->prepare($sql);
    if ($stmt->execute()) {
        $ligne = $stmt->fetchAll();
    }
    return $ligne;

}

/*function DbSupports()
{
    $db = DbConnexion();
    if (!$db) {
        exit("La connexion à la base de données a échoué.");
    }
    $sql = "SELECT * FROM document";
    $stmt = $db->prepare($sql);
    if ($stmt->execute()){
        $ligne = $stmt->fetchAll();
    }
    return $ligne;
}*/