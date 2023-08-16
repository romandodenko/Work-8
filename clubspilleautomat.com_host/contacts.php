<!DOCTYPE html>
<html lang="no">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Sportsbar i Norge med eksklusiv energi og de beste kampene. Abonnere.">
  <meta property="og:site_name"
    content="Den høyt rangerte sportsbaren i Norge regnes som en av de beste i sin klasse og vil appellere til enhver sportsfan. Med sin minneverdige atmosfære og et bredt utvalg av underholdning.">
  <meta property="og:url" content="clubspilleautomat.com">
  <meta property="og:image" content="clubspilleautomat.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Sportsbar i Norge med eksklusiv energi og de beste kampene. Abonnere.">
  <meta name="twitter:description"
    content="Den høyt rangerte sportsbaren i Norge regnes som en av de beste i sin klasse og vil appellere til enhver sportsfan. Med sin minneverdige atmosfære og et bredt utvalg av underholdning.">
  <meta name="twitter:site" content="clubspilleautomat.com">
  <meta name="twitter:image" content="clubspilleautomat.com/main.png">
  <meta name="description"
    content="Den høyt rangerte sportsbaren i Norge regnes som en av de beste i sin klasse og vil appellere til enhver sportsfan. Med sin minneverdige atmosfære og et bredt utvalg av underholdning.">
  <title>Sportsbar i Norge med eksklusiv energi og de beste kampene. Abonnere.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/LeagueSpartan-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Manrope-Medium.woff2" as="font" type="font/woff2" crossorigin>
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
        <div class="container">
          <h1 class="contacts__title tt-2">
            Abonnere
          </h1>
          <div class="contacts__content">
            <div class="contacts__left">
              <p class="contacts__text tx-2">
                Abonner på våre oppdateringer og motta de siste nyhetene og kunngjøringene. Hold deg oppdatert på alle
                sportsbegivenheter.
              </p>
              <form class="form" action="#!" name="form" autocomplete="off">
                <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Navn..." required>
                <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Post..." required>
                <button class="form__button but-1" type="submit">
                  Sende
                </button>
              </form>
            </div>
            <ul class="contacts__images">
              <li class="contacts__image contacts__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/contacts-1.webp" type="image/webp">
                  <img src="./img/contacts-1.jpg" loading="lazy" width="300" height="300" alt="image">
                </picture>
              </li>
              <li class="contacts__image contacts__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/contacts-2.webp" type="image/webp">
                  <img src="./img/contacts-2.jpg" loading="lazy" width="300" height="300" alt="image">
                </picture>
              </li>
            </ul>
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