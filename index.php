<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css" />
  <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" media="screen" href="css/screen.css" type="text/css" />
  <!-- <link rel="icon" type="image/png" href="http://localhost/MonPortfolio/images/faviconxl.png"> -->
  <link rel="shortcut icon" href="images/favicon.ico" />
  <title>Joan SOR | Portfolio</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">
  <div class="container-fluid" style="margin:0; padding:0;">
    <!--menu-->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars fa-lg"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
        <ul class="nav nav-pills navbar-nav">
          <li class="nav-item"><a class="nav-link mr-1 js-scrollTo" href="#about">Moi</a></li>
          <li class="nav-item">
            <a class="nav-link mr-1 js-scrollTo" href="#skills" data-toggle="collapse"
              data-target=".navbar-collapse.show">Compétences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-1 js-scrollTo" href="#mes-objectifs" data-toggle="collapse"
              data-target=".navbar-collapse.show">Mes Objectifs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-1 js-scrollTo" href="#projets" data-toggle="collapse"
              data-target=".navbar-collapse.show">Projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-1 js-scrollTo" href="#education" data-toggle="collapse"
              data-target=".navbar-collapse.show">Éducation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-1 js-scrollTo" href="#contact" data-toggle="collapse"
              data-target=".navbar-collapse.show">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--Présentation-->
    <section id="about" class="container-fluid">
      <div class="col-8 col-lg-4 profile-picture">
        <img src="images/photo.jpeg" alt="Joan" class="rounded-circle" />
      </div>
      <div class="heading span3 wow bounceInDown center">
        <h1>Hello, c'est moi Joan</h1>
        <h3>Développeur Web et Web Mobile</h3>
        <a href="docs/cvJoan.pdf" class="button1">Télécharger CV</a>
      </div>
    </section>
    <!--compétences-->
    <section id="skills">
      <div class="divider"></div>
      <div class="heading">
        <h2>Compétences</h2>
      </div>
      <div class="container col-md-12">
        <div class="row">
          <div class="col-md-12 d-flex justify-content-center">
            <div class="index span3 wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
              <img class="img-thumbnail" src="images/html-1.svg" alt="html" />
            </div>
            <div class="index">
              <img class="img-thumbnail" src="images/css-3.svg" alt="css" />
            </div>
            <div class="index span3 wow bounceInDown center" data-wow-delay="0.5s"
              style="visibility: visible; animation-delay: 0.5s; animation-name: rollIn;">
              <img class="img-thumbnail" src="images/logo-javascript.svg" alt="js" />
            </div>
            <div class="index">
              <img class="img-thumbnail" src="images/symfony.svg" alt="symfony" />
            </div>
            <div class="index">
              <img class="img-thumbnail" src="images/bootstrap-4.svg" alt="bootstrap" />
            </div>
            <div class="index">
              <img class="img-thumbnail" src="images/vue-js-1.svg" alt="vuejs" />
            </div>
          </div>
          <div class="col-md-12 d-flex justify-content-center">
            <div class="index mt-3">
              <img class="img-thumbnail" src="images/php-1.svg" alt="php" />
            </div>
            <div class="index">
              <img class="img-thumbnail" src="images/angular-icon-1.svg" alt="angular" />
            </div>
            <div class="index">
              <img class="img-thumbnail" src="images/react-2.svg" alt="react" />
            </div>
            <div class="index">
              <img class="img-thumbnail" src="images/wordpress-blue.svg" alt="wordpress" />
            </div>
            <div class="index">
              <img class="img-thumbnail" src="images/java.svg" alt="java" />
            </div>
            <div class="index span3 wow bounceInRight" data-wow-delay="1s"
            style="visibility: visible; animation-delay: 1.5s; animation-name: bounceInRight;">
              <img class="img-thumbnail" src="images/typescript.svg" alt="typescript" />
            </div>
          </div>
          <div class="col-md-12 d-flex justify-content-center">

            <div class="index span3 wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
              <img class="img-thumbnail" src="images/android-logomark.svg" alt="android" />
            </div>
            <div class="index mt-4">
              <img class="img-thumbnail" src="images/nodejs.svg" alt="nodejs" />
            </div>
            <div class="index span3 wow bounceInUp center" data-wow-delay="0.5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInUp;">
              <img class="img-thumbnail" src="images/laravel-2.svg" alt="laravel" />
            </div>
            <div class="index">
              <img class="img-thumbnail" src="images/mysql-3.svg" alt="mySql" />
            </div>
            <div class="index">
              <img class="img-thumbnail" src="images/jquery-1.svg" alt="jquery" />
            </div>
            <div class="index mt-4 span3 wow flip" data-wow-iteration="5" data-wow-duration="0.15s"
              style="visibility: visible; animation-duration: 0.15s; animation-iteration-count: 5;">
              <img class="img-thumbnail" src="images/git.svg" alt="git" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Mes Objectifs-->
    <section id="mes-objectifs">
      <div class="container">
        <div class="divider"></div>
        <div class="heading">
          <h2>Mes Objectifs</h2>
        </div>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <h3>"Intégrer une entreprise"</h3>
              <h4>De développement web et web mobile</h4>
            </div>
            <div class="carousel-item">
              <h3>"Améliorer mon anglais"</h3>
              <h4>prochaine formation</h4>
            </div>
            <div class="carousel-item">
              <h3>
                "Devenir Freelance"
              </h3>
              <h4>Gagner en autonomie et en responsabilité</h4>
            </div>
            <div class="carousel-item">
              <h3>
                "Devenir full-stack"
              </h3>
              <h4>Comprendre aussi bien le back-end que le front-end</h4>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" data-slide="prev" role="button">
            <span class="fas fa-chevron-left fa-2x"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next" role="button">
            <span class="fas fa-chevron-right fa-2x"></span>
          </a>
        </div>
      </div>
    </section>
    <!--Mes projet que j'ai réalisés-->
    <section id="projets">
      <div class="container">
        <div class="divider"></div>
        <div class="heading">
          <h2>Projets</h2>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="hovereffect">
              <img class="img-thumbnail img-responsive " id="image" src="images/porjet-bomber.jpg"
                alt="projet-bomberman" />
              <div class="overlay">
                <h2>Jeu Bomberman</h2>
                <a href="http://joansor.fr/bomberman" class="info" target="_blank">J'ai réalisé principalement en
                  JavaScript</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="hovereffect">
              <img class="img-thumbnail  " id="image" src="images/projet-acs.png" alt="projet-acs" />
              <div class="overlay">
                <h2>Intégration depuis une maquette</h2>
                <a href="http://joansor.fr/Integration-ACS/" class="info" target="_blank">Réalisation en
                  HTML/CSS/Bootstrap<br>Manipulation de Photoshop</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="hovereffect">
              <img class="img-thumbnail  " id="image" src="images/projet-inaugurationv1.png"
                alt="projet-inaugurationv1" />
              <div class="overlay">
                <h2>Projet de Présentation</h2>
                <a href="http://joansor.fr/Inauguration-v1/" class="info" target="_blank"> Projet préparé pour une
                  journée d'inauguration et réalisé en <br> HTML/CSS/JS/jQuery/Bootstrap</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="hovereffect">
              <img class="img-thumbnail  " id="image" src="images/toutuncinema.png" alt="ToutUnCinema" />
              <div class="overlay">
                <h2>Tout un cinéma</h2>
                <a href="http://joansor.fr/ToutUnCinema/" class="info" target="_blank">Réalisation d'un site du genre
                  "allociné"<br> en PHP POO/Twig/MySql</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="hovereffect">
              <img class="img-thumbnail" id="image" src="images/mailProjet.png" alt="mailProjet" />
              <div class="overlay">
                <h2>MailProject</h2>
                <a href="http://joansor.fr/MailProject/" class="info" target="_blank">Formulaire d'envoi de fichiers
                  réalisé en PHP MVC (procédural)</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="hovereffect">
              <img class="img-thumbnail  " id="image" src="images/projet-inauguration.png" alt="projet-inauguration" />
              <div class="overlay">
                <h2>Projet de Présentation V2</h2>
                <a href="http://joansor.fr/Inauguration/" class="info" target="_blank">Projet préparé pour une journée
                  d'inauguration et réalisé en HTML/CSS/JS/jQuery/Bootstrap</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Education-->
    <!--Mes formations et diplomes-->
    <section id="education">
      <div class="container">
        <div class="divider"></div>
        <div class="heading">
          <h2>Éducation</h2>
        </div>
        <div class="row">
          <div class="col-md-4 mt-2">
            <div class="education-block">
              <h5>2019</h5>
              <span class="fas fa-graduation-cap"></span>
              <h3>MOOC de L'ANSSI</h3>
              <h4>SecNum academie</h4>
              <div class="divider"></div>
              <p>Télécharger Certificat</p>
              <a class="btn btn-outline-warning" href="docs/attestation_secnumacademie.pdf" role="button">
                Attestation ANSSI</a>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="education-block">
              <h5>2019-2020</h5>
              <span class="fas fa-graduation-cap"></span>
              <h3>Formation certifiante<h5>(bac+2)</h5>
              </h3>
              <h4>Access Code School<h5>(Mulhouse)</h5>
              </h4>
              <div class="divider"></div>
              <p>Télécharger Certificat</p>
              <a class="btn btn-outline-warning" href="docs/diplomeDev.jpg" role="button">Développeur web et web
                mobile</a>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="education-block">
              <h5>2020</h5>
              <span class="fas fa-graduation-cap"></span>
              <h3>Formation en ligne</h3>
              <h4>OpenClassRoom</h4>
              <div class="divider"></div>
              <p>Télécharger Certificat</p>
              <a class="btn btn-outline-warning" href="docs/certifFullStack.pdf" role="button">Full stack avec Node.js, Express et MongoDB</a>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="education-block">
              <h5>2020</h5>
              <span class="fas fa-graduation-cap"></span>
              <h3>Formation en ligne</h3>
              <h4>OpenClassRoom</h4>
              <div class="divider"></div>
              <p>Télécharger Certificat</p>
              <a class="btn btn-outline-warning" href="docs/certifJS.pdf" role="button">JavaScript</a>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="education-block">
              <h5>2020</h5>
              <span class="fas fa-graduation-cap"></span>
              <h3>Formation en ligne</h3>
              <h4>OpenClassRoom</h4>
              <div class="divider"></div>
              <p>Télécharger Certificat</p>
              <a class="btn btn-outline-warning" href="docs/certifWordpress.pdf" role="button">Certificat wordpress</a>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="education-block">
              <h5>2020</h5>
              <span class="fas fa-graduation-cap"></span>
              <h3>Formation en ligne</h3>
              <h4>OpenClassRoom</h4>
              <div class="divider"></div>
              <p>Télécharger Certificat</p>
              <a class="btn btn-outline-warning" href="docs/certifHTML_CSS.pdf" role="button">HTML/CSS</a>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="education-block">
              <h5>2020 - 2021</h5>
              <span class="fas fa-graduation-cap"></span>
              <h3>Formation certifiante <h5>(bac+2)</h5></h3>
              <h4>SERFA &middot; Université de Haute-Alsace<h5>(Mulhouse)</h5></h4>
              <div class="divider"></div>
              <p>Certificat en attente...</p>
              <a class="btn btn-outline-warning" href="#" role="button">Développeur intégrateur de solution intranet/internet</a>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="education-block">
              <h5>2021</h5>
              <span class="fas fa-graduation-cap"></span>
              <h3>Formation certifiante <h5>(bac+3)</h5></h3>
              <h4>SERFA &middot; Université de Haute-Alsace<h5>(Mulhouse)</h5></h4>
              <div class="divider"></div>
              <p>Certificat en attente...</p>
              <a class="btn btn-outline-warning" href="#" role="button">Licence professionelle développement d'application en orienté objet</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--contactez moi-->
    <section id="contact">
      <div class="container">
        <div class="divider"></div>
        <form action="" method="post" autocomplete="off">
          <div class="heading">
            <h2>
              CONTACT
            </h2>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <div class="col-12  wow slideInLeft  animated animated" data-wow-delay=".1s">
                <div class="row">
                  <!-- NOM -->
                  <div class="col-lg-6 col-12 col-md-6">
                    <label for="nom"></label>
                    <input type="text" class="form-control" id="nom" placeholder="Nom*" value="" name="nom" required />
                  </div>
                  <!-- PRENOM -->
                  <div class="col-lg-6 col-12 col-md-6">
                    <label for="prenom"></label>
                    <input type="text" class="form-control" id="prenom" placeholder="Prénom*" value="" name="prenom"
                      required />
                  </div>
                  <!-- EMAIL -->
                  <div class="col-md-12">
                    <label for="email"></label>
                    <input type="text" class="form-control" id="email" placeholder="Votre Email*" name="email"
                      required />
                  </div>
                  <!-- CODE POSTAL -->
                  <div class="col-md-6">
                    <label for="codepostal"></label>
                    <input type="text" class="form-control" id="codepostal" placeholder="Code postal*" required />
                  </div>
                  <!-- VILLE -->
                  <div class="col-md-6">
                    <label for="ville"></label>
                    <input type="text" class="form-control" id="ville" placeholder="Ville*" required />
                  </div>
                </div>
              </div>
            </div>
            <!-- PARAGRAPHE TEXTE -->
            <div class="contenair col-md-6 wow slideInRight animated" data-wow-delay=".1s" id="block-text">
              <label for="contact-textarea"></label>
              <textarea class="form-control" id="contact-textarea" rows="3" placeholder="Message*"
                name="message"></textarea>
            </div>
          </div>
          <div style="margin-top: 20px">
            <input type="checkbox" name="consent" value="consent" id="consent" label=""
              required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
              style="line-height: 1.75em; color: #faf0dc;">J’ai lu et accepte <a
                href="politique-de-confidentialitée.html" style="color: #faf0dc;" target="_blank">la
                politique de confidentialitée</a> de ce site</span>
          </div>
          <div class="button-position row justify-content-center">
            <input id="submit" type="submit" class="btn btn-lg btn-info col-md-2 col-4 submit-contact icon-2 "
              value="Envoyer" name="submit" onsubmit="verif(event)" />
          </div>
        </form>
      </div>
      <?php include('fonction.php');?>
    </section>
    <footer class="text-center">
      <a href="#about" class="js-scrollTo">
        <span class="fas fa-chevron-up"></span>
      </a>
      <h5>©Copyright &middot; joan SOR</h5>
      <a class="icons" href="www.linkedin.com/in/joan-sor" target="_blank"><img class="icon-img shake-horizontal"
          src="images/in.png" /></a>
    </footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="js/send.js"></script>
  <script src="js/app.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</body>
</html>