<!-- <div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>Création de compte réussie !</p>
            </div>
        </div>
    </div>
</div> -->


<?php if (isset($_GET['success1'])) { ?>

    <div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body bg-success d-flex justify-content-center">
                    <p class="text-light">Création de compte réussie !</p>
                </div>
            </div>
        </div>
    </div>

<?php } elseif(isset($_GET['success2'])) { ?>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body bg-success d-flex justify-content-center">
                    <p class="text-light">Connexion réussie !</p>
                </div>
            </div>
        </div>
    </div>

<?php } elseif(isset($_GET['disconnected'])) { ?>

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body bg-warning d-flex justify-content-center">
                <p class="text-light">Aurevoir et à bientôt !</p>
            </div>
        </div>
    </div>
</div>

<?php } elseif(isset($_GET['error'])) { ?>

    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div> -->

<?php } ?>