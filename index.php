<?php
session_start();

require('controller/frontend.php');
require('controller/backend.php');
require('controller/login.php');
//Appel du controller Frontend
$front = new FrontController();
//Appel du controller Login
$login = new LoginController();

try {
    if (isset($_GET['action'])) {

        switch ($_GET['action']) {
            case 'login':
                $login->login();
                break;

            case 'updatepost':
                if (isset($_GET['id']) && isset($_POST['title']) && isset($_POST['content']) && !empty($_GET['id']) && !empty($_POST['title']) && !empty($_POST['content'])) {
                    (new BackController())->updatePost($_POST['title'], $_POST['content'], $_GET['id']);
                } else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
                break;

            case 'deletepost':
                (new BackController())->deletePost();
                break;

            case 'sendpost':
                if (!empty($_POST['title']) && !empty($_POST['content'])) {
                    (new BackController())->sendpost($_POST['title'], $_POST['content']);
                } else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
                break;

            case 'newpost':
                (new BackController())->newPost();
                break;

            case 'listingpost':
                (new BackController())->listingPost();
                break;

            case 'editpost':
                (new BackController())->editPost();
                break;

            case 'logout':
                (new BackController())->logout();
                break;

            case 'sessionActive':
                (new BackController())->adminHomepage();
                break;

            case 'tables':
                (new BackController())->tables();
                break;

            case 'comdelet':
                (new BackController())->deleteComment();
                break;

            case 'warning':
                $front->warningComment();
                break;

            case 'unwarning':
                (new BackController())->unwarningComment();
                break;

            case 'adminlogin':
                $front->adminLogin();
                break;

            case 'listPosts':
                $front->listPosts();
                break;

            case 'notfound':
                $login->notFound();
                break;

            case 'post':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $front->post();
                } else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
                break;

            case 'addComment':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                        $front->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                    } else {
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
                } else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }
                break;

            default:
                $login->notFound();
        }
        
    } else {
        $front->homepage();
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
