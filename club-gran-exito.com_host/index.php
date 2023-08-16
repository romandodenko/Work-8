<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="The Westin Palace is een van de beste en meest prestigieuze hotels in Spanje.">
  <meta property="og:site_name"
    content="Het heeft een geschiedenis en is een van de allereerste hotels in het land. Het hotel staat bekend om zijn elegantie en luxe en biedt zijn gasten eersteklas service.">
  <meta property="og:url" content="club-gran-exito.com">
  <meta property="og:image" content="club-gran-exito.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="The Westin Palace is een van de beste en meest prestigieuze hotels in Spanje.">
  <meta name="twitter:description"
    content="Het heeft een geschiedenis en is een van de allereerste hotels in het land. Het hotel staat bekend om zijn elegantie en luxe en biedt zijn gasten eersteklas service.">
  <meta name="twitter:site" content="club-gran-exito.com">
  <meta name="twitter:image" content="club-gran-exito.com/main.png">
  <meta name="description"
    content="Het heeft een geschiedenis en is een van de allereerste hotels in het land. Het hotel staat bekend om zijn elegantie en luxe en biedt zijn gasten eersteklas service.">
  <title>The Westin Palace is een van de beste en meest prestigieuze hotels in Spanje.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/SansitaOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/VarelaRound-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <p class="popup__text">Nuestros juegos están destinados a un público ADULTO mayor de 18 años. Hacer clic
            Aceptado para verificar su edad.</p>
          <button class="popup__button">Aceptado</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <h1 class="hero__title tt-1">
              The Westin Palace Hotel Madrid
            </h1>
            <p class="hero__text tx-2">
              Uno de los hoteles más lujosos y reputados de España, The Westin Palace, Madrid es definitivamente uno de
              los mejores de su clase. Su ambiente de lujo y un servicio de primera lo convierten en el lugar más
              atractivo para vivir en Madrid.
            </p>
            <ul class="hero__list">
              <li class="hero__item">
                <a class="hero__button hero__button_1 but-1" href="#about">
                  Sobre nosotros
                </a>
              </li>
              <li class="hero__item">
                <a class="hero__button hero__button_2 but-2" href="nomers.php">
                  Habitaciones
                </a>
              </li>
            </ul>
          </div>
          <a class="hero__link" href="#about">
            <img src="./img/icon.svg" loading="lazy" width="30" height="30" alt="Icon">
          </a>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-2">
            Sobre nosotros
          </h2>
          <div class="about__texts">
            <p class="about__text tx-1">
              Desde los primeros momentos de su estancia en The Westin Palace, Madrid, se sentirá como un noble o una
              noble. El hotel irradia esplendor histórico con el confort moderno. Los encantadores interiores del hotel
              encarnan estilo y elegancia, creando una atmósfera de lujo sin igual.
            </p>
            <p class="about__text tx-1">
              Las habitaciones que ofrece The Westin Palace, Madrid se distinguen por su gran diseño y comodidad. Aquí
              encontrará amplias habitaciones con muebles de alta calidad y comodidades modernas. Cada detalle está
              pensado para lograr el equilibrio perfecto entre lujo y funcionalidad.
            </p>
            <p class="about__text tx-1">
              El hotel también es conocido por sus restaurantes de lujo, donde los huéspedes pueden disfrutar de una
              excelente comida y un servicio impecable. The Westin Palace, Madrid también cuenta con bares, un spa y un
              gimnasio para satisfacer todas las necesidades.
            </p>
            <p class="about__text tx-1">
              Desde el comienzo de su estadía en The Westin Palace, Madrid, experimentará la alta calificación y la
              amabilidad del hotel. Cada miembro del personal es hospitalario y está dispuesto a hacer todo lo posible
              para que su estadía sea inolvidable.
            </p>
          </div>
          <ul class="about__list">
            <li class="about__item">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about-1.webp" type="image/webp">
                <img src="./img/about-1.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </li>
            <li class="about__item">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about-2.webp" type="image/webp">
                <img src="./img/about-2.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </li>
            <li class="about__item">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about-3.webp" type="image/webp">
                <img src="./img/about-3.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </li>
          </ul>
        </div>
      </section>
      <!-- end about -->

      <!-- start hotels -->
      <section class="hotels">
        <div class="container">
          <h2 class="hotels__title tt-2">
            Habitaciones
          </h2>
          <ul class="hotels__list">
            <li class="hotels__item hotels__item_1">
              <h3 class="hotels__subtitle tt-3">
                Habitación Premium
              </h3>
            </li>
            <li class="hotels__item hotels__item_2">
              <h3 class="hotels__subtitle tt-3">
                Habitación ejecutiva
              </h3>
            </li>
            <li class="hotels__item hotels__item_3">
              <h3 class="hotels__subtitle tt-3">
                Habitación de lujo
              </h3>
            </li>
          </ul>
          <a class="hotels__link but-1" href="nomers.php">
            Leer más
          </a>
        </div>
      </section>
      <!-- end hotels -->

      <!-- start gallery -->
      <section class="gallery">
        <div class="container">
          <h2 class="gallery__title tt-2">
            Galería
          </h2>
          <ul class="gallery__list">
            <li class="gallery__item">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-1.webp" type="image/webp">
                <img src="./img/gallery-1.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </li>
            <li class="gallery__item">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-2.webp" type="image/webp">
                <img src="./img/gallery-2.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </li>
            <li class="gallery__item">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-3.webp" type="image/webp">
                <img src="./img/gallery-3.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </li>
            <li class="gallery__item">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-4.webp" type="image/webp">
                <img src="./img/gallery-4.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </li>
            <li class="gallery__item">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-5.webp" type="image/webp">
                <img src="./img/gallery-5.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </li>
            <li class="gallery__item">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-6.webp" type="image/webp">
                <img src="./img/gallery-6.jpg" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </li>
          </ul>
          <a class="gallery__link but-1" href="gallery.php">
            Todas las fotos
          </a>
        </div>
      </section>
      <!-- end gallery -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>