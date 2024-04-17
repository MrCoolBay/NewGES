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
function DisplayIncorrect()
{
    require("views/popup/incorrectuser.php");
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
function DisplayPlannings()
{
    require("views/plannings.php");
}
function DisplayNotes()
{
    $data = Dbnote();
    require("views/notes.php");
}
function DisplaySupports()
{
    require("views/scolarite/supports.php");
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

        DisplayHome(); // Rediriger vers le tableau de bord après la connexion
        exit;
    } else {
        DisplayIncorrect();
    }
}
