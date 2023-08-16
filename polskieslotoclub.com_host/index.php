<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="НBiuro podróży - specjalizuje się w organizowaniu wycieczek po Europie.">
  <meta property="og:site_name"
    content="Oferujemy gorące wycieczki, które obejmują najbardziej znane atrakcje. Nasza agencja zawsze oferuje indywidualne podejście do każdego klienta.">
  <meta property="og:url" content="polskieslotoclub.com">
  <meta property="og:image" content="polskieslotoclub.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="НBiuro podróży - specjalizuje się w organizowaniu wycieczek po Europie.">
  <meta name="twitter:description"
    content="Oferujemy gorące wycieczki, które obejmują najbardziej znane atrakcje. Nasza agencja zawsze oferuje indywidualne podejście do każdego klienta.">
  <meta name="twitter:site" content="polskieslotoclub.com">
  <meta name="twitter:image" content="polskieslotoclub.com/main.png">
  <meta name="description"
    content="Oferujemy gorące wycieczki, które obejmują najbardziej znane atrakcje. Nasza agencja zawsze oferuje indywidualne podejście do każdego klienta.">
  <title>НBiuro podróży - specjalizuje się w organizowaniu wycieczek po Europie.</title>
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
      <!-- start popup -->
      <div class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Nasze gry są przeznaczone dla odbiorców DOROSŁYCH w wieku powyżej 18 lat. Kliknij
            Zaakceptowano, aby zweryfikować Twój wiek.</p>
          <button class="popup__button">Przyjęty</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <div class="hero__descr-top">
              <h1 class="hero__title tt-1">
                Agencja Turystyczna
              </h1>
              <a class="hero__link but-1" href="#about">
                O nas
              </a>
            </div>
            <p class="hero__text tx-1">
              Biuro podróży z wysoką oceną i specjalizacją w wycieczkach europejskich oferuje swoim klientom pierwsze i
              najgorętsze wyjazdy.
            </p>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-2">
            O nas
          </h2>
          <div class="about__content">
            <div class="about__left">
              <p class="about__text about__text_2 tt-4">
                Agencja jest jedną z najlepszych w branży i znana jest ze swojego profesjonalizmu i doskonałego poziomu
                usług
              </p>
              <div class="about__texts">
                <p class="about__text tx-1">
                  Wysoko oceniana agencja słynie z bogatego portfolio europejskich wycieczek, w tym najbardziej
                  popularnych i fascynujących miast i atrakcji. Starannie wybierają najlepsze trasy i oferują wyjątkowe
                  wrażenia dla każdego podróżnika.
                </p>
                <p class="about__text tx-1">
                  Gorące wycieczki oferowane przez agencję to wyjazdy pełne przygód i niezapomnianych wrażeń. Klienci
                  mogą cieszyć się tętniącymi życiem wydarzeniami kulturalnymi, kultowymi zabytkami i najnowocześniejszą
                  rozrywką, dzięki którym każda podróż będzie niezapomniana.
                </p>
              </div>
            </div>
            <div class="about__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about.webp" type="image/webp">
                <img src="./img/about.jpg" loading="lazy" width="694" height="415" alt="Image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start grypowe -->
      <section class="grypowe">
        <div class="container">
          <h2 class="grypowe__title tt-2">
            Wycieczki grupowe
          </h2>
          <div class="grypowe__content">
            <div class="grypowe__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/grypove-1.webp" type="image/webp">
                <img src="./img/grypove-1.jpg" loading="lazy" width="590" height="459" alt="Image">
              </picture>
            </div>
            <div class="grypowe__descr">
              <h3 class="grypowe__subtitle tt-3">
                Cypr
              </h3>
              <div class="grypowe__descr-top">
                <div class="grypowe__data tx-1">
                  Czas trwania
                </div>
                <div class="grypowe__data grypowe__data_2 tx-2">
                  10 dni
                </div>
              </div>
              <div class="grypowe__texts">
                <p class="grypowe__text tx-1">
                  Odkryj magię Cypru dzięki naszej wysoko ocenianej wycieczce grupowej, która będzie pierwszą na Twojej
                  liście priorytetów! Zanurz się w atmosferze tego gorącego miejsca, gdzie czekają na Ciebie niesamowite
                  plaże, bogata kultura i piękna przyroda.
                </p>
              </div>
              <a class="grypowe__link but-1" href="grupove.php">
                Wszystkie wycieczki
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- end grypowe -->

      <!-- start slyzbowe -->
      <section class="slyzbowe">
        <div class="container">
          <h2 class="slyzbowe__title tt-2">
            Wyjazdy służbowe
          </h2>
          <div class="slyzbowe__head">
            <p class="slyzbowe__text tx-1">
              Nasze biuro podróży oferuje nie tylko wyjazdy wypoczynkowe, ale także organizuje wyjazdy służbowe.
            </p>
            <a class="slyzbowe__link but-1" href="sluzpove.php">
              Wszystkie wycieczki
            </a>
          </div>
          <ul class="slyzbowe__list">
            <li class="slyzbowe__item">
              <div class="slyzbowe__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/sluzbove-1.webp" type="image/webp">
                  <img src="./img/sluzbove-1.jpg" loading="lazy" width="383" height="379" alt="Image">
                </picture>
              </div>
              <div class="slyzbowe__descr">
                <h3 class="slyzbowe__subtitle tt-4">
                  Niemcy
                </h3>
                <div class="slyzbowe__dates">
                  <div class="slyzbowe__date tx-1">
                    Czas trwania
                  </div>
                  <div class="slyzbowe__date slyzbowe__date_2 tx-2">
                    7 dni
                  </div>
                </div>
              </div>
            </li>
            <li class="slyzbowe__item">
              <div class="slyzbowe__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/sluzbove-2.webp" type="image/webp">
                  <img src="./img/sluzbove-2.jpg" loading="lazy" width="383" height="379" alt="Image">
                </picture>
              </div>
              <div class="slyzbowe__descr">
                <h3 class="slyzbowe__subtitle tt-4">
                  Czech
                </h3>
                <div class="slyzbowe__dates">
                  <div class="slyzbowe__date tx-1">
                    Czas trwania
                  </div>
                  <div class="slyzbowe__date slyzbowe__date_2 tx-2">
                    3 dni
                  </div>
                </div>
              </div>
            </li>
            <li class="slyzbowe__item">
              <div class="slyzbowe__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/sluzbove-3.webp" type="image/webp">
                  <img src="./img/sluzbove-3.jpg" loading="lazy" width="383" height="379" alt="Image">
                </picture>
              </div>
              <div class="slyzbowe__descr">
                <h3 class="slyzbowe__subtitle tt-4">
                  Austria
                </h3>
                <div class="slyzbowe__dates">
                  <div class="slyzbowe__date tx-1">
                    Czas trwania
                  </div>
                  <div class="slyzbowe__date slyzbowe__date_2 tx-2">
                    5 dni
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end slyzbowe -->

      <!-- start contacts -->
      <section class="contacts">
        <div class="contacts__container container">
          <div class="contacts__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
              <img src="./img/contacts.jpg" loading="lazy" width="590" height="338" alt="Image">
            </picture>
          </div>
          <div class="contacts__descr">
            <h2 class="contacts__title tt-3">
              Rezerwuj teraz!
            </h2>
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