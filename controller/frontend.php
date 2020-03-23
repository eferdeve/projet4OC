<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

class FrontController
{
    public function __construct()
    {
        $this->commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
        $this->postManager = new \OpenClassrooms\Blog\Model\PostManager();
    }

    //Afficher la vue du login
    function adminLogin()
    {
        require('view/frontend/adminLoginView.php');
    }

    //Afficher les posts dans la homepage
    function homepage()
    {
        $posts = array_reverse($this->postManager->getPosts());
        require('view/frontend/homepageView.php');
    }

    //Afficher les posts 
    function listPosts()
    {
        $posts = $this->postManager->getPosts();
        require('view/frontend/listPostsView.php');
    }

    //Afficher un post en fonction de l'id dans l'URL
    function post()
    {
        $post = $this->postManager->getPost($_GET['id']);
        if ($post == true) {
            $comments = $this->commentManager->getComments($_GET['id']);
            require('view/frontend/postView.php');
        } else {
            require('view/backend/sbadmin2/404.php');
        }
    }

    //Ajouter un commentaire en BDD et le lié au post en question
    function addComment($postId, $author, $comment)
    {
        $affectedLines = $this->commentManager->postComment($postId, $author, $comment);

        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        } else {
            header('Location: index.php?action=post&id=' . $postId);
        }
    }
}
