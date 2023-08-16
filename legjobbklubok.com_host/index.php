<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="A Monopoly egy népszerű társasjáték, amely stratégiai gondolkodást igényel.">
  <meta property="og:site_name"
    content="A Monopoly egy klasszikus társasjáték, amely lehetővé teszi a játékosoknak, hogy ingatlanvállalkozói szerepet töltsenek be. A játék célja, hogy a leggazdagabb játékos legyen">
  <meta property="og:url" content="legjobbklubok.com">
  <meta property="og:image" content="legjobbklubok.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="A Monopoly egy népszerű társasjáték, amely stratégiai gondolkodást igényel.">
  <meta name="twitter:description"
    content="A Monopoly egy klasszikus társasjáték, amely lehetővé teszi a játékosoknak, hogy ingatlanvállalkozói szerepet töltsenek be. A játék célja, hogy a leggazdagabb játékos legyen">
  <meta name="twitter:site" content="legjobbklubok.com">
  <meta name="twitter:image" content="legjobbklubok.com/main.png">
  <meta name="description"
    content="A Monopoly egy klasszikus társasjáték, amely lehetővé teszi a játékosoknak, hogy ingatlanvállalkozói szerepet töltsenek be. A játék célja, hogy a leggazdagabb játékos legyen">
  <title>A Monopoly egy népszerű társasjáték, amely stratégiai gondolkodást igényel.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Tahoma-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__left">
            <h1 class="hero__title tt-1">
              Monopólium
            </h1>
            <h2 class="hero__subtitle tt-3">
              Népszerű társasjáték
            </h2>
            <div class="hero__texts">
              <p class="hero__text tx-1">
                Ez a játék a játék értékelésének tetején áll. A játék ezen továbbfejlesztett verziójában új, izgalmas
                funkciókat és jobb játékélményt találsz.
              </p>
            </div>
            <ul class="hero__list">
              <li class="hero__item">
                <a class="hero__link but-1" href="#about">
                  Játék leírása
                </a>
              </li>
              <li class="hero__item">
                <a class="hero__link but-1" href="pravila.php">
                  Játékszabályok
                </a>
              </li>
            </ul>
          </div>
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp" type="image/webp">
              <img src="./img/hero.png" loading="lazy" width="638" height="426" alt="Image">
            </picture>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-2">
            A játékról
          </h2>
          <div class="about__content">
            <div class="about__texts">
              <p class="about__text tx-1">
                A "Monopoly" játék új verziója a legjobb fejlesztőktől izgalmas utazás az üzleti világba. Ezt a verziót
                kifejezetten úgy hozták létre, hogy még a legkifinomultabb játékosok kedvében járjon. A klasszikus
                szórakozást és a realizmust ötvözi, új játékelemekkel adva hozzá.
                Vállalja a kihívást, és versenyezzen barátaival vagy családjával, hogy a leggazdagabb és legsikeresebb
                ingatlantulajdonos legyen. Nehéz döntéseket kell hoznod ingatlanod vásárlásával, eladásával és
                fejlesztésével kapcsolatban, és minden döntésed hatással lesz a játékban elért sikeredre.
              </p>
            </div>
            <div class="about__texts">
              <p class="about__text tx-1">
                Merüljön el a nagy tétek, a kiszámíthatatlan üzletek és a számos lehetőség világában. A Monopoly ezen
                verziójában bevezetett új elemek és szabályok még azok számára is frissebbé és érdekesebbé teszik, akik
                már ismerik a játékot. Bizonyítsd be képességeidet, és szerezd meg a neved a legjobb játékosok között
                azzal, hogy a Monopoly világában páratlan üzleti tehetséggel rendelkezel.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start mnenie -->
      <section class="mnenie">
        <div class="container">
          <h2 class="mnenie__title tt-2">
            Vélemények
          </h2>
          <div class="mnenie__content">
            <div class="mnenie-slider mnenie-swlider-init swiper">
              <div class="swiper-wrapper">
                <div class="mnenie-slider__slide swiper-slide">
                  <div class="mnenie-slider__top">
                    <div class="mnenie-slider__name tt-4">
                      Henrik Pintér
                    </div>
                    <div class="mnenie-slider__rating tx-1">
                      <img src="./img/like.svg" loading="lazy" width="24" height="24" alt="Like">
                      5.0
                    </div>
                  </div>
                  <div class="mnenie-slider__texts">
                    <p class="mnenie-slider__text tx-1">
                      A Monopoly játék új verziója a legjobb fejlesztőktől lenyűgözött eredetiségével és innovatív
                      elemeivel. Új szabályokat és felújított játékmenetet tartalmaz, amely szórakoztató játékélményt
                      biztosít.
                    </p>
                  </div>
                </div>
                <div class="mnenie-slider__slide swiper-slide">
                  <div class="mnenie-slider__top">
                    <div class="mnenie-slider__name tt-4">
                      Nándor Sipos
                    </div>
                    <div class="mnenie-slider__rating tx-1">
                      <img src="./img/like.svg" loading="lazy" width="24" height="24" alt="Like">
                      5.0
                    </div>
                  </div>
                  <div class="mnenie-slider__texts">
                    <p class="mnenie-slider__text tx-1">
                      Hihetetlen, hogy a legjobb fejlesztőktől származó Monopoly milyen modern és releváns lett. Ez a
                      verzió alkalmas a családdal és a barátokkal való játékra, és mindenkit leköt, aki minőségi és
                      izgalmas játékélményre vágyik.
                    </p>
                  </div>
                </div>
                <div class="mnenie-slider__slide swiper-slide">
                  <div class="mnenie-slider__top">
                    <div class="mnenie-slider__name tt-4">
                      Ervin Hegedűs
                    </div>
                    <div class="mnenie-slider__rating tx-1">
                      <img src="./img/like.svg" loading="lazy" width="24" height="24" alt="Like">
                      5.0
                    </div>
                  </div>
                  <div class="mnenie-slider__texts">
                    <p class="mnenie-slider__text tx-1">
                      Lelkettek a Monopolyban a legjobb fejlesztők által biztosított új funkciókért. A játék grafikája
                      és összetevői jelentősen javultak, és az új fejlett szempontok még érdekesebbé tették a
                      játékmenetet
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="mnenie__controls">
              <button class="mnenie__button mnenie-slider-prev">
                <img src="./img/arrow.svg" loading="lazy" width="56" height="56" alt="Arrow">
              </button>
              <div class="mnenie__nums tx-1">
              </div>
              <button class="mnenie__button mnenie-slider-next">
                <img src="./img/arrow.svg" loading="lazy" width="56" height="56" alt="Arrow">
              </button>
            </div>
          </div>
          <div class="mnenie__bottom">
            <a class="mnenie__link but-2" href="mnenie.php">
              Olvassa el az összeset
            </a>
          </div>
        </div>
      </section>
      <!-- end mnenie -->

      <!-- start jacke -->
      <section class="jacke">
        <div class="container">
          <h2 class="jacke__title tt-2">
            Játékszabályok
          </h2>
          <ul class="jacke__list">
            <li class="jacke__item">
              <div class="jacke__name tx-2">
                Továbbfejlesztett ingatlan
              </div>
              <div class="jacke__texts">
                <p class="jacke__text tx-1">
                  A játék új verziójában lehetőséged nyílik jobb minőségű ingatlan vásárlására és fejlesztésére. Nemcsak
                  hétköznapi házakat és szállodákat építhet, hanem modern felhőkarcolókat és luxusszállodákat is. Az
                  ilyen befektetések segítenek több pénzt felhalmozni és növelni a helyezést a játékban.
                </p>
              </div>
            </li>
            <li class="jacke__item">
              <div class="jacke__name tx-2">
                Versenyek és rangsorok
              </div>
              <div class="jacke__texts">
                <p class="jacke__text tx-1">
                  Az új a legjobbak közül versenyeket kínál a legjobb játékosok meghatározására. A játékban elfoglalt
                  helyezésed nem csak a pénzügyi sikereidtől függ, hanem a kereskedési és stratégiai készségeidtől is. A
                  nyerés-veszteség százalékos aránya és az ingatlanban lévő ingatlan mennyisége befolyásolja az
                  értékelését.
                </p>
              </div>
            </li>
          </ul>
          <a class="jacke__link but-1" href="pravila.php">
            Olvassa el az összeset
          </a>
        </div>
      </section>
      <!-- end jacke -->

      <!-- start contacts -->
      <section class="contacts">
        <div class="contacts__container container">
          <div class="contacts__left">
            <div class="contacts__texts">
              <p class="contacts__text tx-1">
                Töltse ki az űrlapot a játék megrendeléséhez, és felvesszük Önnel a kapcsolatot
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Név..." required>
              <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Email..." required>
              <button class="form__button but-1" type="submit">
                Küld
              </button>
            </form>
          </div>
          <h2 class="contacts__title tt-5">
            Rendelje meg a Monopolyt most
          </h2>
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