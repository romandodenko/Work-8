<!DOCTYPE html>
<html lang="lt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Monopolis yra vienas iš populiariausių žaidimų rinkoje, laikomas vienu geriausių. Užpildykite formą">
  <meta property="og:site_name"
    content="Šiame klasikiniame stalo žaidime jūs pasinersite į nekilnojamojo turto ir finansų pasaulį, kuriame jūsų užduotis – tapti turtingiausiu ir sėkmingiausiu žaidėju.">
  <meta property="og:url" content="top10automats.com">
  <meta property="og:image" content="top10automats.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Monopolis yra vienas iš populiariausių žaidimų rinkoje, laikomas vienu geriausių. Užpildykite formą">
  <meta name="twitter:description"
    content="Šiame klasikiniame stalo žaidime jūs pasinersite į nekilnojamojo turto ir finansų pasaulį, kuriame jūsų užduotis – tapti turtingiausiu ir sėkmingiausiu žaidėju.">
  <meta name="twitter:site" content="top10automats.com">
  <meta name="twitter:image" content="top10automats.com/main.png">
  <meta name="description"
    content="Šiame klasikiniame stalo žaidime jūs pasinersite į nekilnojamojo turto ir finansų pasaulį, kuriame jūsų užduotis – tapti turtingiausiu ir sėkmingiausiu žaidėju.">
  <title>Monopolis yra vienas iš populiariausių žaidimų rinkoje, laikomas vienu geriausių. Užpildykite formą</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Mitr-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Mukta-Medium.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Mukta-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./resources/swiper/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <script src="./resources/swiper/swiper.js"></script>
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
          <div class="contacts__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
              <img src="./img/contacts.png" loading="lazy" width="352" height="333" alt="Image">
            </picture>
          </div>
          <div class="contacts__right">
            <h1 class="contacts__title tt-2">
              Užpildykite formą
            </h1>
            <p class="contacts__text tx-1">
              Mes susisieksime su jumis ir galėsite užsisakyti šį puikų žaidimą iš mūsų
            </p>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Vardas..." required>
                <input class="form__input tx-1" type="email" name="email" id="email" placeholder="El. paštas..."
                  required>
              </div>
              <button class="form__button but-1" type="submit">
                Siųsti
              </button>
            </form>
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