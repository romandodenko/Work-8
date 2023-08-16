<!DOCTYPE html>
<html lang="no">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Bergen Bors Hotel er det beste hotellet med flott byutsikt i Norge.">
  <meta property="og:site_name"
    content="Bergen Bors Hotel er et av de beste hotellene i Bergen by. Hotellet er nytt og moderne, og gir gjestene det høyeste nivået av komfort.">
  <meta property="og:url" content="offisiell-spilleautomat.com">
  <meta property="og:image" content="offisiell-spilleautomat.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bergen Bors Hotel er det beste hotellet med flott byutsikt i Norge.">
  <meta name="twitter:description"
    content="Bergen Bors Hotel er et av de beste hotellene i Bergen by. Hotellet er nytt og moderne, og gir gjestene det høyeste nivået av komfort.">
  <meta name="twitter:site" content="offisiell-spilleautomat.com">
  <meta name="twitter:image" content="offisiell-spilleautomat.com/main.png">
  <meta name="description"
    content="Bergen Bors Hotel er et av de beste hotellene i Bergen by. Hotellet er nytt og moderne, og gir gjestene det høyeste nivået av komfort.">
  <title>Bergen Bors Hotel er det beste hotellet med flott byutsikt i Norge.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/SofiaSans-Black.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/SofiaSans-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
          <p class="popup__text">Spillene våre er beregnet på et VOKSENt publikum over 18 år. Klikk
            Akseptert for å bekrefte alderen din.</p>
          <button class="popup__button">Akseptert</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__left">
            <h1 class="hero__title tt-1">
              Bergen Bors Hotel
            </h1>
            <p class="hero__text tx-2">
              Velkommen til vårt femstjerners hotell i Norge! Vi setter vår ære i å tilby våre gjester den beste
              servicen og komforten for å gjøre oppholdet deres uforglemmelig.
            </p>
            <a class="hero__link but-1" href="rom.php">
              Rom
            </a>
          </div>
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp" type="image/webp">
              <img src="./img/hero.jpg" loading="lazy" width="300" height="300" alt="image">
            </picture>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-2">
            Om oss
          </h2>
          <div class="about__content">
            <div class="about__descr">
              <p class="about__text tx-1">
                Hotellet vårt er et av de nyeste og mest luksuriøse i Norge. Vi har investert i den nyeste teknologien
                og moderne design for å skape en moderne og elegant atmosfære for våre gjester. Våre rom og suiter er
                utstyrt med alt du trenger for et komfortabelt opphold, inkludert komfortable senger, luksuriøse bad og
                toppmoderne teknologi.
              </p>
              <p class="about__text tx-1">
                Sikkerheten til våre gjester er vår prioritet. Vi gir et høyt sikkerhetsnivå med brannsikringssystemer,
                videoovervåking og 24-timers sikkerhetstjeneste. I tillegg gjennomgår personalet vårt strenge utvalg og
                opplæring for å sikre sikkerheten og komforten til hver gjest.
              </p>
              <p class="about__text tx-1">
                Våre restauranter serverer de beste lokale og internasjonale retter for å tilfredsstille de mest
                sofistikerte smaker. Vi tilbyr et bredt utvalg av gastronomiske alternativer, mulighet for bestilling av
                måltider på rommet, samt en unik restaurantopplevelse med vakker utsikt over naturen rundt.
              </p>
              <p class="about__text tx-1">
                I tillegg har vi spa, treningsrom og andre fasiliteter som gir gjestene mulighet til å slappe av og ta
                vare på helsen.
              </p>
              <p class="about__text tx-1">
                Vi streber etter å gi våre gjester en unik og uforglemmelig opplevelse på høyeste nivå. Vi garanterer at
                ditt opphold på hotellet vil bli eksepsjonelt og minneverdig.
              </p>
            </div>
            <div class="about__images">
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about-1.webp" type="image/webp">
                  <img src="./img/about-1.jpg" loading="lazy" width="300" height="300" alt="image">
                </picture>
              </div>
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about-2.webp" type="image/webp">
                  <img src="./img/about-2.jpg" loading="lazy" width="300" height="300" alt="image">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start hotelroom -->
      <section class="hotelroom">
        <div class="container">
          <h2 class="hotelroom__title tt-2">
            Hotellrom
          </h2>
          <ul class="hotelroom__list">
            <li class="hotelroom__item">
              <div class="hotelroom__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                  <img src="./img/hotel-1.jpg" loading="lazy" width="300" height="300" alt="image">
                </picture>
              </div>
              <h3 class="hotelroom__subtitlte tt-3">
                Suite med havneutsikt
              </h3>
            </li>
            <li class="hotelroom__item">
              <div class="hotelroom__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                  <img src="./img/hotel-2.jpg" loading="lazy" width="300" height="300" alt="image">
                </picture>
              </div>
              <h3 class="hotelroom__subtitlte tt-3">
                Juniorsuite med byutsikt
              </h3>
            </li>
            <li class="hotelroom__item">
              <div class="hotelroom__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-3.webp" type="image/webp">
                  <img src="./img/hotel-3.jpg" loading="lazy" width="300" height="300" alt="image">
                </picture>
              </div>
              <h3 class="hotelroom__subtitlte tt-3">
                Deluxe-rom med utsikt over byen
              </h3>
            </li>
          </ul>
          <a class="hotelroom__link but-1" href="rom.php">
            Les mer
          </a>
        </div>
      </section>
      <!-- end hotelroom -->

      <!-- start restorans -->
      <section class="restorans">
        <div class="container">
          <h2 class="restorans__title tt-2">
            Restauranter
          </h2>
          <div class="restorans-item">
            <div class="restorans-item__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/restorans-1.webp" type="image/webp">
                <img src="./img/restorans-1.jpg" loading="lazy" width="300" height="300" alt="image">
              </picture>
            </div>
            <div class="restorans-item__descr">
              <h3 class="restorans-item__title tt-2">
                Hall of mualals
              </h3>
              <div class="restorans-item__texts">
                <p class="restorans-item__text restorans-item__text_2 tx-1">
                  Den nye og imponerende historiske bygningen til den tidligere børsen legemliggjør trygghet og
                  attraktivitet. Kombinasjonen av gammelt og moderne konsept gjør det til et av de beste stedene i
                  Bergen. Åpnet i mai 2022, blir det raskt populært blant besøkende. Inne blir du møtt av vakre fresker
                  laget av Axel Revold, som skildrer beau monde-samfunnet.
                </p>
              </div>
              <div class="restorans-item__item">
                <h4 class="restorans-item__subtitle tx-2">
                  Åpningstider frokost:
                </h4>
                <div class="restorans-item__item-texts">
                  <p class="restorans-item__text tx-1">
                    Mandag - fredag: 07:00 - 10:00
                  </p>
                  <p class="restorans-item__text tx-1">
                    Lørdag - søndag: kl. 08.00 - 11.00
                  </p>
                </div>
              </div>
              <div class="restorans-item__item">
                <h4 class="restorans-item__subtitle tx-2">
                  Restaurantens åpningstider:
                </h4>
                <div class="restorans-item__item-texts">
                  <p class="restorans-item__text tx-1">
                    Mandag - søndag: 12.00 - 22.00
                  </p>
                </div>
              </div>
              <a class="restorans-item__link but-1" href="restorans.php">
                Lengre
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- end restorans -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>