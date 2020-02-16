<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/login.php');

class BackController {

    //Affichage page Tables 
    function tables()
    {
        require('view/backend/sbadmin2/tables.php');
    }

    //Affichage de la homepage login
    function login()
    {
        $logs = new \OpenClassrooms\Blog\Model\Login();
        $admin = $logs->log($_POST['identifiant'], $_POST['mdp']);
        if (!$admin) {
            require('view/frontend/adminloginView.php');
        } else {
            require('view/backend/sbadmin2/dashboard.php'); //faire une fonction juste pour afficher le dashbaord, puis appeler celle-ci ici.
        }
    }

    //Effacer un commentaire
    function deleteComment()
    {
        $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
        $commentdelete = $commentManager->deleteComment($_GET['id']);
    }

}

