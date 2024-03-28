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
    require("views/notes.php");
}
function DbLogin()
{
    session_start();
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

        DisplayHome(); // Rediriger vers le tableau de bord après la connexion
        exit;
    } else {
        DisplayIncorrect();
    }
}
