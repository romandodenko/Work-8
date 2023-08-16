<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="НBiuro podróży - specjalizuje się w organizowaniu wycieczek po Europie. Rezerwuj teraz!">
  <meta property="og:site_name"
    content="Oferujemy gorące wycieczki, które obejmują najbardziej znane atrakcje. Nasza agencja zawsze oferuje indywidualne podejście do każdego klienta.">
  <meta property="og:url" content="polskieslotoclub.com">
  <meta property="og:image" content="polskieslotoclub.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="НBiuro podróży - specjalizuje się w organizowaniu wycieczek po Europie. Rezerwuj teraz!">
  <meta name="twitter:description"
    content="Oferujemy gorące wycieczki, które obejmują najbardziej znane atrakcje. Nasza agencja zawsze oferuje indywidualne podejście do każdego klienta.">
  <meta name="twitter:site" content="polskieslotoclub.com">
  <meta name="twitter:image" content="polskieslotoclub.com/main.png">
  <meta name="description"
    content="Oferujemy gorące wycieczki, które obejmują najbardziej znane atrakcje. Nasza agencja zawsze oferuje indywidualne podejście do każdego klienta.">
  <title>НBiuro podróży - specjalizuje się w organizowaniu wycieczek po Europie. Rezerwuj teraz!</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Spartan-Black.woff2" as="font" type="font/woff2" crossorigin>
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
        <div class="contacts__image">
          <picture>
            <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
            <img src="./img/contacts.jpg" loading="lazy" width="590" height="338" alt="Image">
          </picture>
        </div>
        <div class="contacts__descr">
          <h1 class="contacts__title tt-3">
            Rezerwuj teraz!
          </h1>
          <p class="contacts__text tx-1">
            Wypełnij formularz, a my skontaktujemy się z Tobą, aby opowiedzieć Ci więcej o każdej wycieczce i
            odpowiedzieć na wszystkie Twoje pytania.
          </p>
          <form class="form" action="#!" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Nazwa..." required>
              <input class="form__input tx-1" type="email" name="email" id="email" placeholder="E-mail..." required>
            </div>
            <button class="form__button but-1" type="submit">
              Wysłać
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