<?php

namespace App\Controller;

require_once "../projet_php/Model/DbModel.php";

use App\Model\DbModel;

class IndexController
{
    private DbModel $model;
    public $result;
    public function __construct()
    {
        $this->model = new DbModel();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function index(): void
    {
        #$users = $this->model->Showuser();
        include_once '../projet_php/View/Main.php';
    }

    /**
     * Undocumented function
     *
     * @return void
     */

    public function Show()
    {
        $users = $this->model->Showuser();
        include_once '../projet_php/View/showUser.php';
    }
    public function add()
    {
        include_once '../projet_php/view/adding.php';
    }

    public function login()
    {
        include_once '../projet_php/login.php';
    }

    public function vraiLogin(){
        include_once '../projet_php/View/VraiLogin.php';
    }

    public function identification()
    {
        include_once "../projet_php/process_login.php";
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function postadd()
    {
       
        if ($this->model->addUser($_POST) === false) {
            $_SESSION['add'] = false;
        } else {
            $_SESSION['add'] = true;
        }
        header('Location: /');
    }

    public function getdel()
    {
        $this->model->delUser($_POST['id_client']);
        header('location: /Show');
    }

    public function mod()
    {
        include_once '../projet_php/View/mod.php';
    }

    public function Attraction(){
        $attractions = $this->model->getAllAttractions();
        include_once '../projet_php/View/attraction.php';
    }
    public function postMod()
    {
        $this->model->modUser();
        header('location: /Show');
    }
}