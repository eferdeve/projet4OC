<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

class FrontController {
    public function __construct()
    {
        $this->commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
        $this->postManager = new \OpenClassrooms\Blog\Model\PostManager();
    }

    function adminLogin()
    {
        require('view/frontend/adminLoginView.php');
    }

    function homepage()
    {
        $posts = array_reverse($this->postManager->getPosts()); 
        require('view/frontend/homepageView.php'); 
    }

    function listPosts()
    {
        $posts = $this->postManager->getPosts();                         
        require('view/frontend/listPostsView.php');                 
    }

    function post()
    {
        $post = $this->postManager->getPost($_GET['id']);
        $comments = $this->commentManager->getComments($_GET['id']);

        require('view/frontend/postView.php');
    }

    function addComment($postId, $author, $comment)
    {
        $affectedLines = $this->commentManager->postComment($postId, $author, $comment);

        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        }
        else {
            header('Location: index.php?action=post&id=' . $postId);
        }
    }
}
