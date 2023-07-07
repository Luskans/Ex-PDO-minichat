<?php
session_start();

session_destroy();

header('Location: ../index.php?disconnected');
exit();


// if ($_GET['disconnected']) {
//     session_destroy();
// }

// header('Location: ../index.php');

?>