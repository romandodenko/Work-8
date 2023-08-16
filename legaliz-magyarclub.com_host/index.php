<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Das allererste und eines der besten Hotels ist das Grand Budapest Hotel.">
  <meta property="og:site_name"
    content="Mitten im Stadtzentrum gelegen, besticht dieses Hotel durch seinen Luxus. Das Grand Budapest Hotel bietet eine große Auswahl an luxuriösen Zimmern, von klassischen bis hin zu geräumigen Suiten.">
  <meta property="og:url" content="legaliz-magyarclub.com">
  <meta property="og:image" content="legaliz-magyarclub.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Das allererste und eines der besten Hotels ist das Grand Budapest Hotel.">
  <meta name="twitter:description"
    content="Mitten im Stadtzentrum gelegen, besticht dieses Hotel durch seinen Luxus. Das Grand Budapest Hotel bietet eine große Auswahl an luxuriösen Zimmern, von klassischen bis hin zu geräumigen Suiten.">
  <meta name="twitter:site" content="legaliz-magyarclub.com">
  <meta name="twitter:image" content="legaliz-magyarclub.com/main.png">
  <meta name="description"
    content="Mitten im Stadtzentrum gelegen, besticht dieses Hotel durch seinen Luxus. Das Grand Budapest Hotel bietet eine große Auswahl an luxuriösen Zimmern, von klassischen bis hin zu geräumigen Suiten.">
  <title>Das allererste und eines der besten Hotels ist das Grand Budapest Hotel.</title>
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
          <div class="hero__images">
            <div class="hero__image hero__image_1">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/hero-1.webp" type="image/webp">
                <img src="./img/hero-1.png" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
          </div>
          <div class="hero__right">
            <h1 class="hero__title tt-1">
              Minaro Hotel Tokaj
            </h1>
            <div class="hero__content">
              <div class="hero__image hero__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hero-2.webp" type="image/webp">
                  <img src="./img/hero-2.png" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="hero__descr">
                <p class="hero__text tx-1">
                  Magyarországi szállodánk büszke arra, hogy a régió legelső és legjobb szobáit kínálja. Minden szobánk
                  vadonatúj, és a legmagasabb szintű kényelem és luxus szerint lett kialakítva.
                </p>
                <ul class="hero__list">
                  <li class="hero__item">
                    <a class="hero__link  hero__link_1 but-1" href="#about">
                      Rólunk
                    </a>
                  </li>
                  <li class="hero__item">
                    <a class="hero__link hero__link_2 but-2" href="nomers.php">
                      Szállodai szobák
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__left">
            <h2 class="about__title tt-2">
              A szállodánkról
            </h2>
            <div class="about__texts">
              <p class="about__text tx-1">
                Szobák széles választékát kínáljuk vendégeink különböző preferenciáinak megfelelően. Minden szoba modern
                belső terekkel, elegáns dizájnnal és kényelmes bútorokkal rendelkezik. Szobáink ágyai hibátlan alvást
                biztosítanak, a puha ágynemű és a prémium márkájú párnák pedig extra kényelmet biztosítanak.
              </p>
              <p class="about__text tx-1">
                Fürdőszobáink minden kényelemmel felszereltek, amelyekre szüksége lehet, beleértve az új berendezési
                tárgyakat, a tágas zuhanyzókat vagy kádakat és a kiváló minőségű kozmetikumokat. Mindez tökéletes
                légkört teremt a kikapcsolódáshoz egy hosszú nap után.
              </p>
              <p class="about__text tx-1">
                Szállodánk emellett olyan csúcsminőségű létesítményeket is kínál, mint például ínyenc éttermek,
                gyógyfürdők különféle kezelésekkel és kikapcsolódási tevékenységekkel, valamint korszerű edzőtermek és
                úszómedencék.
              </p>
            </div>
          </div>
          <div class="about__images">
            <div class="about__image about__image_1">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about-1.webp" type="image/webp">
                <img src="./img/about-1.png" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
            <div class="about__image about__image_2">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about-2.webp" type="image/webp">
                <img src="./img/about-2.png" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start nomers -->
      <section class="nomers">
        <div class="container">
          <div class="nomers__content">
            <h2 class="nomers__title tt-2">
              Szállodai szobák
            </h2>
            <ul class="nomers__list">
              <li class="nomers__item">
                <div class="nomers__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                    <img src="./img/hotel-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </div>
                <h3 class="nomers__subtitle tt-3">
                  Superior szoba
                </h3>
              </li>
              <li class="nomers__item">
                <div class="nomers__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                    <img src="./img/hotel-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </div>
                <h3 class="nomers__subtitle tt-3">
                  Deluxe szoba
                </h3>
              </li>
              <li class="nomers__item">
                <div class="nomers__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/hotel-3.webp" type="image/webp">
                    <img src="./img/hotel-3.jpg" loading="lazy" width="300" height="300" alt="Image">
                  </picture>
                </div>
                <h3 class="nomers__subtitle tt-3">
                  Junior lakosztály
                </h3>
              </li>
            </ul>
            <a class="nomers__link but-1" href="nomers.php">
              Rólunk
            </a>
          </div>
        </div>
      </section>
      <!-- end nomers -->

      <!-- start gallery -->
      <section class="gallery">
        <div class="container">
          <h2 class="gallery__title tt-2">
            Képtár
          </h2>
          <ul class="gallery__list">
            <li class="gallery__item">
              <div class="gallery__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-1.webp" type="image/webp">
                  <img src="./img/gallery-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="gallery__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-2.webp" type="image/webp">
                  <img src="./img/gallery-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="gallery__image gallery__image_n">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-3.webp" type="image/webp">
                  <img src="./img/gallery-3.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
            </li>
            <li class="gallery__item gallery__item_2">
              <div class="gallery__image gallery__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-4.webp" type="image/webp">
                  <img src="./img/gallery-4.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="gallery__image gallery__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-5.webp" type="image/webp">
                  <img src="./img/gallery-5.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
            </li>
          </ul>
          <a class="gallery__link but-1" href="gallery.php">
            Mutasd az összeset
          </a>
        </div>
      </section>
      <!-- end gallery -->

      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <h2 class="contacts__title tt-2">
            Iratkozzon fel ránk
          </h2>
          <p class="contacts__text tx-1">
            Iratkozzon fel frissítéseinkre, és értesüljön a legjobb és legfrissebb híreinkről
          </p>
          <form class="form" action="#!" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Név..." required>
              <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Levél..." required>
            </div>
            <button class="form__button but-1" type="submit">
              Küld
            </button>
          </form>
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