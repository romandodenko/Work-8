<!DOCTYPE html>
<html lang="no">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Bergen Bors Hotel er det beste hotellet med flott byutsikt i Norge. Kontakt oss.">
  <meta property="og:site_name"
    content="Bergen Bors Hotel er et av de beste hotellene i Bergen by. Hotellet er nytt og moderne, og gir gjestene det høyeste nivået av komfort.">
  <meta property="og:url" content="offisiell-spilleautomat.com">
  <meta property="og:image" content="offisiell-spilleautomat.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bergen Bors Hotel er det beste hotellet med flott byutsikt i Norge. Kontakt oss.">
  <meta name="twitter:description"
    content="Bergen Bors Hotel er et av de beste hotellene i Bergen by. Hotellet er nytt og moderne, og gir gjestene det høyeste nivået av komfort.">
  <meta name="twitter:site" content="offisiell-spilleautomat.com">
  <meta name="twitter:image" content="offisiell-spilleautomat.com/main.png">
  <meta name="description"
    content="Bergen Bors Hotel er et av de beste hotellene i Bergen by. Hotellet er nytt og moderne, og gir gjestene det høyeste nivået av komfort.">
  <title>Bergen Bors Hotel er det beste hotellet med flott byutsikt i Norge. Kontakt oss.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/SofiaSans-Black.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/SofiaSans-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page page_2">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <div class="footer-item">
            <div class="footer-item__left">
              <h1 class="footer-item__title tt-2">
                Kontakt oss
              </h1>
              <p class="footer-item__text tx-1">
                Send din forespørsel, så kontakter vi deg for å svare på alle dine spørsmål
              </p>
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Navn..." required>
                  <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Post..." required>
                </div>
                <button class="form__button but-1" type="submit">
                  Sende
                </button>
              </form>
            </div>
            <div class="footer-item__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
                <img src="./img/contacts.jpg" loading="lazy" width="300" height="300" alt="image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- end contacts -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer2.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>