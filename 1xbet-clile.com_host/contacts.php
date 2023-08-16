<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Sports Bar en Chile es un lugar muy valorado con nuevas ideas. ¡Reserva tu asiento ahora!">
  <meta property="og:site_name"
    content="Aquí podrás disfrutar del ambiente de los eventos deportivos en pantallas gigantes y de una deliciosa cerveza. También ofrecen aperitivos calientes y nuevas opciones de comida para complacer a los invitados.">
  <meta property="og:url" content="1xbet-clile.com">
  <meta property="og:image" content="1xbet-clile.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Sports Bar en Chile es un lugar muy valorado con nuevas ideas. ¡Reserva tu asiento ahora!">
  <meta name="twitter:description"
    content="Aquí podrás disfrutar del ambiente de los eventos deportivos en pantallas gigantes y de una deliciosa cerveza. También ofrecen aperitivos calientes y nuevas opciones de comida para complacer a los invitados.">
  <meta name="twitter:site" content="1xbet-clile.com">
  <meta name="twitter:image" content="1xbet-clile.com/main.png">
  <meta name="description"
    content="Aquí podrás disfrutar del ambiente de los eventos deportivos en pantallas gigantes y de una deliciosa cerveza. También ofrecen aperitivos calientes y nuevas opciones de comida para complacer a los invitados.">
  <title>Sports Bar en Chile es un lugar muy valorado con nuevas ideas. ¡Reserva tu asiento ahora!</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/LeagueSpartan-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Manrope-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <div class="contacts__left">
            <h1 class="contacts__title tt-2">
              ¡Reserva tu asiento ahora!
            </h1>
            <p class="contacts__text tx-1">
              Reserva ya tu asiento en nuestro sports bar en Chile para disfrutar del inolvidable ambiente de los
              deportes calientes. Estamos orgullosos de nuestra alta calificación local y estamos emocionados de
              traerles nuevas opciones de comidas y bebidas
            </p>
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