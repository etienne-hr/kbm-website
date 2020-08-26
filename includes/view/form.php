<?php
echo '
    <div class="form-contact">
        <p>send email</p>
        <form class="contact-form" action="includes/config/form-handler.php" method="post">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Your email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="message"></textarea>
            <button type="submit" name="submit">Send mail</button>
        </form>
    </div>';
