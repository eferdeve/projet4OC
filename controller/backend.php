<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/login.php');

class BackController {

    //Affichage de la homepage login
    function login()
    {
        $logs = new \OpenClassrooms\Blog\Model\login();
        require('view/backend/sbadmin2/index.php');
    }

    //Effacer un commentaire
    function deleteComment()
    {
        $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
        $commentdelete = $commentManager->deleteComment($_GET['id']);
    }

}

