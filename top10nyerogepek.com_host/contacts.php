<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="A Pandemic minden idők egyik legjobb és legmagasabbra értékelt társasjátéka.">
  <meta property="og:site_name"
    content="A Pandemic a játékszakértők legjobb értékelése alapján van besorolva, és a társasjátékok rangsorában az egyik első helyen áll. egyedülálló együttműködési élmény, amely lehetővé teszi, hogy jól érezze magát">
  <meta property="og:url" content="top10nyerogepek.com">
  <meta property="og:image" content="top10nyerogepek.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="A Pandemic minden idők egyik legjobb és legmagasabbra értékelt társasjátéka.">
  <meta name="twitter:description"
    content="A Pandemic a játékszakértők legjobb értékelése alapján van besorolva, és a társasjátékok rangsorában az egyik első helyen áll. egyedülálló együttműködési élmény, amely lehetővé teszi, hogy jól érezze magát">
  <meta name="twitter:site" content="top10nyerogepek.com">
  <meta name="twitter:image" content="top10nyerogepek.com/main.png">
  <meta name="description"
    content="A Pandemic a játékszakértők legjobb értékelése alapján van besorolva, és a társasjátékok rangsorában az egyik első helyen áll. egyedülálló együttműködési élmény, amely lehetővé teszi, hogy jól érezze magát">
  <title>A Pandemic minden idők egyik legjobb és legmagasabbra értékelt társasjátéka.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Helvetica-Neue-Condensed-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Lato-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <!-- start popup -->
      <div class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Játékainkat 18 éven felüli FELNŐTT közönségnek szánjuk. Kattintson
            Elfogadva az életkor igazolására.</p>
          <button class="popup__button">Elfogadott</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero hero_2">
        <div class="hero__container hero__container_2 container">
          <div class="hero__descr">
            <h1 class="hero__title hero__title_2 tt-2">
              Kapcsolatok
            </h1>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <div class="contacts__content">
            <div class="contacts__left">
              <p class="contacts__text contacts__text_2  tt-4">
                A játék megrendeléséhez töltse ki az űrlapot
              </p>
              <form class="form form_2" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Név..." required>
                  <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Levél..." required>
                </div>
                <button class="form__button but-1" type="submit">
                  Küld
                </button>
              </form>
            </div>
            <div class="contacts__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/contacts-2.webp" type="image/webp">
                <img src="./img/contacts-2.jpg" loading="lazy" width="544" height="272" alt="Image">
              </picture>
            </div>
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