<?php

session_start();
$_SESSION['login'] = "";

if (
    isset($_POST['login']) && !empty($_POST['login']) &&
    isset($_POST['password']) && !empty($_POST['password'])
) {

    include('../utils/db_connect.php');

    $isUserExist = $db->prepare("SELECT * FROM users WHERE login = :login");
    $isUserExist->execute([
        'login' => $_POST['login'],
    ]);
    $userExist = $isUserExist->fetch();
    
    if ($userExist) {

        $_SESSION['connected'] = true;
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['id'] = $userExist['id_user'];
       
    } else {
        session_destroy();
    };
};

$_SESSION['connected']
    ? header('Location: ../index.php?success2=Connexion réussie !')
    : header('Location: ../index.php?error=Erreur lors de la connexion !');


?>