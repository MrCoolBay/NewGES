<?php
require("models/model.php");
function DisplayHome()
{

    DbConnexion();
    require("views/home.php");
}
function DisplayPartenaires()
{
    require("views/partenaires.php");
}
function DisplaySession()
{
    require("views/session.php");
}
function DisplayPanelAdmin()
{
    require("views/panneladmin.php");
}
function DisplayIncorrect()
{
    require("views/popup/incorrectuser.php");
}
function DisplayAccessDenied()
{
    require("views/popup/accessdenied.php");
}
function DisplayConfLogout()
{
    session_start();
    require("views/popup/conflogout.php");
}
function DisplayConfRegister()
{
    require("views/popup/confregister.php");
}
function DisplayIncorrectRegister()
{
    require("views/popup/incorrectregister.php");
}
function DisplayPlannings()
{
    require("views/plannings.php");
}
function DisplayNotes()
{
    require("views/notes.php");
}

function DisplayInscription()
{
    require("views/admin/inscription.php");
}
function DbLogin()
{
    session_start();
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification des informations dans la base de données
    $db = DbConnexion();
    $stmt = $db->prepare("SELECT id_user, name, surname, pdp, email, password, salt, school FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password . $user['salt'], $user['password'])) {
        $_SESSION['user_id'] = $user['id_user'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['surname'] = $user['surname'];
        $_SESSION['school'] = $user['school'];
        $_SESSION['pdp'] = $user['pdp'];

        // Création d'un cookie pour garder l'utilisateur connecté
        $cookie_name = "user_id";
        $cookie_value = $user['id_user'];
        setcookie($cookie_name, $cookie_value, time() + (10), "/");

        header("Location: index.php?page=home"); // Rediriger vers le tableau de bord après la connexion
        exit;
    } else {
        DisplayIncorrect();
    }
}
