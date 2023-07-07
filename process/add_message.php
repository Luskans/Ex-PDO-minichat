<?php
session_start();

if (
    isset($_POST['pseudo']) && !empty($_POST['pseudo']) &&
    isset($_POST['message']) && !empty($_POST['message'])
) {

    include('../utils/db_connect.php');

    $isPseudoExist = $db->prepare('SELECT * FROM pseudos WHERE pseudo = :pseudo');
    $isPseudoExist->execute([
        'pseudo' => $_POST['pseudo']
    ]);
    $pseudoExist = $isPseudoExist->fetch();
    
    if ($pseudoExist && $pseudoExist['id_pseudo'] == $_SESSION['id']) {
        echo "envoyer message";
    } elseif ($pseudoExist && $pseudoExist['id_pseudo'] !== $_SESSION['id']) {
        echo "Pseudo déjà existant !";
    } elseif (!$pseudoExist) {
        $request1 = $db->prepare('INSERT INTO pseudos(pseudo, id_pseudo) VALUES (?, ?)');
        $isSuccess =  $request1->execute([
            $_POST['pseudo'],
            $_SESSION['id']
        ]);
        echo "envoyer message";
    }




// $patientsStmnt = $pdo->prepare('SELECT * FROM patients WHERE id = ' . $_GET['patient_id']);
// $patientsStmnt->execute();
// $patient = $patientsStmnt->fetch(PDO::FETCH_ASSOC);
//     $isSuccess =  $request->execute([
//         $_POST['pseudo'],
//         $_POST['message']
//     ]);


    // $request = $db->prepare('INSERT INTO pseudos( pseudo, message) VALUES (?,?)');
    // $isSuccess =  $request->execute([
    //     $_POST['pseudo'],
    //     $_POST['message']
    // ]);

    };
