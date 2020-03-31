<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/Login.php');

class BackController
{
    public function __construct()
    {
        if (!$_SESSION['admin']) {
            header('Location:index.php?action=notfound');
        } else {
            $this->commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
            $this->postManager = new \OpenClassrooms\Blog\Model\PostManager();
            $this->logs = new \OpenClassrooms\Blog\Model\Login();
            $this->commentwarncount = $this->commentManager->warnCounterComment();
            $this->commentcount = $this->commentManager->counterComment();
            $this->counterPosts = $this->postManager->counterPosts();
        }
    }

    //Envoie d'un nouveau post
    public function sendpost($title, $content)
    {
        $reqPost = $this->postManager->newPost($title, $content);
        if ($reqPost === false) {
            throw new Exception('Impossible d\'ajouter le billet !');
        } else {
            header('Location: index.php?action=newpost');
        }
    }

    //Affichage page Nouveau Post
    public function newPost()
    {
        require('view/backend/sbadmin2/newpost.php');
    }

    //Affichage page liste des posts en tableau dans le backend
    public function listingPost()
    {
        $posts = $this->postManager->getPosts();
        require('view/backend/sbadmin2/listingpost.php');
    }

    //Effacer un post
    public function deletePost()
    {
        $deletePost = $this->postManager->deletePost($_GET['id']);
        header('Location: index.php?action=listingpost');
    }

    //Affichage page modifier un post
    public function editPost()
    {
        $post = $this->postManager->getPost($_GET['id']);
        require('view/backend/sbadmin2/editpost.php');
    }

    //Déconnexion et destruction de la session en cours
    public function logout()
    {
        session_destroy();
        header('location:index.php');
    }

    //Affichage page Tables 
    public function tables()
    {
        $comments = $this->commentManager->getAllComments();
        $commentcount = $this->commentManager->counterComment();
        require('view/backend/sbadmin2/tables.php');
    }

    //Affichage homepage quand on est connecté
    public function adminHomepage()
    {
        $posts = $this->postManager->getPosts();
        require('view/backend/sbadmin2/dashboard.php');
        header('location:index.php');
    }

    //Effacer un commentaire
    public function deleteComment()
    {
        $commentdelete = $this->commentManager->deleteComment($_GET['id']);
        header("location:index.php?action=tables");
    }

    //Désignaler un commentaire
    public function unwarningComment()
    {
        $warncomment = $this->commentManager->unwarningComment($_GET['id']);
        header("location:index.php?action=tables");
    }

    //Modifier un post
    public function updatePost($title, $content, $id)
    {
        $postUpdate = $this->postManager->updatePost($title, $content, $id);
        header("location:index.php?action=listingpost");
    }
}
