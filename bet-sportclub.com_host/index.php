<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Codenames es un juego fascinante alegre para la compañía de amigos.">
  <meta property="og:site_name"
    content="CodeNames es un juego emocionante que combina elementos de lógica, trabajo en equipo y atención. Es adecuado para interpretar a familiares y amigos.">
  <meta property="og:url" content="bet-sportclub.com">
  <meta property="og:image" content="bet-sportclub.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Codenames es un juego fascinante alegre para la compañía de amigos.">
  <meta name="twitter:description"
    content="CodeNames es un juego emocionante que combina elementos de lógica, trabajo en equipo y atención. Es adecuado para interpretar a familiares y amigos.">
  <meta name="twitter:site" content="bet-sportclub.com">
  <meta name="twitter:image" content="bet-sportclub.com/main.png">
  <meta name="description"
    content="CodeNames es un juego emocionante que combina elementos de lógica, trabajo en equipo y atención. Es adecuado para interpretar a familiares y amigos.">
  <title>Codenames es un juego fascinante alegre para la compañía de amigos.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Prompt-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Kokoro-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <div class="hero__left">
            <h1 class="hero__title tt-1">
              Codenames es seguro
            </h1>
            <p class="hero__text tx-2">
              Codenames es seguro, uno de los mejores y primeros juegos de mesa que captura las mentes y entretiene a
              todos los jugadores.
            </p>
          </div>
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp" type="image/webp">
              <img src="./img/hero.png" loading="lazy" width="593" height="89" alt="Image">
            </picture>
          </div>
          <a class="hero__arrow" href="#about">
            <img src="./img/arrow.svg" loading="lazy" width="30" height="30" alt="Image">
          </a>
        </div>
      </section>
      <!-- end hero -->

      <!-- start juego -->
      <section class="juego" id="about">
        <div class="container">
          <h2 class="juego__title tt-2">
            Descripción del juego
          </h2>
          <div class="juego__content">
            <div class="juego__left">
              <div class="juego__texts">
                <p class="juego__text juego__text_sc tx-1">
                  En Codenames, los equipos compiten para descifrar los mensajes bajo los nombres en clave que les da el
                  explorador jefe. Proporciona pistas al asociar varias palabras con una idea para que su equipo pueda
                  adivinar los nombres en clave correspondientes. Sin embargo, los jugadores deben tener cuidado de no
                  caer en la trampa del burro y adivinar las palabras de los agentes enemigos.
                </p>
                <p class="juego__text juego__text_sc tx-1">
                  El juego es seguro porque no incluye ningún tipo de violencia o agresión. Brinda a los jugadores la
                  oportunidad de divertirse e interactuar de manera segura entre ellos.
                </p>
                <p class="juego__text juego__text_sc tx-1">
                  Codenames es también uno de los mejores juegos de mesa que existen. Ha recibido numerosos premios y
                  reconocimientos de jugadores de todo el mundo. Sus sencillas reglas, su interesante mecánica y la
                  posibilidad de jugar en grandes grupos lo convierten en la elección perfecta para fiestas y reuniones
                  con amigos.
                </p>
              </div>
              <a class="juego__link but-1" href="juego.php">
                Leer más
              </a>
            </div>
            <div class="juego__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/juego.webp" type="image/webp">
                <img src="./img/juego.png" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- end juego -->

      <!-- start datos -->
      <section class="datos">
        <div class="container">
          <h2 class="datos__title tt-2">
            Datos interesantes
          </h2>
          <div class="datos__content">
            <ul class="datos__list">
              <li class="datos__item">
                <div class="datos__subtitle tt-3">
                  Seguro
                </div>
                <p class="datos__text tx-1">
                  Codenames es un juego seguro para todas las edades. A diferencia de otros juegos de mesa, no incluye
                  violencia ni agresión, lo que lo hace atractivo para familias y niños.
                </p>
              </li>
              <li class="datos__item">
                <div class="datos__subtitle tt-3">
                  El primero
                </div>
                <p class="datos__text tx-1">
                  Codenames fue uno de los primeros juegos de este tipo basado en la comunicación y la interacción. Su
                  éxito y popularidad ha inspirado a muchos juegos similares que le siguieron.
                </p>
              </li>
              <li class="datos__item">
                <div class="datos__subtitle tt-3">
                  Mejor
                </div>
                <p class="datos__text tx-1">
                  Codenames ha sido votado como uno de los mejores juegos de mesa de los últimos años. Ha ganado
                  numerosos premios prestigiosos, incluido el Spiel des Jahres, el premio más prestigioso en el mundo de
                  los juegos de mesa, otorgado al Juego del año.
                </p>
              </li>
              <li class="datos__item datos__item_flex">
                <a class="datos__link but-1" href="datos.php">
                  Leer más
                </a>
              </li>
            </ul>
            <div class="datos__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/datos.webp" type="image/webp">
                <img src="./img/datos.png" loading="lazy" width="300" height="300" alt="Image">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- end datos -->

      <!-- start contacts -->
      <section class="contacts">
        <div class="contacts__container container">
          <div class="contacts__left">
            <h2 class="contacts__title tt-2">
              Formulario de pedido
            </h2>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Nombre..." required>
                <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Correo..." required>
              </div>
              <button class="form__button but-1" type="submit">
                Enviar
              </button>
            </form>
          </div>
          <div class="contacts__texts">
            <p class="contacts__text tx-2">
              Para su comodidad y seguridad, le ofrecemos rellenar este formulario para realizar un pedido. Le
              garantizamos que sus datos personales serán tratados de forma confidencial y segura.
            </p>
            <p class="contacts__text tx-1">
              Estamos listos para procesar su pedido con nuestros primeros ingredientes, para que reciba los productos
              lo más rápido posible y exactamente de acuerdo con sus deseos.
            </p>
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