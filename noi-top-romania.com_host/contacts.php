<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Bar sportiv din România cu cele mai bune transmisiuni de evenimente sportive pe marele ecran. Formular de feedback">
  <meta property="og:site_name"
    content="În acest bar de sport, te poți bucura de băuturi și poți urmări transmisiuni live pe ecrane mari.Are cea mai bună atmosferă, permițându-ți să te cufundați în lumea sportului.">
  <meta property="og:url" content="noi-top-romania.com">
  <meta property="og:image" content="noi-top-romania.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title"
    content="Bar sportiv din România cu cele mai bune transmisiuni de evenimente sportive pe marele ecran. Formular de feedback">
  <meta name="twitter:description"
    content="În acest bar de sport, te poți bucura de băuturi și poți urmări transmisiuni live pe ecrane mari.Are cea mai bună atmosferă, permițându-ți să te cufundați în lumea sportului.">
  <meta name="twitter:site" content="noi-top-romania.com">
  <meta name="twitter:image" content="noi-top-romania.com/main.png">
  <meta name="description"
    content="În acest bar de sport, te poți bucura de băuturi și poți urmări transmisiuni live pe ecrane mari.Are cea mai bună atmosferă, permițându-ți să te cufundați în lumea sportului.">
  <title>Bar sportiv din România cu cele mai bune transmisiuni de evenimente sportive pe marele ecran. Formular de feedback</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Palanquin-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Petrona-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start contacts -->
      <section class="contacts contacts_2">
        <div class="contacts__container container">
          <div class="contacts__left">
            <div class="contacts__left-left">
              <h1 class="contacts__title tt-2">
                Formular de feedback
              </h1>
              <p class="contacts__text tx-1">
                Completează formularul și te vom contacta pentru a discuta toate întrebările
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Nume..." required>
                <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Poștă..." required>
              </div>
              <button class="form__button but-1" type="submit">
                Trimite
              </button>
            </form>
          </div>
          <div class="contacts__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
              <img src="./img/contacts.png" loading="lazy" width="300" height="300" alt="Image">
            </picture>
          </div>
        </div>
      </section>
      <!-- end contacts -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>