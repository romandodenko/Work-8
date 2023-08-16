<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Kruisherenhotel Maastricht is een van de eerste en nieuwste hotels.">
  <meta property="og:site_name"
    content="Het hotel staat hoog aangeschreven en heeft veel positieve recensies van gasten ontvangen. Vanwege de architectuur wordt het beschouwd als een van de beste hotels in de regio.">
  <meta property="og:url" content="club-groot-succes.com">
  <meta property="og:image" content="club-groot-succes.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Kruisherenhotel Maastricht is een van de eerste en nieuwste hotels.">
  <meta name="twitter:description"
    content="Het hotel staat hoog aangeschreven en heeft veel positieve recensies van gasten ontvangen. Vanwege de architectuur wordt het beschouwd als een van de beste hotels in de regio.">
  <meta name="twitter:site" content="club-groot-succes.com">
  <meta name="twitter:image" content="club-groot-succes.com/main.png">
  <meta name="description"
    content="Het hotel staat hoog aangeschreven en heeft veel positieve recensies van gasten ontvangen. Vanwege de architectuur wordt het beschouwd als een van de beste hotels in de regio.">
  <title>Kruisherenhotel Maastricht is een van de eerste en nieuwste hotels.</title>
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
      <!-- start popup -->
      <div class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Onze spellen zijn bedoeld voor een VOLWASSEN publiek ouder dan 18 jaar. Klik
            Geaccepteerd om uw leeftijd te verifiëren.</p>
          <button class="popup__button">Geaccepteerd</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <h1 class="hero__title tt-1">
              Kruisherenhotel Maastricht
            </h1>
            <p class="hero__text tx-2">
              Een uitstekende keuze voor een vakantie in Zweden, stijlvolle kamers met designrenovatie waar u zich op uw
              gemak zult voelen en een avondcasino met Zweedse slots.
            </p>
            <a class="hero__link but-1" href="kamers.php">
              Kamers
            </a>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start kamers -->
      <section class="kamers">
        <div class="container">
          <h2 class="kamers__title tt-2">
            Kamers
          </h2>
          <ul class="kamers__list">
            <li class="kamers__item">
              <div class="kamers__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kamers-1.webp" type="image/webp">
                  <img src="./img/kamers-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="kamers__descr">
                <h3 class="kamers__subtitle tt-3">
                  Junior suite
                </h3>
                <div class="kamers__gasten tx-1">
                  <img src="./img/icon.svg" loading="lazy" width="30" height="30" alt="icon">
                  2 gasten
                </div>
                <p class="kamers__text tx-1">
                  De allereerste indrukken van een hotel in Nederland, wanneer gasten worden gevraagd om een ​​junior
                  suite te boeken, kunnen alleen maar positief zijn.
                </p>
              </div>
            </li>
            <li class="kamers__item">
              <div class="kamers__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kamers-2.webp" type="image/webp">
                  <img src="./img/kamers-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="kamers__descr">
                <h3 class="kamers__subtitle tt-3">
                  Historische suite
                </h3>
                <div class="kamers__gasten tx-1">
                  <img src="./img/icon.svg" loading="lazy" width="30" height="30" alt="icon">
                  3 gasten
                </div>
                <p class="kamers__text tx-1">
                  Wanneer gasten worden uitgenodigd om de Historic Suite te boeken in dit hotel in Nederland, zijn de
                  eerste indrukken overweldigend.
                </p>
              </div>
            </li>
          </ul>
          <a class="kamers__link but-1" href="kamers.php">
            Alle kamers
          </a>
        </div>
      </section>
      <!-- end kamers -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__descr">
            <h2 class="about__title tt-1">
              Over ons
            </h2>
            <div class="about__texts">
              <p class="about__text tx-1">
                De allereerste indrukken van het Kruisherenhotel Maastricht in Nederland laten u nooit onverschillig.
                Dit nieuwe en moderne hotel staat hoog aangeschreven en wordt beschouwd als een van de beste in de
                regio.
              </p>
              <p class="about__text tx-1">
                Kruisherenhotel Maastricht is uniek door zijn ligging in een voormalig middeleeuws klooster, dat een
                sfeer van luxueus historisch erfgoed creëert, een combinatie van moderne interieurs en voorzieningen.
                Vanaf de eerste minuut van aankomst zullen gasten onder de indruk zijn van de elegantie en schoonheid
                van de architectuur van dit gebouw.
              </p>
              <p class="about__text tx-1">
                Het hotel biedt verschillende soorten kamers, elk met zijn eigen persoonlijkheid en charme. Elke kamer
                heeft alles wat u nodig heeft voor een comfortabel verblijf, inclusief stijlvol en modern meubilair, een
                ruime en comfortabele slaapkamer en een luxe badkamer.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start gallery -->
      <section class="gallery">
        <div class="container">
          <h2 class="gallery__title tt-2">
            Galerij
          </h2>
          <div class="gallery__item">
            <div class="gallery__left">
              <div class="gallery__image gallery__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-1.webp" type="image/webp">
                  <img src="./img/gallery-1.jpg" loading="lazy" width="300" height="300" alt="gallery">
                </picture>
              </div>
            </div>
            <div class="gallery__right">
              <div class="gallery__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-2.webp" type="image/webp">
                  <img src="./img/gallery-2.jpg" loading="lazy" width="300" height="300" alt="gallery">
                </picture>
              </div>
              <div class="gallery__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-3.webp" type="image/webp">
                  <img src="./img/gallery-3.jpg" loading="lazy" width="300" height="300" alt="gallery">
                </picture>
              </div>
              <div class="gallery__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-4.webp" type="image/webp">
                  <img src="./img/gallery-4.jpg" loading="lazy" width="300" height="300" alt="gallery">
                </picture>
              </div>
              <div class="gallery__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-5.webp" type="image/webp">
                  <img src="./img/gallery-5.jpg" loading="lazy" width="300" height="300" alt="gallery">
                </picture>
              </div>
            </div>
          </div>
          <a class="gallery__link but-1" href="gallery.php">
            Bekijk meer
          </a>
        </div>
      </section>
      <!-- end gallery -->

      <!-- start contacts -->
      <section class="contacts">
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
            <h2 class="contacts__title tt-2">
              Boek nu een kamer
            </h2>
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