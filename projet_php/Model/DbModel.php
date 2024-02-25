<?php

namespace App\Model;

use PDO;
use FFI\Exception;

class DbModel
{
    private PDO $pdo;

    public function __construct()
    {
        $dbUsername = "root";
        $dbPassword = "root";

        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=ParkAttraction', $dbUsername, $dbPassword);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function getPDO(): PDO
    {
        return $this->pdo;
    }

    /**
     * affiche la page principal
     *
     * @return array
     */
    public function Showuser(): array
    {

        $sqlQuery = 'SELECT * FROM utilisateur';
        $userStatement = $this->pdo->prepare($sqlQuery);
        $userStatement->execute();
        $users = $userStatement->fetchAll();
        return $users;
    }

    /**
     * ajouter un utilisateur a la base de donnee
     * @param array $post
     * @return mixed
     */
    public function addUser(array $post)
    {
        $insertUser = $this->pdo->prepare('INSERT INTO utilisateur (nom, age, email, mot_de_passe) VALUES (:nom, :age, :email, :mot_de_passe)');
        $insertUser->execute([
            'nom' => $post['nom'],
            'age' => $post['age'],
            'email' => $post['email'],
            'mot_de_passe' => $post['mot_de_passe']
        ]);

        return $insertUser;
    }

    /**
     * supprime un utilisateru de la base de donnee
     * @param int $id
     * @return boolean
     */
    public function delUser(int $id): bool
    {
        $deleteUser = $this->pdo->prepare('DELETE FROM utilisateur WHERE id_client = :id_utilisateur');
        return $deleteUser->execute([
            'id_utilisateur' => $id,
        ]);
    }
    public function getAllAttractions() {
        $sqlQuery = 'SELECT * FROM attraction';
        $userStatement = $this->pdo->prepare($sqlQuery);
        $userStatement->execute();
        $attractions = $userStatement->fetchAll();
        return $attractions;
    }
    /**
     * modifie un utilisateur de la base de donnee
     *
     * @return boolean
     */
    public function modUser()
    {
        $modifyUser = $this->pdo->prepare('UPDATE utilisateur SET nom = :nom, age = :age, email = :email, mot_de_passe = :mot_de_passe WHERE id_client = :id_client');
          $modifyUser->execute([
            'nom' => $_POST['nom'],
            'age' => $_POST['age'],
            'email' => $_POST['email'],
            'mot_de_passe' => $_POST['mot_de_passe'],
            'id_client' => $_POST['id_client']
        ]);
        if ($modifyUser == true)
        {
             return $result = "L'utilisateur a été modifié";
        } else {
             return $result = "La requete n\'a pas aboutie";
        }
    }
}