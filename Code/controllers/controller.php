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
    VerifyAdmin();
    require("views/paneladmin.php");
}
function DisplayAjoutNote()
{
    DbUsers();
    VerifyInter();
    require("views/inter/ajoutnote.php");
}
function DisplayPanelInter()
{
    VerifyInter();
    require("views/panelinter.php");
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
function DisplayCorrectNote()
{
    DbUsers();
    require("views/popup/correctnote.php");
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
    $data = Dbnote();
    require("views/notes.php");
}

function DisplayInscription()
{
    VerifyAdmin();
    require("views/admin/inscription.php");
}
function DisplaySupports()
{
    require("views/scolarite/supports.php");
}
function DisplayOffer()
{
    require("views/scolarite/offres.php");
}
function DisplayDoc()
{
    require("views/scolarite/documents.php");
}
function DisplayCV()
{
    require("views/sevices/cv.php");
}
function DbPartenaires()
{
    require("views/services/cv.php");
}
function DbTrombino()
{
    require("views/scolarite/trombino.php");
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

        // Rediriger vers le tableau de bord de l'utilisateur après la connexion


        if ($_SESSION['school'] == "admin") {
            $allowed_school_id = "admin"; // ID de l'utilisateur autorisé à accéder au lien
            if ($_SESSION['school'] !== $allowed_school_id) {
                // Rediriger vers une page d'erreur ou afficher un message d'erreur
                DisplayAccessDenied();
                exit;
            }
            header("Location: index.php?page=paneladmin");
        } elseif ($_SESSION['school'] == "Intervenant") {
            $allowed_school_id = "Intervenant"; // ID de l'utilisateur autorisé à accéder au lien
            if ($_SESSION['school'] !== $allowed_school_id) {
                // Rediriger vers une page d'erreur ou afficher un message d'erreur
                DisplayAccessDenied();
                exit;
            }
            header("Location: index.php?page=panelinter");
        } else {
            header("Location: index.php?page=home");
        }
    } else {
        DisplayIncorrect();
    }
}

function AddNote()
{
    // Récupération des données du formulaire 
    $id_user = htmlspecialchars_decode($_POST['id_user']);
    $matiere = htmlspecialchars_decode($_POST['matiere']);
    $intervenant = htmlspecialchars_decode($_POST['intervenant']);
    $note1 = htmlspecialchars_decode($_POST['note1']);
    $info_note1 = htmlspecialchars_decode($_POST['info_note1']);

    // Ajout du livre dans la base de données
    $result = DbAddNote($id_user, $matiere, $intervenant, $note1, $info_note1);
    if ($result) {
        DisplayCorrectNote();
    } else {
        DisplayIncorrect();
    }
}
