<?php
    if(isset($_POST['Message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['Email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['Nom'] . '<br>
        <b>Email : </b>' . $_POST['Email'] . '<br>
        <b>Sujet : </b>' . $_POST['Sujet'] . '<br>
        <b>Message : </b>' . $_POST['Message'] . '</p>';

        $retour = mail('guimontaur@cy-tech.fr', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
    ?>