<!-- Le navigateur garde les données entrées -->
<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>VimyMusculation</title>

    <!-- bootstrap -->
    <link rel='stylesheet' type='text/css' media='screen' href='design.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- bootstrap -->

</head>



<!-- DEBUT HEADER-->

<header class="video-header container">
    <!-- video en bg -->
    <div class="fullsreen-video-wrap">
        <video src="bgvideo.mp4" autoplay="true" loop="true"></video>
    </div>
    <!-- bar de navigation fixe-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <!-- logo -->
        <div class="logo ml-5 ">
            <a href="#"><span class="navbar-text text-left"><span class='v'>V</span><span class="white">imy</span><span class='v'>M</span><span class="white">uscu</span> <img src="image/LogoTranspa.png" alt=""></a>
        </div>
        <!-- liste -->
        <ul class="navbar-nav m-auto  ">
            <li class="nav-item ml-5 mr-5">
                <a class="nav-link scrollTo " href="#concept "><span class="v">Le Concept</span></a>
            </li>
            <li class="nav-item ml-5 mr-5">
                <a class="nav-link scrollTo" href="#activite">Nos Activités</a>
            </li>
            <li class="nav-item ml-5 mr-5">
                <a class="nav-link scrollTo" href="#club">Le Club / Tarifs</a>
            </li>
            <li class="nav-item ml-5 ">
                <a class="nav-link scrollTo contact " href="#contact">Nous Contacter</a>
            </li>
        </ul>
        <!-- facebook -->
        <div class="reseau mr-4">
            <a href="https://www.facebook.com/" target="_blank"><img src="image/fb.png" alt=""></a>
        </div>
    </nav>

    <!-- VimyMuscu+bouton -->
    <div class="container-fluid ">
        <!-- Grand Titre Nom de salle -->
        <div class="row ">
            <div class="col text-center vimy  "><span class="bordure"><span class='v'>V</span>imy<span class='v'>M</span>uscu<img src="image/LogoTranspa.png" alt=""></div>
        </div>
        <!-- Bouton Découverte -->
        <div class="row ">
            <div class="col club">
                <button type="button" class="btn btn-dark scrollTo" href='#concept'>Je découvre le club</button>
            </div>
        </div>
    </div>
</header>

<!-- FIN HEADER -->


<div id="concept"><br><br><br></div>
<!--Ancre du titre Concept -->


<!-- DEBUT BODY -->

