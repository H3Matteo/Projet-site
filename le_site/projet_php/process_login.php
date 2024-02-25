<?php
session_start();

use App\Model\DbModel;
require_once("../projet_php/Model/DbModel.php");
require_once '../projet_php/Controller/IndexController.php';

use App\Controller\IndexController;
$controller = new IndexController();
$dbmodel = new DbModel();
$pdo = $dbmodel->getPDO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Requête SQL pour récupérer les informations de l'utilisateur
    $query = "SELECT * FROM utilisateur WHERE nom = :username OR email = :username";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    // Vérifier si l'utilisateur existe et si le mot de passe est correct
    if ($user && $password === $user['mot_de_passe']) {
        // Authentification réussie, stocker les informations de l'utilisateur dans la session
        $_SESSION['user_id'] = $user['id_client'];
        $_SESSION['username'] = $user['nom'];
        // Rediriger vers une page de succès ou le tableau de bord
        $controller->Show();
        exit();
    } else {
        // Authentification échouée, rediriger vers la page de connexion avec un message d'erreur
        echo $password;
        echo $user['mot_de_passe'];
        echo $username;
        echo $user["nom"];
        //header('Location: login.php?error=1');
        exit();
    }
}
?>
