<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Landing</title>
    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/EasePack.min.js"></script>
</head>

<body>
    <div class="container">
        <header id="navBar">
            <a href="index.php" class="logo">Guillaume Lespert <span>COACHING</span></a>
            <ul>
                <li><a class="active item1" href="#">Votre coach</a></li>
                <li><a class="item2" href="contact.php">Contact</a></li>
                <li><a class="item3" href="recette.html">Recettes</a></li>
            </ul>
            <span class="menuIcon" onclick="menuToggle();"></span>
        </header>

        <div class="content">
            <div class="banner-text" id="slideshowText">
                <div class="active">
                    <h2>
                        Manger Sainement<br />
                        Soyez en Forme
                    </h2>
                    <p>
                        Parce que c'est essentiel pour notre santé ! Une alimentation saine c'est des vitamines oui, des
                        nutriments ok mais c'est aussi la santé, de
                        la bonne humeur, du partage, du plaisir...
                        Qu'attendez vous, agissez maintenant. Je vous aide !

                    </p>
                    <a class="button" href="#">Gratuit</a>
                </div>
                <div>
                    <h2>
                        Le plaisir de <br />
                        Cuisiner
                    </h2>
                    <p>
                        Parce que pour manger sainemant il faut cuisiner des aliments non transformés, je vous aide a
                        retrouver le plaisir de cuisiner.
                        A vous les bons petits plats sur mesure faits pour vous mais surtout digne des plus grands chefs
                        grâce a mes
                        recettes
                        originales, vous avez faim? Moi aussi alors rejoignez moi en cuisine..
                    </p>
                </div>
                <div>
                    <h2>
                        Laissez moi vous <br />
                        Accompagner
                    </h2>
                    <p>
                        Je suis coach en nutriton, et je sais que de nos jours il n'est pas facile d'entammer un
                        rééquilibrage
                        alimentaire, de guérir des TCA, de perdre du poids ou de s'assumer tels que l'on est tout
                        simplement.
                        C'est pourquoi je vous propose un accompagnement complet. Ensemble nous allons définir des
                        objectifs clairs, réapprendre le plaisir de cuisiner, développer votre confiance en vous,
                        optimiser votre
                        santé. Et ce n'est qu'un début,
                        On en parle par mail?
                    </p>
                </div>
            </div>
            <div class="bannerimg" id="slideshow">
                <img src="img/gauffres.jpg" alt="" class="active" />
                <img src="img/oeufs.jpg" alt="" />
                <img src="img/guillaume.jpg" alt="" />
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
            <ul class="controls">
                <li>
                    <a href="#"><img src="img/left-arrow.png" alt="facebook logo"
                            onclick="prevSlide();prevSlideText();" /></a>
                </li>
                <li>
                    <a href="#"><img src="img/right-arrow.png" alt="facebook logo"
                            onclick="nextSlide();nextSlideText();" /></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="cookie-container">
        <p class="cookie-para">
            Nous utilisons les cookies pour vous garantir la meilleure experience
            sur notre site. Si vous continuez à utiliser ce dernier nous
            considèreront que vous acceptez les cookies.
        </p>
        <button class="cookie-btn">J'accepte</button>
    </div>


    <!-- popup -->
    <div class="poup-wrapper">

        <div class="popup">
            <div class="poup-content">
                <div class="poup-close">x</div>
                <h2>Ebook Gratuit !!</h2>
                <p class="popupP">Pour vous faire découvrir mon univers je vous offre un Ebook de recettes et quelques
                    surprises, n'attendez plus
                    demandez le vôtre..
                </p>
                <a href="contact.php">Je réserve</a>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="gsap.js"></script>
</body>

</html>