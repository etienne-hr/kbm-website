<?php
echo '
<div class="form-contact-container" id="contact">
<h2>Votre projet</h2>
<div class="contact">
        <div class="contact-p">
                <p>Contactez-nous</p>
        </div>
        <?php foreach ($errorMessages as $_message) : ?>
                <div class="message-error"><?= $_message ?></div>
        <?php endforeach ?>
        <?php foreach ($successMessages as $_message) : ?>
                <div class="message-success"><?= $_message ?></div>
        <?php endforeach ?>
        <form class="contact-form" action="#" method="post">
                <fieldset>
                        <label>Prénom</label>
                        <input type="text" name="name" value="<?= $name ?>">
                </fieldset>
                <fieldset>

                        <label>Nom</label>
                        <input type="text" name="lastname" value="<?= $lastname ?>">
                </fieldset>
                <fieldset>

                        <label>Votre E-mail</label>
                        <input type="text" name="mail" value="<?= $mailFrom ?>">
                </fieldset>
                <fieldset>
                        <label>Sujet</label>
                        <input type="text" name="subject" value="<?= $subject ?>">

                </fieldset>
                <fieldset>
                        <label>Message</label>
                        <textarea name="message"><?= $message ?></textarea>
                </fieldset>
                <div class="g-recaptcha" data-sitekey="6LeqBsoZAAAAAKOolvW-s2BSoFwiCQN8cgetqdzh"></div>
                <button name="submit">Envoyer</button>
        </form>
</div>
</div>';
