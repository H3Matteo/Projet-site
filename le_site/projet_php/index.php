<?php
require_once '../projet_php/Controller/IndexController.php';

use App\Controller\IndexController;

//session_start();

$controller = new IndexController();
switch (true) {
    case $_SERVER["REQUEST_URI"] === '/':
        $controller->index();
        break;
    case $_SERVER["REQUEST_URI"] === '/Admin':
        $controller->login();
        break;
    case $_SERVER["REQUEST_URI"] === '/Admin' && $_SERVER['REQUEST_METHOD'] === 'POST':
        $controller->identification();
        break;
    case $_SERVER["REQUEST_URI"] === '/Login':
        $controller->vraiLogin();
        break;
    case $_SERVER["REQUEST_URI"] === '/Attraction':
        $controller->Attraction();
        break;
    case $_SERVER["REQUEST_URI"] === '/Login' && $_SERVER['REQUEST_METHOD'] === 'POST':
        $controller->identification();
        break;
    case $_SERVER["REQUEST_URI"] === '/Show':
        $controller->Show();
        break;
    case $_SERVER["REQUEST_URI"] === '/register' &&  $_SERVER["REQUEST_METHOD"] === 'GET':
        $controller->add();
        break;
    case $_SERVER["REQUEST_URI"] === '/register' && $_SERVER["REQUEST_METHOD"] === 'POST':
        $controller->postadd();
        break;
    case $_SERVER["REQUEST_URI"] === "/del/" . $_POST['id_client']:
        $controller->getdel();
        break;
    case $_SERVER["REQUEST_URI"] === "/mod/" . $_POST['id_client'] && $_SERVER["REQUEST_METHOD"] === 'POST':
        $controller->mod();
        break;
    case $_SERVER["REQUEST_URI"] === '/mode' && $_SERVER["REQUEST_METHOD"] === 'POST':
        $controller->postMod();
        break;
    default:
        echo 'error';
        break;
}