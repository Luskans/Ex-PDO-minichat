<?php
session_start();
$_SESSION['connected'] = false;
include_once('./partials/header.php')
?>

<main class="container mt-5">
    <section class="bg-light d-flex">
        <div class="left d-flex flex-column">
            <div class="left-title bg-secondary">
                <h2>Chat</h2>
            </div>
            <div class="left-body bg-success">
                <div class="pseudo"></div>
                <div class="date"></div>
                <div class="texte"></div>
            </div>
            <?php include_once('./partials/display_form.php') ?>
        </div>
        <div class="right d-flex flex-column bg-warning">
            <div class="right-title bg-primary">
                <h2>Utilisateurs</h2>
            </div>
            <div class="right-body"></div>
        </div>
    </section>
</main>

<?php include_once('./utils/alert.php') ?>
<?php include_once('./utils/modal.php') ?>
<?php include_once('./partials/footer.php')  ?>
