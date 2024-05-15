<?php

function DbConnexion()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=mygesnew;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function DbRegisterStudent()
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
    $id_ecole = $_POST['id_ecole'];
    $id_promo = $_POST['id_promo'];

    // Vérifier si l'adresse e-mail existe déjà
    $stmt = $db->prepare("SELECT COUNT(*) FROM student WHERE email = :email");
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

    // Insérer l'étudiant dans la table student
    $stmt = $db->prepare("INSERT INTO student (name_student, surname_student, email, password, salt, id_ecole, id_promo) VALUES (:name, :surname, :email, :password, :salt, :id_ecole, :id_promo)");
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
    $stmt->bindParam(':salt', $salt, PDO::PARAM_STR);
    $stmt->bindParam(':id_ecole', $id_ecole, PDO::PARAM_INT);
    $stmt->bindParam(':id_promo', $id_promo, PDO::PARAM_INT);

    try {
        $stmt->execute();
        DisplayConfRegister();
    } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

function DbRegisterInter()
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
    $id_ecole = $_POST['id_ecole']; // Un tableau des ID des écoles

    // Vérifier si l'adresse e-mail existe déjà
    $stmt = $db->prepare("SELECT COUNT(*) FROM intervenant WHERE email = :email");
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

    try {
        // Insérer l'intervenant dans la table intervenant
        $stmt = $db->prepare("INSERT INTO intervenant (name_intervenant, surname_intervenant, email, password, salt, id_ecole) VALUES (:name, :surname, :email, :password, :salt, :id_ecole)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
        $stmt->bindParam(':salt', $salt, PDO::PARAM_STR);
        $stmt->bindParam(':id_ecole', $id_ecole, PDO::PARAM_INT);
        $stmt->execute();

        // Afficher un message de confirmation
        DisplayConfRegister();
    } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage();
    } catch (Exception $e) {
        // En cas d'autre erreur, afficher l'erreur
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

    // Vérifier si l'utilisateur est connecté et s'il est admin
    if (isset($_SESSION['admin_id'])) {
        // L'utilisateur est un admin, aucune vérification supplémentaire n'est nécessaire
        return true;
    } elseif (isset($_SESSION['student_id'])) {
        // L'utilisateur est un étudiant, vous pouvez ajouter d'autres vérifications ici si nécessaire
        // Par exemple, vérifier s'il est également autorisé à accéder au lien restreint
        DisplayAccessDenied();
        return false;
    } elseif (isset($_SESSION['intervenant_id'])) {
        // L'utilisateur est un intervenant, vous pouvez ajouter d'autres vérifications ici si nécessaire
        // Par exemple, vérifier s'il est également autorisé à accéder au lien restreint
        DisplayAccessDenied();
        return false;
    } else {
        // L'utilisateur n'est pas connecté ou n'est pas dans une table d'utilisateurs valide
        DisplayAccessDenied();
        return false;
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

    // Vérifier si l'utilisateur est connecté et s'il est admin
    if (isset($_SESSION['intervenant_id'])) {
        // L'utilisateur est un admin, aucune vérification supplémentaire n'est nécessaire
        return true;
    } elseif (isset($_SESSION['student_id'])) {
        // L'utilisateur est un étudiant, vous pouvez ajouter d'autres vérifications ici si nécessaire
        // Par exemple, vérifier s'il est également autorisé à accéder au lien restreint
        DisplayAccessDenied();
        return false;
    } elseif (isset($_SESSION['admin_id'])) {
        // L'utilisateur est un intervenant, vous pouvez ajouter d'autres vérifications ici si nécessaire
        // Par exemple, vérifier s'il est également autorisé à accéder au lien restreint
        DisplayAccessDenied();
        return false;
    } else {
        // L'utilisateur n'est pas connecté ou n'est pas dans une table d'utilisateurs valide
        DisplayAccessDenied();
        return false;
    }
}

function Dbnote()
{
    session_start();

    // Récupération de la connexion à la base de données
    $db = DbConnexion();

    // Vérification de la connexion
    if (!$db) {
        // Gérer l'échec de la connexion
        exit("La connexion à la base de données a échoué.");
    }

    // Récupération de l'identifiant de l'étudiant connecté à partir de la session
    $student_id = $_SESSION['student_id']; // Assurez-vous d'avoir correctement stocké l'ID de l'étudiant dans $_SESSION lors de la connexion

    // Préparation de la requête SQL pour sélectionner les notes de l'étudiant connecté
    $sql = "SELECT note.*, matiere.nom_matiere, intervenant.name_intervenant, intervenant.surname_intervenant,
            student.moyenne_total AS moyenne_generale
            FROM note 
            INNER JOIN matiere ON note.id_matiere = matiere.id_matiere 
            INNER JOIN intervenant ON note.id_intervenant = intervenant.id_intervenant
            INNER JOIN student ON note.id_student = student.id_student
            WHERE note.id_student = :studentId";

    $stmt = $db->prepare($sql);

    try {
        // Liaison de la valeur de l'ID de l'étudiant à la requête préparée
        $stmt->bindParam(':studentId', $student_id, PDO::PARAM_INT);

        // Exécution de la requête préparée
        if ($stmt->execute()) {
            // Récupération des lignes de résultat
            $notes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $notes;
        }
    } catch (PDOException $e) {
        // En cas d'erreur PDO, affichage de l'erreur
        echo "Erreur PDO : " . $e->getMessage();
    } catch (Exception $e) {
        // En cas d'autre erreur, affichage de l'erreur
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

function DbAddNote($id_student, $id_matiere, $id_intervenant, $note, $info_note)
{
    $db = DbConnexion();

    $sql = "INSERT INTO note (id_student, id_matiere, id_intervenant, note, info_note) VALUES (:id_student, :id_matiere, :id_intervenant, :note, :info_note)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id_student', $id_student);
    $stmt->bindParam(':id_matiere', $id_matiere);
    $stmt->bindParam(':id_intervenant', $id_intervenant);
    $stmt->bindParam(':note', $note);
    $stmt->bindParam(':info_note', $info_note);

    if ($stmt->execute()) {
        return true;
    }
    return false;
}


function DbStudent()
{
    $db = DbConnexion();

    $stmt = $db->prepare("SELECT id_student, name_student, surname_student FROM student");
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats
    $studentList = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $studentList;
}

function DbStudentByInter($intervenant_id)
{
    $db = DbConnexion();

    // Préparez la requête pour sélectionner tous les élèves de l'école associés à l'intervenant
    $stmt = $db->prepare("SELECT student.id_student, student.name_student, student.surname_student 
                          FROM student 
                          INNER JOIN promo ON student.id_promo = promo.id_promo 
                          INNER JOIN intervenant_ecole ON promo.id_ecole = intervenant_ecole.id_ecole 
                          WHERE intervenant_ecole.id_intervenant = :intervenant_id");

    // Liaison des paramètres
    $stmt->bindParam(':intervenant_id', $intervenant_id, PDO::PARAM_INT);

    // Exécution de la requête
    $stmt->execute();

    // Récupération des résultats
    $studentList = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $studentList;
}


function DbEcoleId()
{
    $db = DbConnexion();

    $id_utilisateur_connecte = $_SESSION['student_id'];

    $stmt = $db->prepare("SELECT ecole.nom_ecole
        FROM student
        INNER JOIN ecole ON student.id_ecole = ecole.id_ecole
        WHERE student.id_student = $id_utilisateur_connecte");
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats
    $ecoleName = $stmt->fetch(PDO::FETCH_ASSOC);

    return $ecoleName;
}

function DbEcole()
{
    $db = DbConnexion();

    $stmt = $db->prepare("SELECT * FROM ecole");
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats
    $ecoleList = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $ecoleList;
}

function DbPromo()
{
    $db = DbConnexion();

    $stmt = $db->prepare("SELECT * FROM promo");
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats
    $ecoleList = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $ecoleList;
}


// Fonction pour récupérer les promotions en fonction de l'ID de l'école
function DbPromoByEcole($id_ecole)
{
    $db = DbConnexion();

    try {
        // Préparation de la requête SQL pour récupérer les promotions de l'école spécifiée
        $sql = "SELECT id_promo, nom_promo FROM promo WHERE id_ecole = :id_ecole";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id_ecole', $id_ecole, PDO::PARAM_INT);

        // Exécution de la requête préparée
        $stmt->execute();

        // Récupération des résultats
        $promo = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Retourne les promotions
        return $promo;
    } catch (PDOException $e) {
        // En cas d'erreur PDO, affiche l'erreur
        echo "Erreur PDO : " . $e->getMessage();
    } catch (Exception $e) {
        // En cas d'autre erreur, affiche l'erreur
        echo "Erreur : " . $e->getMessage();
    }
}

function DbMatiere()
{
    $db = DbConnexion();

    $stmt = $db->prepare("SELECT * FROM matiere");
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats
    $matiereList = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $matiereList;
}

// Fonction pour récupérer les matières en fonction de l'ID de l'école
function DbMatiereByEcole($id_ecole)
{
    $db = DbConnexion();
    $stmt = $db->prepare("SELECT id_matiere, nom_matiere FROM matiere WHERE id_ecole = :id_ecole");
    $stmt->bindParam(':id_ecole', $id_ecole, PDO::PARAM_INT);
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats
    $matiereList = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $matiereList;
}

function DbMatiereInterID()
{
    $db = DbConnexion();

    $intervenant_id = $_SESSION['intervenant_id']; // Assurez-vous d'avoir correctement stocké l'ID de l'intervenant dans $_SESSION lors de la connexion

    $stmt = $db->prepare("SELECT m.id_matiere, m.nom_matiere, i.name_intervenant, i.surname_intervenant
                          FROM matiere m
                          INNER JOIN intervenant_matiere im ON m.id_matiere = im.id_matiere
                          INNER JOIN intervenant i ON im.id_intervenant = i.id_intervenant
                          WHERE i.id_intervenant = :intervenant_id");
    $stmt->bindParam(':intervenant_id', $intervenant_id, PDO::PARAM_INT);
    // Exécution de la requête
    $stmt->execute();
    // Récupération des résultats
    $matiereIDList = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $matiereIDList;
}
