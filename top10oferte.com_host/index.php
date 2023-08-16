<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hotelul Vibre este cunoscut pentru calitatea și serviciile excelente.">
  <meta property="og:site_name"
    content="Hotelul Vibre de 5 stele din România este unul dintre cele mai bune hoteluri din categoria sa și cu siguranță se mândrește în topul celor mai bune hoteluri din țară.">
  <meta property="og:url" content="top10oferte.com">
  <meta property="og:image" content="top10oferte.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Hotelul Vibre este cunoscut pentru calitatea și serviciile excelente.">
  <meta name="twitter:description"
    content="Hotelul Vibre de 5 stele din România este unul dintre cele mai bune hoteluri din categoria sa și cu siguranță se mândrește în topul celor mai bune hoteluri din țară.">
  <meta name="twitter:site" content="top10oferte.com">
  <meta name="twitter:image" content="top10oferte.com/main.png">
  <meta name="description"
    content="Hotelul Vibre de 5 stele din România este unul dintre cele mai bune hoteluri din categoria sa și cu siguranță se mândrește în topul celor mai bune hoteluri din țară.">
  <title>Hotelul Vibre este cunoscut pentru calitatea și serviciile excelente.</title>
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
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start popup -->
      <div class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Jocurile noastre sunt destinate unui public ADULT cu vârsta de peste 18 ani. Clic
            Acceptat pentru a vă verifica vârsta.</p>
          <button class="popup__button">Admis</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <h1 class="hero__title tt-1">
              <span class="tx-2">
                Hotel in Romania
              </span>
              Hotel Vibre
            </h1>
            <p class="hero__text tx-1">
              Hotelul Vibre din România este unul dintre cele mai bune hoteluri din regiune și își merită cu adevărat
              cinci stele.
            </p>
            <ul class="hero__list">
              <li class="hero__ite">
                <a class="hero__link but-1" href="#about">
                  Despre hotel
                </a>
              </li>
              <li class="hero__ite">
                <a class="hero__link but-1" href="caremele.php">
                  Camerele
                </a>
              </li>
            </ul>
          </div>

        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__left">
            <h2 class="about__title tt-2">
              <span class="tx-2">
                Hotel 5 stele
              </span>
              Despre hotel
            </h2>
            <div class="about__texts">
              <p class="about__text tx-1">
                Aspectul hotelului este impresionant la prima vedere. Este o clădire elegantă, în stil contemporan, care
                atrage atenția oaspeților imediat ce ajung. Interiorul impresionează și el - este realizat într-un
                design modern folosind materiale de calitate, creând o senzație de lux și confort.
              </p>
              <p class="about__text tx-1">
                La check-in, veți fi întâmpinat de personal prietenos și serviabil, care este întotdeauna gata să vă
                ajute cu orice întrebări sau solicitări. Serviciul de top este unul dintre motivele principale pentru
                care Hotel Vibre se află pe lista celor mai bune hoteluri.
              </p>
              <p class="about__text tx-1">
                Camerele hotelului sunt spatioase si bine echipate. Un pat confortabil, lenjerie moale și elemente
                decorative individuale creează o atmosferă confortabilă pentru relaxare. S-a acordat multă atenție
                detaliilor pentru a satisface chiar și cele mai exigente gusturi ale oaspeților.
              </p>
            </div>
          </div>
          <div class="about__images">
            <div class="about__image about__image_1">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about-1.webp" type="image/webp">
                <img src="./img/about-1.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
            <div class="about__image about__image_2">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about-2.webp" type="image/webp">
                <img src="./img/about-2.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start divertisment -->
      <section class="divertisment">
        <div class="divertisment__container container">
          <div class="divertisment__content">
            <div class="divertisment__left">
              <h2 class="divertisment__title tt-2">
                <span class="tx-2">
                  Confort la hotel
                </span>
                Divertisment
              </h2>
              <div class="divertisment__texts">
                <p class="divertisment__text tx-1">
                  Restaurantul, spa și lounge-ul Hotelului Vibre din România oferă unele dintre cele mai bune servicii
                  și
                  facilități pe care le-ați aștepta de la un hotel de 5 stele. Calitatea lor excelentă și serviciul
                  atent
                  confirmă statutul lor printre cei mai buni.
                </p>
              </div>
              <a class="divertisment__link but-2" href="divertisment.php">
                Citeşte mai mult
                <svg width="10" height="10">
                  <use xlink:href="./img/svg/sprites.svg#arrow"></use>
                </svg>
              </a>
            </div>
            <div class="divertisment__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/divertisment.webp" type="image/webp">
                <img src="./img/divertisment.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- end divertisment -->

      <!-- start caremele -->
      <section class="caremele">
        <div class="caremele__container container">
          <ul class="caremele__list">
            <li class="caremele__item">
              <div class="caremele__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/camele-i-1.webp" type="image/webp">
                  <img src="./img/camele-i-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="caremele__descr">
                <h3 class="caremele__subtitle tx-2">
                  Cameră Queen Deluxe
                </h3>
                <div class="caremele__texts">
                  <p class="caremele__text tx-1">
                    Camera Queen Deluxe de la Hotel Vibre din Romania isi merita cu siguranta locul pe lista celor mai
                    bune cazari hoteliere
                  </p>
                </div>
              </div>
            </li>
            <li class="caremele__item">
              <div class="caremele__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/camele-i-2.webp" type="image/webp">
                  <img src="./img/camele-i-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="caremele__descr">
                <h3 class="caremele__subtitle tx-2">
                  Cameră dublă Deluxe
                </h3>
                <div class="caremele__texts">
                  <p class="caremele__text tx-1">
                    Camera Deluxe cu un pat de la Hotel Vibre din România oferă oaspeților una dintre cele mai bune
                    opțiuni de cazare într-un hotel.
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <div class="caremele__right">
            <h2 class="caremele__title tt-2">
              <span class="tx-2">
                Сomoditatea hotelului
              </span>
              Camerele
            </h2>
            <div class="caremele__texts caremele__texts_2">
              <p class="caremele__text tx-1">
                Camerele de la Hotel Vibre din Romania isi merita locul in lista celor mai buni. Nu doar interiorul lor,
                ci și calitatea serviciilor oferite oaspeților, le face o alegere excelentă pentru locuit.
              </p>
            </div>
            <a class="caremele__link but-2" href="caremele.php">
              Vezi toate
              <svg width="10" height="10">
                <use xlink:href="./img/svg/sprites.svg#arrow"></use>
              </svg>
            </a>
          </div>
        </div>
      </section>
      <!-- end caremele -->

      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <div class="contacts__top">
            <div class="contacts__left">
              <h2 class="contacts__title tt-2">
                Rezerva acum
              </h2>
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