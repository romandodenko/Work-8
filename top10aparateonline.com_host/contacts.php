<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="CATAN colonizers este un joc de masă legal cu tip fagure. Comanda acum!">
  <meta property="og:site_name"
    content="În joc trebuie să devii un colonizator, să-ți construiești și să-ți dezvolți așezările și orașele de pe insula nelocuită CATAN. Jocul de la cei mai buni designeri de jocuri este ceea ce ai nevoie.">
  <meta property="og:url" content="top10aparateonline.com">
  <meta property="og:image" content="top10aparateonline.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="CATAN colonizers este un joc de masă legal cu tip fagure. Comanda acum!">
  <meta name="twitter:description"
    content="În joc trebuie să devii un colonizator, să-ți construiești și să-ți dezvolți așezările și orașele de pe insula nelocuită CATAN. Jocul de la cei mai buni designeri de jocuri este ceea ce ai nevoie.">
  <meta name="twitter:site" content="top10aparateonline.com">
  <meta name="twitter:image" content="top10aparateonline.com/main.png">
  <meta name="description"
    content="În joc trebuie să devii un colonizator, să-ți construiești și să-ți dezvolți așezările și orașele de pe insula nelocuită CATAN. Jocul de la cei mai buni designeri de jocuri este ceea ce ai nevoie.">
  <title>CATAN colonizers este un joc de masă legal cu tip fagure. Comanda acum!</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Kokoro-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Volkhov-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
        <div class="container">
          <div class="contacts__head">
            <h1 class="contacts__title tt-2">
              Comanda acum!
            </h1>
            <p class="contacts__text tx-2">
              Feedback pentru comandarea jocului. Completează formularul cu numele și adresa ta de e-mail și te vom
              contacta pentru a discuta toate întrebările necesare.
            </p>
          </div>
          <form class="form" action="#!" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Nume..." required>
              <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Poștă..." required>
            </div>
            <button class="form__button but-1" type="submit">
              Trimite
              <img src="./img/arrow.svg" loading="lazy" width="30" height="30" alt="Arrow">
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