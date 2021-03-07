<?php

if(isset($_POST['envoyer']) && $_POST['message'] !="") {

    $nom = $_POST['username'];
    $email = $_POST['email'];
    $texte = $_POST['message'];

$to = "guillaumecoaching@outlook.fr";
$sujet = 'Nouveau message de ' . $nom;
$message = '
<h1>Nouveau message de ' . $nom . '</h1>
<h2>Adresse e-mail : ' . $email . '</h2>
<p>' . nl2br($texte) . '</p>
';
$headers = 'From: ' . $nom . ' <' . $email . '>' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$envoyé = mail($to, $sujet, $message, $headers);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="contact.css" />

    <script src="https://kit.fontawesome.com/3865f2b4b4.js" crossorigin="anonymous"></script>
    <title>Landing</title>
</head>

<body>
    <div class="container">
        <header id="navBar">
            <a href="index.php" class="logo">Guillaume Lespert <span>COACHNIG</span></a>
            <ul>
                <li><a href="index.php">Votre coach</a></li>
                <li><a class="active" href="#">Contact</a></li>
                <li><a href="recette.php">Recettes</a></li>
            </ul>
            <span class="menuIcon" onclick="menuToggle();"></span>
        </header>

        <div class="content">
            <div class="banner-text" id="slideshowText">
                <div class="active">
                    <h2>
                        N'attendez pas<br />
                        contactez moi
                    </h2>
                    <p>
                        Parce que je crois en mon approche et en ma méthode, je vous
                        propse de la découvrir en vous envoyant un Ebook gratuit ! Et ce
                        n'est pas tout je vous offre un premier bilan de 30 minutes par
                        skype !
                    </p>
                    <p class="contactList">
                        <i class="fas fa-map-marked"></i>Pour me rencontrer &rarr; 176 rue du Barbatre, 51100 Reims
                    </p>
                    <p class="contactList">
                        <i class="fas fa-paper-plane"></i>Pour m'écrire &rarr;
                        guillaumecoaching@outlook.fr
                    </p>
                    <p class="contactList">
                        <i class="fas fa-blender-phone"></i>Pour me joindre &rarr; 06 59
                        28 93 97
                    </p>
                </div>
                <div>
                    <h2>
                        Le plaisir de <br />
                        Cuisiner
                    </h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Voluptatum laboriosam reprehenderit iure est repellendus porro
                        nesciunt, natus aut ipsum voluptatem inventore nostrum atque
                        soluta cumque adipisci velit repudiandae dolore sunt similique
                        nobis eos culpa libero architecto laudantium! Temporibus, laborum
                        totam?
                    </p>
                    <a href="#">Gratuit</a>
                </div>
                <div>
                    <h2>
                        Laissz moi vous <br />
                        Accompagner
                    </h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Voluptatum laboriosam reprehenderit iure est repellendus porro
                        nesciunt, natus aut ipsum voluptatem inventore nostrum atque
                        soluta cumque adipisci velit repudiandae dolore sunt similique
                        nobis eos culpa libero architecto laudantium! Temporibus, laborum
                        totam?
                    </p>
                    <a href="#">Gratuit</a>
                </div>
            </div>
            <div class="bannerimg">
                <form action="contact.php" method="post" name="contact">
                    <div class="field-name">
                        <i class="fas fa-user"></i>
                        <input name="username" type="text" placeholder="Nom et prénom " required />
                        <i class="fas fa-arrow-down"></i>
                    </div>
                    <div class="field-email inactive">
                        <i class="fas fa-envelope"></i>
                        <input name="email" type="email" placeholder="Votre mail" required />
                        <i class="fas fa-arrow-down"></i>
                    </div>
                    <div class="field-message inactive">
                        <i class="far fa-comment-alt"></i>
                        <input type="textarea" name="message" id="mail" cols="30" rows="20" placeholder="Votre message"
                            required />
                        <i class="fas fa-arrow-down"></i>
                    </div>
                    <div class="field-finish inactive">
                        <input name="" type="hidden" placeholder="Nom et prénom " required style="display: none;" />
                        <i class="far fa-thumbs-up"></i>
                        <p>Merci, à bientôt</p>
                        <input id="sumbitButton" class="submitButton" type="submit" name="envoyer" value="Envoyer" />
                    </div>
                </form>
            </div>
        </div>
        <div class="icons">
            <ul class="sci">
                <li>
                    <a href="https://m.facebook.com/guillaume.lespert56?ref=bookmarks"><img src="img/facebook-logo.png"
                            alt="facebook logo" /></a>
                </li>
                <li>
                    <a
                        href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fguillaumelespert%2F%3Ffbclid%3DIwAR1itKdrhs-aKDKQf6dKyogscYtguGIe3mUOn0LmotZ1k9nlYhKDDAmm1KI&h=AT0fWDl7W-OgI8FKJZt2uXqJEjlHGMSZp4yGHa-nELuy6GabRmo-ju2HtpPkRGl88jZFbrbJMSK_Vn8FB59ZMJ1OKeKiGkqDISt4LR03Ney52HxUfep-cIuNffjCpS3LXFI"><img
                            src="img/instagram.png" alt="facebook logo" /></a>
                </li>
            </ul>
            <p style="color: #78ff00; text-align-center; font-size: 18px; font-weight: 600;">
                <?php if(isset($envoyé) && $envoyé == 1) echo "Message envoyé avec succès";   ?>
            </p>
        </div>
    </div>

    <script src="script1.js"></script>
</body>

</html>