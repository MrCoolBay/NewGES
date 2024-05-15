<?php
require("models/model.php");
function DisplayHome()
{
    DbConnexion();
    require("views/student_dashboard.php");
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
    require("views/admin_dashboard.php");
}
function DisplayAjoutNote()
{
    DbStudent();
    VerifyInter();
    require("views/inter/ajoutnote.php");
}
function DisplayPanelInter()
{
    VerifyInter();
    require("views/intervenant_dashboard.php");
}
function DisplayIncorrect()
{
    require("views/popup/incorrectuser.php");
}
function DisplayAccessDenied()
{
    require("views/popup/accessdenied.php");
}

function DisplayConfRegister()
{
    require("views/popup/confregister.php");
}
function DisplayCorrectNote()
{
    DbStudent();
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

function DisplayInscriptionStudent()
{
    require("views/admin/inscriptionstudent.php");
}
function DisplayInscriptionInter()
{
    require("views/admin/inscriptioninter.php");
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
// function DisplayPartenaires()
// {
//     require("views/services/cv.php");
// }
function DisplayTrombino()
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

    // Recherche de l'utilisateur dans la table admin
    $stmt = $db->prepare("SELECT id_admin, name_admin, surname_admin, pdp_admin, email, password, salt, grade FROM admin WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si l'utilisateur est trouvé dans la table admin
    if ($admin && password_verify($password . $admin['salt'], $admin['password'])) {
        // Enregistrer les informations de l'admin dans la session
        $_SESSION['admin_id'] = $admin['id_admin'];
        $_SESSION['email'] = $admin['email'];
        $_SESSION['name'] = $admin['name_admin'];
        $_SESSION['surname'] = $admin['surname_admin'];
        $_SESSION['pdp'] = $admin['pdp_admin'];
        $_SESSION['grade'] = $admin['grade'];

        // Créer un cookie pour garder l'admin connecté
        setcookie('admin_id', $admin['id_admin'], time() + 3600, '/');

        // Redirection vers le tableau de bord de l'admin après la connexion
        header("Location: index.php?page=admindash");
        exit();
    }

    // Recherche de l'utilisateur dans la table student
    $stmt = $db->prepare("SELECT id_student, name_student, surname_student, pdp_student, email, password, salt, id_ecole, id_promo FROM student WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si l'utilisateur est trouvé dans la table student
    if ($student && password_verify($password . $student['salt'], $student['password'])) {
        // Enregistrer les informations de l'étudiant dans la session
        $_SESSION['student_id'] = $student['id_student'];
        $_SESSION['email'] = $student['email'];
        $_SESSION['name'] = $student['name_student'];
        $_SESSION['surname'] = $student['surname_student'];
        $_SESSION['pdp'] = $student['pdp_student'];
        $_SESSION['id_ecole'] = $student['id_ecole'];
        $_SESSION['id_promo'] = $student['id_promo'];

        // Créer un cookie pour garder l'étudiant connecté
        setcookie('student_id', $student['id_student'], time() + 3600, '/');

        // Redirection vers le tableau de bord de l'étudiant après la connexion
        header("Location: index.php?page=studentdash");
        exit();
    }

    // Recherche de l'intervenant dans la table intervenant
    $stmt = $db->prepare("SELECT id_intervenant, name_intervenant, surname_intervenant, pdp_intervenant email, password, salt FROM intervenant WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $intervenant = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si l'intervenant est trouvé dans la table intervenant
    if ($intervenant && password_verify($password . $intervenant['salt'], $intervenant['password'])) {
        // Enregistrer les informations de l'intervenant dans la session
        $_SESSION['intervenant_id'] = $intervenant['id_intervenant'];
        $_SESSION['email'] = $intervenant['email'];
        $_SESSION['name'] = $intervenant['name_intervenant'];
        $_SESSION['surname'] = $intervenant['surname_intervenant'];
        $_SESSION['pdp'] = $intervenant['pdp_intervenant'];

        // Créer un cookie pour garder l'intervenant connecté
        setcookie('intervenant_id', $intervenant['id_intervenant'], time() + 3600, '/');

        // Redirection vers le tableau de bord de l'intervenant après la connexion
        header("Location: index.php?page=interdash");
        exit();
    }

    // Si ni l'admin, ni l'étudiant, ni l'intervenant ne sont trouvés, afficher un message d'erreur
    DisplayIncorrect();
}


function AddNote()
{
    // Récupération des données du formulaire 
    $id_student = htmlspecialchars($_POST['student_id']);
    $id_matiere = htmlspecialchars($_POST['id_matiere']);
    $id_intervenant = htmlspecialchars($_POST['id_intervenant']);
    $note = htmlspecialchars($_POST['note']);
    $info_note = htmlspecialchars($_POST['info_note']);

    // Ajout de la note dans la base de données
    $result = DbAddNote($id_student, $id_matiere, $id_intervenant, $note, $info_note);
    if ($result) {
        DisplayCorrectNote();
    } else {
        DisplayIncorrect();
    }
}
