<?php

namespace OpenClassrooms\Blog\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function getAllComments()
    {
            $db = $this->dbConnect();
            $comments = $db->prepare('SELECT * FROM comments ORDER BY comment_date DESC');
            $comments->execute();
    
            return $comments;
    }

    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $commentTarget = $db->query("DELETE FROM comments WHERE id=$id");
    }

    public function warningComment($id)
    {
        $db = $this->dbConnect();
        $commentTarget = $db->query("UPDATE comments SET signalement = 'Oui' WHERE id=$id");
    }

    public function unwarningComment($id)
    {
        $db = $this->dbConnect();
        $commentTarget = $db->query("UPDATE comments SET signalement = '0' WHERE id=$id");
    }
}
