<?PHP
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['idUsu'])){
        header('location: ../view/login.php');
        die();
    }
?>