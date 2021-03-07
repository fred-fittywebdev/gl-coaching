<?php

if(isset($_POST['envoyer'])) {
    $expediteur = "frederic_guerra@yahoo.fr";
    $destinataire = "loulou.fg@gmail.com";
    
    $entete = "Content-Type: text/html;\n";
    $entete .= "From : ". $expediteur;

    $contenuMessage = utf8_decode($_POST['message'])."\r\n";
    $contenuMessage = "De: <strong>".$_POST['username']."</strong><br><br> Adresse mail :<strong> ".$_POST['email']."<br><br></strong> ".$contenuMessage;
    $contenuMessage = "<html><body>".$contenuMessage."</body></html>"


    $reussite = mail($destinataire, $contenuMessage, $entete);
}