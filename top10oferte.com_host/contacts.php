<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hotelul Vibre este cunoscut pentru calitatea și serviciile excelente. Rezerva acum">
  <meta property="og:site_name"
    content="Hotelul Vibre de 5 stele din România este unul dintre cele mai bune hoteluri din categoria sa și cu siguranță se mândrește în topul celor mai bune hoteluri din țară.">
  <meta property="og:url" content="top10oferte.com">
  <meta property="og:image" content="top10oferte.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Hotelul Vibre este cunoscut pentru calitatea și serviciile excelente. Rezerva acum">
  <meta name="twitter:description"
    content="Hotelul Vibre de 5 stele din România este unul dintre cele mai bune hoteluri din categoria sa și cu siguranță se mândrește în topul celor mai bune hoteluri din țară.">
  <meta name="twitter:site" content="top10oferte.com">
  <meta name="twitter:image" content="top10oferte.com/main.png">
  <meta name="description"
    content="Hotelul Vibre de 5 stele din România este unul dintre cele mai bune hoteluri din categoria sa și cu siguranță se mândrește în topul celor mai bune hoteluri din țară.">
  <title>Hotelul Vibre este cunoscut pentru calitatea și serviciile excelente. Rezerva acum</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Fraunces-Black.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Inter-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page">
    <!-- start header -->
    <?php
    include 'header-2.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start contacts -->
      <section class="contacts contacts_2">
        <div class="container">
          <div class="contacts__top">
            <div class="contacts__left">
              <h1 class="contacts__title tt-2">
                Rezerva acum
              </h1>
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Nume..." required>
                  <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Poștă..." required>
                </div>
                <button class="form__buttom but-2" type="submit">
                  Trimite
                  <svg width="10" height="10">
                    <use xlink:href="./img/svg/sprites.svg#arrow"></use>
                  </svg>
                </button>
              </form>
            </div>
            <div class="contacts__texts">
              <p class="contacts__text tx-2">
                Completează formularul și te vom contacta
              </p>
            </div>
          </div>
          <div class="contacts__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
              <img src="./img/contacts.jpg" loading="lazy" width="300" height="300" alt="Image">
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