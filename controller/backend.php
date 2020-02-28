<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/login.php');

class BackController {

    //Envoie d'un nouveau post
    function sendpost($title, $content)
    {
        $post = new \OpenClassrooms\Blog\Model\PostManager();
        $reqPost = $post->newPost($title, $content);
        if ($reqPost === false) {
            throw new Exception('Impossible d\'ajouter le billet !');
        }
        else {
            header('Location: index.php?action=newpost');
        }
    }

    //Affichage page Nouveau Post
    function newPost()
    {
        require('view/backend/sbadmin2/newpost.php');
    }

    //Affichage page liste des posts en tableau dans le backend
    function listingPost()
    {
        require('view/backend/sbadmin2/listingpost.php');
    }

    //Affichage page modifier un post
    function editPost()
    {
        require('view/backend/sbadmin2/editpost.php');
    }

    //Déconnexion et destruction de la session en cours
    function logout()
    {
        session_destroy();
        require('view/frontend/adminloginView.php');
    }

    //Affichage page Tables 
    function tables()
    {
        $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
        $comments = $commentManager->getAllComments();
        require('view/backend/sbadmin2/tables.php');
    }

    //Affichage homepage quand on est connecté
    function adminHomepage()
    {
        if ($_SESSION['admin']) {
            require('view/backend/sbadmin2/dashboard.php');
        }
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

    //Signaler un commentaire
    function warningComment()
    {
        $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
        $warncomment = $commentManager->warningComment($_GET['id']);
    }

}

