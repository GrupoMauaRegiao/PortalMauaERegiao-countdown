<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="portal maua e regiao, maua e regiao, maua, portal maua, noticias, ultimas noticias, qualidade, melhor, website maua, melhor website, melhor site, ribeirao pires, rio grande da serra, noticias de ribeirao pires, noticias de rio grande da serra, santo andre, noticias de santo andre, portal de noticias do abc, abc sao paulo, sao paulo abc">
    <meta name="description" content="Portal de notícias do Grupo Mauá e Região de Comunicação; Inovar é o que nos move!">
    <meta name="author" content="Grupo Mauá e Região de Comunicação">

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styles/libs/flipclock.css">
    <link rel="stylesheet" href="styles/styles.min.css">

    <?php include "functions.php"; ?>

    <title>Portal Mauá e Região</title>
  </head>
  <body>
    <section class="layout">
      <section class="social">
        <section class="facebook">
          <div class="fb-like"
               data-href="http://portalmauaeregiao.com.br"
               data-layout="button_count"
               data-action="like"
               data-show-faces="false"
               data-share="false"></div>
        </section>
        <section class="twitter"></section>
      </section>

      <section class="call-up">
        <h1>Estamos preparando um novo <span>Portal Mauá e Região</span> para você.</h1>
      </section>

      <section class="timer">
        <section class="countdown"></section>
      </section>

      <section class="call-up left">
        <h1>Novos recursos e melhorias:</h1>
        <ul>
          <li>Sistema de buscas mais preciso</li>
          <li>Versão mobile</li>
          <li>Mais leve; menos tempo ao carregar páginas</li>
          <li>Novos formatos de anúncios</li>
          <li>Os produtos que você já conhece em um só lugar: revista e jornal</li>
          <li>Integração com redes sociais</li>
        </ul>
      </section>

    </section>

    <script src="scripts/libs/jquery-2.1.1.min.js"></script>
    <script src="scripts/libs/flipclock.min.js"></script>
    <script class="custom-script" data-fulldate= "<?php echo get_date(); ?>" src="scripts/scripts.js"></script>

    <!-- Facebook button -->
    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- close Facebook button -->

  </body>
</html>
