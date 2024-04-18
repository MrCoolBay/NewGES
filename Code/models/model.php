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

function VerifyAdmin()
{
    session_start();
    $db = DbConnexion();

    // Vérification de la connexion
    if (!$db) {
        // Gérer l'échec de la connexion
        exit("La connexion à la base de données a échoué.");
    }

    // Vérifier si l'utilisateur a le bon identifiant pour accéder au lien restreint
    $allowed_school_id = "admin"; // ID de l'utilisateur autorisé à accéder au lien
    if ($_SESSION['school'] !== $allowed_school_id) {
        // Rediriger vers une page d'erreur ou afficher un message d'erreur
        DisplayAccessDenied();
        exit;
    }
}
function VerifyInter()
{
    session_start();
    $db = DbConnexion();

    // Vérification de la connexion
    if (!$db) {
        // Gérer l'échec de la connexion
        exit("La connexion à la base de données a échoué.");
    }

    // Vérifier si l'utilisateur a le bon identifiant pour accéder au lien restreint
    $allowed_school_id = "Intervenant"; // ID de l'utilisateur autorisé à accéder au lien
    if ($_SESSION['school'] !== $allowed_school_id) {
        // Rediriger vers une page d'erreur ou afficher un message d'erreur
        DisplayAccessDenied();
        exit;
    }
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

    // Récupération de l'identifiant de l'utilisateur connecté à partir de la session
    session_start();
    $userId = $_SESSION['user_id']; // Assurez-vous d'avoir correctement stocké l'ID de l'utilisateur dans $_SESSION lors de la connexion

    // Préparation de la requête SQL pour sélectionner les notes de l'utilisateur connecté
    $sql = "SELECT * FROM note WHERE id_user = :userId";
    $stmt = $db->prepare($sql);

    try {
        // Liaison de la valeur de l'ID utilisateur à la requête préparée
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);

        // Exécution de la requête préparée
        if ($stmt->execute()) {
            // Récupération des lignes de résultat
            $ligne = $stmt->fetchAll();
            return $ligne;
        }
    } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}



function uploadCV($fileName, $fileContent)
{
    // Connexion à la base de données
    $db = DbConnexion();
    if (!$db) {
        exit("La connexion à la base de données a échoué.");
    }

    // Préparation de la requête d'insertion
    $stmt = $db->prepare("INSERT INTO documents (name, file_data) VALUES (?, ?)");
    $stmt->bindParam(1, $fileName, PDO::PARAM_STR);
    $stmt->bindParam(2, $fileContent, PDO::PARAM_LOB);

    // Exécution de la requête d'insertion
    $stmt->execute();

    // Affichage de la confirmation
    header("Location: index.php?page=offres");
    echo ("Réussi");
    exit;
}

function dbConsult()
{
    $db = DbConnexion();

    $id = $_GET['id'];

    // Récupérer les données du fichier depuis la base de données
    $stmt = $db->query("SELECT file_data FROM documents WHERE id = ?");
    $stmt->execute([$id]);

    $fileData = $stmt->fetchColumn();

    // Configurer les en-têtes pour le téléchargement du fichier PDF
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="nom_du_fichier.pdf"');

    // Envoyer les données du fichier au navigateur
    echo $fileData;
}

function DbAddNote($id_user, $matiere, $intervenant, $note1, $info_note1)
{
    $db = DbConnexion();

    $sql = "INSERT INTO note (id_user, matiere, intervenant, note1, info_note1) VALUES (:id_user, :matiere, :intervenant, :note1, :info_note1)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id_user', $id_user);
    $stmt->bindParam(':matiere', $matiere);
    $stmt->bindParam(':intervenant', $intervenant);
    $stmt->bindParam(':note1', $note1);
    $stmt->bindParam(':info_note1', $info_note1);

    if ($stmt->execute()) {
        return true;
    }
    return false;
}

function DbUsers()
{
    $db = DbConnexion();

    $stmt = $db->prepare("SELECT id_user, name, surname FROM users");
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats
    $usersList = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $usersList;
}
