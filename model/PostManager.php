<?php

namespace OpenClassrooms\Blog\Model;

require_once("model/Manager.php");

class PostManager extends Manager
{
    //Modification en BDD d'un chapitre via editPost
    public function updatePost($title, $content, $id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("UPDATE posts SET title = ?, content = ? WHERE id=?");
        $req->execute(array($title, $content, $id));
    }

    //Suppression post
    public function deletePost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("DELETE FROM posts WHERE id=?");
        $req->execute(array($postId));
    }

    //Envoie d'un nouveau post
    public function newPost($title, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO posts(title, content, creation_date) VALUES(?, ?, NOW())");
        $req->execute(array($title, $content));
    }

    //Obtenir les posts par ordre de date de creation
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC');
        $req->execute();
        $posts = $req->fetchAll();

        return $posts;
    }

    //Obtenir les posts en fonction de l'id de l'URL
    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    //Nombre total de posts
    public function counterPosts()
    {
        $db = $this->dbConnect();
        $postscount = $db->prepare("SELECT COUNT(id) AS counterposts FROM posts");
        $postscount->execute();
        $myvar = $postscount->fetch();

        return $myvar;
    }
}
