<!DOCTYPE html>
<html>

<head>
  <title>Joan SOR | Portfolio</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" media="screen" href="css/screen.css" type="text/css" />
  <!-- <link rel="icon" type="image/png" href="http://localhost/MonPortfolio/images/faviconxl.png"> -->
  <link rel="shortcut icon" href="http://localhost/MonPortfolio/images/favicon.ico" />

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
  <div class="container-fluid" style="margin:0; padding:0;">
  <!--menu-->
    
      <nav class="navbar navbar-expand-md navbar-dark sticky-top">
        <a class="navbar-brand" href="#"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
          <i class="fas fa-bars fa-lg"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
          <ul class="nav nav-pills navbar-nav">
            <li class="nav-item"><a class="nav-link mr-1 js-scrollTo" href="#about">Moi</a></li>
            <li class="nav-item">
              <a class="nav-link mr-1 js-scrollTo" href="#skills">Compétences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-1 js-scrollTo" href="#mes-objectifs">Mes Objectifs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-1 js-scrollTo" href="#projets">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-1 js-scrollTo" href="#education">Éducation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-1 js-scrollTo" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
      <!--Présentation-->
      <section id="about" class="container-fluid">
        <div class="col-8 col-lg-4 profile-picture">
          <img src="images/photo.jpeg" alt="Joan" class="rounded-circle"/>
        </div>
        <div class="heading span3 wow bounceInDown center">
          <h1>Hello, c'est moi Joan</h1>
          <h3>Développeur Web et Web Mobile</h3>
          <a href="docs/cvJoan_.png" class="button1">Télécharger CV</a>
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
              
                <div class="index">
                  <img class="img-thumbnail" src="images/html.png" alt="html" />
                </div>

                <div class="index">
                  <img class="img-thumbnail" src="images/css.png" alt="css" />
                </div>

                <div class="index">
                  <img class="img-thumbnail" src="images/javascript-logo.png" alt="js" />
                </div>
                <!-- </div> -->
                <div class="index">
                  <img class="img-thumbnail" src="images/Jquery.png" alt="jquery" />
                </div>
                <div class="index">
                  <img class="img-thumbnail" src="images/bootstrap.png" alt="bootstrap" />
                </div>
                <!-- <div class="col-md-4 d-flex justify-content-center"> -->
                <div class="index">
                  <img class="img-thumbnail" src="images/github-icon.png" alt="github" />
                </div>
              </div>
              <div class="col-md-12 d-flex justify-content-center">
                <div class="index">
                  <img class="img-thumbnail" src="images/mysql.png" alt="mySql" />
                </div>
                <div class="index">
                  <img class="img-thumbnail" src="images/php.png" alt="php" />
                </div>
                <div class="index">
                  <img class="img-thumbnail" src="images/mysql-workbench.png" alt="workbench" />
                </div>
                <div class="index">
                  <img class="img-thumbnail" src="images/wamp.png" alt="wamp" />
                </div>
                <div class="index">
                  <img class="img-thumbnail" src="images/wordpress.png" alt="wordpress" />
                </div>
              </div>
              <!-- </div> -->
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
                <h3>"Améliorer mon anglais"</h3>
                <h4>prochaine formation</h4>
              </div>
              <div class="carousel-item">
                <h3>"Intégrer une entreprise"</h3>
                <h4>De développement web et web mobile</h4>
              </div>
              <div class="carousel-item">
                <h3>
                  "Me perfectionner"
                </h3>
                <h4>Avec un futur stage</h4>
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
              <a href="https://joans.promo-36.codeur.online/formation/Mini-projets/jeu/" class="image_projet" target="_blank">
                <img class="img-thumbnail" src="images/porjet-bomber.jpg" alt="projet-bomberman"/>
              </a>
            </div>
            <div class="col-md-4">
              <a href="https://joans.promo-36.codeur.online/Integration-ACS/" class="image_projet" target="_blank">
                <img class="img-thumbnail" src="images/projet-acs.png" alt="projet-acs"/>
              </a>
            </div>
            <div class="col-md-4">
              <a href="https://joans.promo-36.codeur.online/formation/Projets/Inauguration-v1/" class="image_projet" target="_blank">
                <img class="img-thumbnail" src="images/projet-inaugurationv1.png" alt="projet-inaugurationv1"/>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <a href="https://joans.promo-36.codeur.online/ToutUnCinema/" class="image_projet" target="_blank">
                <img class="img-thumbnail" src="images/toutuncinema.png" alt="ToutUnCinema"/>
              </a>
            </div>
            <div class="col-md-4">
              <a href="https://joans.promo-36.codeur.online/MailProject/" class="image_projet" target="_blank">
                <img class="img-thumbnail" src="images/mailProjet.png" alt="mailProjet"/>
              </a>
            </div>
            <div class="col-md-4">
              <a href="https://joans.promo-36.codeur.online/formation/Projets/Inauguration/" class="image_projet" target="_blank">
                <img class="img-thumbnail" src="images/projet-inauguration.png" alt="projet-inauguration"/>
              </a>
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
            <div class="col-md-4">
              <div class="education-block">
                <h5>Août-2019</h5>
                <span class="fas fa-graduation-cap"></span>
                <h3>Formation online "Développeur Web"</h3>
                <h4>Cours Udémy</h4>
                <div class="divider"></div>
                <p>dévelopement web</p>
                <p>HTML/CSS</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="education-block">
                <h5>2019</h5>
                <span class="fas fa-graduation-cap"></span>
                <h3>MOOC de L'ANSSI</h3>
                <h4>SecNum<i>academie</i></h4>
                <div class="divider"></div>
                <p>Certificat</p>
                <a class="btn btn-outline-warning" href="docs/attestation_secnumacademie.pdf" role="button">Télécharger Attestation</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="education-block">
                <h5>2019-2020</h5>
                <span class="fas fa-graduation-cap"></span>
                <h3>Formation certifiante (bac+2)</h3>
                <h4>L'Access Code School</h4>
                <div class="divider"></div>
                <p>front-end & back-end</p>
                <p>HTML/CSS/JavaScript/...</p>
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

                      <input type="text" class="form-control" id="prenom" placeholder="Prénom*" value="" name="prenom" required />
                    </div>

                    <!-- EMAIL -->
                    <div class="col-md-12">
                      <label for="email"></label>

                      <input type="text" class="form-control" id="email" placeholder="Votre Email*" name="email" required />
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

                <textarea class="form-control" id="contact-textarea" rows="3" placeholder="Message*" name="message"></textarea>
              </div>
            </div>
            <div class="button-position row justify-content-center">
              <input id="submit" type="submit" class="btn btn-lg btn-info col-md-2 col-2 submit-contact" value="Envoyer" name="submit"  onsubmit="verif(event)" />
            </div>
                  <div>
                      <input type="checkbox" name="consent" value="consent" id="consent"
                      label="" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                      style="line-height: 1.75em; color: #faf0dc;">J’ai lu et accepte <a
											href="politique-de-confidentialitée.html" style="color: #faf0dc;">la
											politique de confidentialitée</a> de ce site</span>
                </div>
          </form>
        </div>
      </section>

      <footer class="text-center">
        <a href="#about" class="js-scrollTo">
          <span class="fas fa-chevron-up"></span>
        </a>
        <h5>© joan SOR</h5>
        <a class="icons" href="www.linkedin.com/in/joan-sor"><img class="icon-img shake-horizontal" src="images/in.png" /></a>
      </footer> 
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</body>

</html>