<?php

namespace OpenClassrooms\Blog\Model;

require_once("model/Manager.php");

class PostManager extends Manager
{
    //Modification en BDD d'un chapitre via editPost
    public function updatePost($id)
    {
        $db = $this->dbConnect();
        $req = $db->query("UPDATE posts SET title = '?', content = '?' WHERE id=$id");
    }

    //Suppression post
    public function deletePost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->query("DELETE FROM posts WHERE id=$postId");
    }

    //Envoie d'un nouveau post
    public function newPost($title, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO posts(title, content, creation_date) VALUES(?, ?, NOW())");
        $reqPost = $req->execute(array($title, $content));
    }

    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
        $posts = $req->fetchAll();

        return $posts;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
}
