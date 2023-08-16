<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Kruisherenhotel Maastricht is een van de eerste en nieuwste hotels. Boek nu een kamer.">
  <meta property="og:site_name"
    content="Het hotel staat hoog aangeschreven en heeft veel positieve recensies van gasten ontvangen. Vanwege de architectuur wordt het beschouwd als een van de beste hotels in de regio.">
  <meta property="og:url" content="club-groot-succes.com">
  <meta property="og:image" content="club-groot-succes.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Kruisherenhotel Maastricht is een van de eerste en nieuwste hotels. Boek nu een kamer.">
  <meta name="twitter:description"
    content="Het hotel staat hoog aangeschreven en heeft veel positieve recensies van gasten ontvangen. Vanwege de architectuur wordt het beschouwd als een van de beste hotels in de regio.">
  <meta name="twitter:site" content="club-groot-succes.com">
  <meta name="twitter:image" content="club-groot-succes.com/main.png">
  <meta name="description"
    content="Het hotel staat hoog aangeschreven en heeft veel positieve recensies van gasten ontvangen. Vanwege de architectuur wordt het beschouwd als een van de beste hotels in de regio.">
  <title>Kruisherenhotel Maastricht is een van de eerste en nieuwste hotels. Boek nu een kamer.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Philosopher-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Questrial-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <div class="contacts__images">
            <div class="contacts__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/contacts-1.webp" type="image/webp">
                <img src="./img/contacts-1.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
            <div class="contacts__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/contacts-2.webp" type="image/webp">
                <img src="./img/contacts-2.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
          </div>
          <div class="contacts__right">
            <h1 class="contacts__title tt-2">
              Boek nu een kamer
            </h1>
            <p class="contacts__text tx-2">
              Je hebt nu een geweldige kans om een ​​kamer in ons hotel te boeken! Mis de kans niet op een onvergetelijk
              verblijf in een van onze luxe kamers, waar u gezelligheid, comfort en uitzonderlijke service vindt.
            </p>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Naam..." required>
                <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Mail..." required>
              </div>
              <button class="form__button but-1" type="submit">
                Versturen
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