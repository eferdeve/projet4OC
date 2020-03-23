<?php

namespace OpenClassrooms\Blog\Model;

require_once("model/Manager.php");

class Login extends Manager
{

    public function log($identifiant, $motdepass)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT *  FROM membres WHERE pseudo = ?');
        $req->execute(array($identifiant));
        $user = $req->fetch();
        //return $user;

        if (!$user) {
            return false;
        } else {
            if ($motdepass == $user['motdepass']) {
                session_start();
                $_SESSION['admin'] = $user['pseudo'];
                return true;
            } else {
                return false;
            }
        }
    }
}
