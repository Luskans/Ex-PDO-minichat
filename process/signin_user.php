<?php
session_start();

if (
    isset($_POST['login']) && !empty($_POST['login']) &&
    isset($_POST['password']) && !empty($_POST['password'])
) {

    include('../utils/db_connect.php');

    $isUserExist = $db->prepare('SELECT login FROM users WHERE EXISTS 
    (SELECT login FROM users WHERE login = '.$_POST['login'].') ');
    $userExist = $isUserExist->fetch();
    
    if ($userExist) {
        header('Location: ../index.php?error=Le formulaire n\'est pas valide !');

    } else {
        $request = $db->prepare('INSERT INTO users( login, password) VALUES (?,?)');
        $isSuccess =  $request->execute([
            $_POST['login'],
            $_POST['password']
        ]);
    
        $isSuccess
            ?  header('Location: ../index.php?success1=Création de compte réussie !')
            :  header('Location: ../index.php?error=Erreur lors de la création du compte !');     
    };
};







    
//     include '../utils/db_connect.php';
  
//     $request = $db->prepare('INSERT INTO users( login, password) VALUES (?,?)');
//     $isSuccess =  $request->execute([
//         $_POST['login'],
//         $_POST['password']
//     ]);

//     $isSuccess
//         ?  header('Location: ../index.php?success1=Création de compte réussie !')
//         :  header('Location: ../index.php?error=Erreur lors de la création du compte !');
    
// } else {
//     header('Location: ../index.php?error=Le formulaire n\'est pas valide !');    
// }





?>