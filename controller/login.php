<?php

// Chargement des classes
require_once('model/Login.php');

class LoginController
{
    public function __construct()
    {
            $this->logs = new \OpenClassrooms\Blog\Model\Login();
    }

    //Page 404 not found
    public function notFound()
    {
        require('view/backend/sbadmin2/404.php');
    }

    //Affichage de la homepage login
    public function login()
    {
        $admin = $this->logs->log($_POST['identifiant'], $_POST['mdp']);
        if (!$admin) {
            require('view/frontend/adminloginView.php');
        } else {
            header("location:index.php?action=sessionActive");
        }
    }
}
