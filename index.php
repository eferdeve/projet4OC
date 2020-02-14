<?php
session_start();

require('controller/frontend.php');
require('controller/backend.php');
//Appel du controller Frontend
$front = new FrontController();
//Appel du controller Backend
$back = new BackController();

try {
    if (isset($_GET['action'])) {

        //Affichage page liste des commentaire ( Tables )
        if ($_GET['action'] == 'tables') {
            $back->tables();
        }

        //Suppression d'un commentaire
        if ($_GET['action'] == 'comdelet') {
            $back->deleteComment();
        }

        //Affichage du loginhome une fois les logs corrects
        if ($_GET['action'] == 'login') {

            if ($_POST['identifiant'] == "jeanf" && $_POST['mdp'] == "1234") {
            $back->login();
            } else {
                header('location:index.php?action=adminlogin');
            }
        }

        //Affichage de la page de connexion administrateur
        if ($_GET['action'] == 'adminlogin') {
            $front->adminLogin();
        }

        //Affichage de la page contact
        if ($_GET['action'] == 'contact') {
            $front->contact();
        }

        //Affichage de la liste des chapitres
        if ($_GET['action'] == 'listPosts') {
            $front->listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $front->post();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    $front->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
    
    else {
        $front->homepage();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
