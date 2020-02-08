<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

class BackController {
    //Affichage de la homepage login
    function login()
    {
        require('view/backend/loginhome.php');
    }

    //fonction back
    function deleteComment()
    {
        $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
        $commentdelete = $commentManager->deleteComment($_GET['id']);
    }

}