<body>

    <div class="container">

        <div class="row pt-5 ">
            <!-- image concept -->
            <div class="col-md col-xs-12 ">
                <img src="image/m1.jpg" class="img1 img-fluid">
            </div>
            <!-- titre concept -->
            <div class="col concept_query ">
                <h3 class="concept  font-weight-bold text-center  ">LE CONCEPT</h3>
                <!-- slogan concept -->
                <div class="concept_slogan  mt-3 mb-5  ">
                    Votre club VimyMuscu vous accueil <span class="text-danger font-weight-bold">6j/7 du Lundi au Vendredi de 17h à 20h et le Dimanche matin </span> dans une ambiance d'entraide et de camaraderie.
                    Notre espace musculation et cardio-training sont à votre disposition.
                    Vous souhaitez vous affiner, vous muscler, améliorer vos performances sportives ou simplement conserver une hygiène de vie plus saine ?
                    Quels que soient vos objectifs et votre niveau, nous sommes là pour vous accompagner.</div>
            </div>
        </div>
    </div>


    <div id="activite"><br><br><br></div>
    <!--Ancre du titre Nos activité -->

    <!-- titre Nos Activité -->
    <div class="concept">
        <h1 class="h1-responsive font-weight-bold text-center mt-5 ">NOS ACTIVITÉS</h1>
    </div>

    <!-- MUSCUATION+CARDIO -->
    <div class="container">
        <div class="row">

            <!-- div musculation -->
            <div class="col-12 text-left">
                <!-- TITRE Musculation -->
                <h3 class="pt-2 pb-2 text-warning text-left "> Musculation</h3>
                <!-- TEXTE Musculation -->
                <div style="text-align:left; ">Notre salle dispose d’un espace de musculation qui vous permettra de dépasser votre objectif.
                    Il est destiné à tous ceux qui recherchent le développement des capacités musculaires.
                    Vous souhaitez accroître votre force, développer votre musculature, tonifier votre silhouette ou améliorer vos performances sportives, ne réfléchissez plus !
                </div>
                <!-- IMAGE musculation -->
                <img src=" image/c1.jpg" class="img-fluid mt-4">
            </div>

            <!-- div Cardio -->
            <div class="col-12 text-left pt-4">
                <!-- TITRE Cardio-->
                <h3 class="pt-2 pb-2 text-warning">Cardio </h3>
                <!-- TEXTE Cardio -->
                <div style="text-align: left; ">VimyMuscu vous propose dans sa salle un espace cardio-training
                    Il vous permettra de développer votre activité physique quel que soit votre niveau.Venez découvrir notre gamme d’équipement composé , d'un tapis de course, d'un vélo elliptique et d'un vélo assis.
                    Le cardio training vous permet d’améliorer considérablement votre santé en boostant vos systèmes cardiaque et respiratoire.</div>
                <!-- IMAGE Cardio -->
                <img src="image/c3.jpg" class="img-fluid mt-4">
            </div>

        </div>

        <p id="club"></p><br><br>
        <!--Ancre du titre Club/Tarif -->
    </div>

    <!-- CONCEPT -->
    <div class="concept">
        <!-- TITRE -->
        <h1 class="h1-responsive font-weight-bold text-center pt-5 ">CLUB/TARIF</h1>
        <div class="container">
            <!-- PARAGRAPHE 1 -->
            <p>Le club se situe au CENTRE CULTUREL ET SPORTIF , 14 rue de l'égalité à Vimy.
                <br>Il se situe dans l'espace regroupant le Dojo de Vimy et la salle de Tennis de table.
                <br>Un vestiaire Homme et un vestiaire Femme sont à votre disposition.
                <br>Un coaching est possible pour le débutant en la matière !
                <span class="text-danger font-weight-bold"> Alors venez profiter de vos 2 essais gratuits</span></p>
            <!-- CARROUSEL -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="image/salle2.jpg" alt="First slide">

                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/salle3.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/salle4.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- PARAGRAPHE 2 -->
        <p class='mt-2'>Le Tarif est de seulement <span class="text-danger font-weight-bold">60 euros à l'année</span>, la saison débute en Septembre
            (Il est tout de même possible de s'inscrire en cours d'année à un tarif arrangé.)
        </p>
    </div>



    <div id="contact"><br></div>
    <!--Ancre du titre Contact -->

    <!-- CONTACT -->
    <h1 class="h1-responsive font-weight-bold text-center pt-5" id='contact'>CONTACTEZ-NOUS</h1>
    <div class="container text-center">
        <!-- Methode POST pour récuper les données entrer par le user , ACTION redirige vers notre pas verification -->
        <form method="POST" action="verification.php">
            <!-- formulaire -->
            <div class="form-group">
                <label for="Nom">Nom/Prénom*</label>
                <!--"name" pour faire un lien avec notre script PHP -->
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre Nom et votre Prénom">
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre email">
            </div>
            <div class="form-group">
                <label for="sujet">Sujet*</label>
                <input type="text" class="form-control" name="sujet" id="sujet" placeholder="Quel est le sujet ?">
            </div>
            <div class="form-group">
                <label for="message">Votre Message*</label>
                <textarea name="message" class="form-control" id="message" rows="3" placeholder="Votre message"></textarea>
            </div>
            <!-- CAPTCHA -->
            <p>Recopier le nombre* </p>
            <!-- on recupere notre captcha -->
            <img src="captcha.php"><br>
            <input type="text" name="captcha" style="width:70px;"><br>
            <p>Tous les champs avec une * sont obligatoire <p>
                    <input class="btn-warning" type="submit" value="ENVOYER">
        </form>
    </div>


    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="animation.js"></script>
</body>
<!-- FIN BODY -->

<!-- FOOTER -->
<footer class="footer mt-4">
    <div class="container">
        <div class="row">
            <!-- footer logo -->
            <div class="col-md-12 col-sm-12 text-center">
                <div class="text-center"><span class="navbar-text text-left"><span class="white">VimyMuscu</span></div>
                <span class="text-medium alt-font text-uppercase margin-two margin-lr-auto display-block letter-spacing-1 black-text">Vimy Muscu - Centre Culturel et Sportif - 14 RUE DE L'EGALITE - 62580 VIMY </span><br>
                <span class="text-medium alt-font text-uppercase margin-two margin-lr-auto display-block letter-spacing-1 black-text">Tél : 03.21.58.51.65</span>

            </div>

        </div>
    </div>
</footer>

</html>