<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="recette.css" />
    <title>Landing</title>
  </head>

  <body>
    <div class="container">
      <header id="navBar">
        <a href="index.php" class="logo"
          >Guillaume Lespert <span>COACHNIG</span></a
        >
        <ul>
          <li><a href="index.php">Votre coach</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a class="active" href="#">Recettes</a></li>
        </ul>
        <span class="menuIcon" onclick="menuToggle();"></span>
      </header>

      <div class="content">
        <div class="banner-text" id="slideshowText">
          <div class="active">
            <h2>
              Cottage cheese<br />
              maison
            </h2>
            <p>
              <b>Ingrédients :</b> (on obtient environ 220 à 260 g de cottage
              cheese) <br />
              1 litre de lait ½ ou entier<br />
              30 ml de vinaigre de vin blanc<br />
              60 ml d’eau minérale en bouteille<br />
              Envie de voir la suite, cliquez sur le bouton ou contactez moi..
            </p>
            <a class="button" href="#">Offert</a>
          </div>
          <div>
            <h2>
              Muffins <br />
              ChocoBanana
            </h2>
            <p>
              <b>Ingrédients :</b><br />
              40 g de farine de patates douces<br />
              1 oeufs<br />
              15 g de chocolat noir concassé<br />
              1 banane<br />
              10g de miel ou Sirop d&#39;érable ou sucre blanc ...<br />
              La suite dans l'Ebook que je vous offre.. 😉
            </p>
          </div>
        </div>
        <div class="bannerimg" id="slideshow">
          <img src="img/cottage.jpg" alt="" class="active" />
          <img src="img/muffins.jpg" alt="" />
        </div>
      </div>
      <div class="icons">
        <ul class="sci">
          <li>
            <a href="https://m.facebook.com/guillaume.lespert56?ref=bookmarks"
              ><img src="img/facebook-logo.png" alt="facebook logo"
            /></a>
          </li>
          <li>
            <a
              href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fguillaumelespert%2F%3Ffbclid%3DIwAR1itKdrhs-aKDKQf6dKyogscYtguGIe3mUOn0LmotZ1k9nlYhKDDAmm1KI&h=AT0fWDl7W-OgI8FKJZt2uXqJEjlHGMSZp4yGHa-nELuy6GabRmo-ju2HtpPkRGl88jZFbrbJMSK_Vn8FB59ZMJ1OKeKiGkqDISt4LR03Ney52HxUfep-cIuNffjCpS3LXFI"
              ><img src="img/instagram.png" alt="facebook logo"
            /></a>
          </li>
        </ul>
        <ul class="controls">
          <li>
            <a href="#"
              ><img
                src="img/left-arrow.png"
                alt="facebook logo"
                onclick="prevSlide();prevSlideText();"
            /></a>
          </li>
          <li>
            <a href="#"
              ><img
                src="img/right-arrow.png"
                alt="facebook logo"
                onclick="nextSlide();nextSlideText();"
            /></a>
          </li>
        </ul>
      </div>
    </div>
    <!-- popup -->
    <div class="poup-wrapper">
      <div class="popup">
        <div class="poup-content">
          <div class="poup-close">x</div>
          <h2>Ebook Gratuit !!</h2>
          <p class="popupP">
            Pour vous faire découvrir mon univers je vous offre un Ebook de
            recettes et quelques surprises, n'attendez plus demandez le vôtre..
          </p>
          <a href="contact.php">Je réserve</a>
        </div>
      </div>
    </div>

    <script src="script2.js"></script>
  </body>
</html>
