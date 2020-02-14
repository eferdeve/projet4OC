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
        $logs = new \OpenClassrooms\Blog\Model\login();
        require('view/backend/sbadmin2/dashboard.php');
    }

    //Effacer un commentaire
    function deleteComment()
    {
        $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
        $commentdelete = $commentManager->deleteComment($_GET['id']);
    }

}

