<?php

namespace OpenClassrooms\Blog\Model;

require_once("model/Manager.php");

class Login extends Manager {

    private function log() {
        $db = $this->dbConnect();
        $identifiant = $db->query('SELECT pseudo FROM membres');
        $motdepass = $db->query('SELECT motdepass FROM membres');
    }

}







