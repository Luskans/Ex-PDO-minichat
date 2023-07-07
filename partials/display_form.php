<div class="left-form d-flex bg-danger">
    <form id="message_form" action="./process/add_message.php" method="post">
        <input type="text" name="pseudo" placeholder="Pseudo" required>
        <input type="text" name="message" placeholder="Ecrire un message ..." required>
        <button type="submit">Envoyer</button>
    </form>
    <p id="message_text"></p>
</div>