<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>

<body>    
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="boxMenu d-flex justify-content-evenly align-items-center col-xl-9 col-lg-9 col-md-10 col-sm-10">
                    <a href="#section_Apropo"><input type="button" id="btApropo" class="Apropo" value ="Á PROPOS"></a>
                    <a href="#section_projet"><input type="button" id="btProjet" class="Projet" value ="PROJETS"></a>
                    <a href="#section_competence"><input type="button" id="btCompetence" class="Competence" value ="COMPÉTENCES"></a>
                    <a href="#section_contact"><input type="button" id="btContact" class="Contact" value ="CONTACT"></a>
                </div>

                <div class="boxLink d-flex justify-content-center align-items-center col-xl-3 col-lg-3 col-md-2 col-sm-2">
                    <div class="d-flex justify-content-around col-xl-10 col-lg-10 col-md-12 col-sm-12">
                        <!-- logo linkendid -->
                        <div class="d-flex justify-content-center align-items-center">
                            <a target="_blank" href="https://www.linkedin.com/in/arthur-guichot/">
                                <svg id="logoLinkendid" viewBox="0 0 382 382">
                                    <path
                                        d="M 347.445,0 H 34.555 C 15.471,0 0,15.471 0,34.555 V 347.444 C 0,366.529 15.471,382 34.555,382 H 347.444 C 366.529,382 382,366.529 382,347.444 V 34.555 C 382,15.471 366.529,0 347.445,0 Z M 118.207,329.844 c 0,5.554 -4.502,10.056 -10.056,10.056 H 65.345 c -5.554,0 -10.056,-4.502 -10.056,-10.056 V 150.403 c 0,-5.554 4.502,-10.056 10.056,-10.056 h 42.806 c 5.554,0 10.056,4.502 10.056,10.056 z M 86.748,123.432 c -22.459,0 -40.666,-18.207 -40.666,-40.666 0,-22.459 18.207,-40.666 40.666,-40.666 22.459,0 40.666,18.207 40.666,40.666 0,22.459 -18.206,40.666 -40.666,40.666 z M 341.91,330.654 c 0,5.106 -4.14,9.246 -9.246,9.246 H 286.73 c -5.106,0 -9.246,-4.14 -9.246,-9.246 v -84.168 c 0,-12.556 3.683,-55.021 -32.813,-55.021 -28.309,0 -34.051,29.066 -35.204,42.11 v 97.079 c 0,5.106 -4.139,9.246 -9.246,9.246 h -44.426 c -5.106,0 -9.246,-4.14 -9.246,-9.246 V 149.593 c 0,-5.106 4.14,-9.246 9.246,-9.246 h 44.426 c 5.106,0 9.246,4.14 9.246,9.246 v 15.655 c 10.497,-15.753 26.097,-27.912 59.312,-27.912 73.552,0 73.131,68.716 73.131,106.472 z"
                                    id="path2"/>
                                </svg>
                            </a>
                        </div>
                        <!-- logo github -->
                        <div>
                            <a target="_blank" href="https://github.com/Cybernet-Studio">
                                <svg  viewBox="0 0 24 24" id="logoGithub">
                                    <path
                                        d="M 10.9,2.1 C 6.3,2.6 2.6,6.3 2.1,10.8 1.6,15.5 4.3,19.7 8.4,21.3 8.7,21.4 9,21.2 9,20.8 v -1.6 c 0,0 -0.4,0.1 -0.9,0.1 C 6.7,19.3 6.1,18.1 6,17.4 5.9,17 5.7,16.7 5.4,16.4 5.1,16.3 5,16.3 5,16.2 5,16 5.3,16 5.4,16 6,16 6.5,16.7 6.7,17 7.2,17.8 7.8,18 8.1,18 8.5,18 8.8,17.9 9,17.8 9.1,17.1 9.4,16.4 10,16 7.7,15.5 6,14.2 6,12 6,10.9 6.5,9.8 7.2,9 7.1,8.8 7,8.3 7,7.6 7,7.2 7,6.6 7.3,6 7.3,6 8.7,6 10.1,7.3 10.6,7.1 11.3,7 12,7 12.7,7 13.4,7.1 14,7.3 15.3,6 16.8,6 16.8,6 17,6.6 17,7.2 17,7.6 17,8.4 16.9,8.8 16.8,9 c 0.7,0.8 1.2,1.8 1.2,3 0,2.2 -1.7,3.5 -4,4 0.6,0.5 1,1.4 1,2.3 v 2.6 c 0,0.3 0.3,0.6 0.7,0.5 3.7,-1.5 6.3,-5.1 6.3,-9.3 0,-6 -5.1,-10.7 -11.1,-10 z"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<main>
    <!-- section presentation -->
    <section class="d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="sct-presentation d-flex  justify-content-evenly align-items-center col-xl-12 col-lg-12 col-md-12 col-sm-12">  
                    <h1 class="d-flex justify-content-center col-xl-4 col-lg-4 col-md-3">ARTHUR</h1>
                    <img src="Portrait.png" class="d-flex justify-content-center col-xl-4 col-lg-4 col-md-3" alt="image de mon portrait">
                    <h1 class="d-flex justify-content-center col-xl-4 col-lg-4 col-md-3">GUICHOT</h1>
                </div>
            </div>

            <div class="row">
                <h1 class="devWeb d-flex justify-content-center col-12">Développeur Web et Web Mobile</h1>   
            </div>
        </div>
    </section>

    <!-- section a propos de moi -->
    <section id="section_Apropo" class="sct-aPropo d-flex align-items-center">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-5">
                    <h2 class="d-flex justify-content-center">À propos de moi :</h2>
                </div>
                <div class="boxPresentation">
                        <p> &nbsp; Je suis développeur et créateur passionné par plusieurs choses.<br><br>
                            &nbsp; Je suis passionné par la culture du Japon, l'informatique, le dessin, l'intelligeance artificielle, la robotique, l'électronique, le montage de vidéos, les jeux de cartes, de rôles et de plateaux, le cinéma, lire des livres et l'écriture de récits Fantasy et Fantastique.<br><br>
                            &nbsp; En ma possession, j'ai un niveau BTS "Conception et Réalisations des Systèmes Automatiques" et trois diplômes dont un BAC Pro et BEP "Maintenance des Équipements Industriels" et un CAP "Menuisier Fabricant".
                        </p>
                </div>
            </div>
        </div>
    </section>

    <!-- section projets et realisation -->
    <section id="section_projet" class="sct-projets">
        <div class="container-fluid">
            <h2 class="d-flex justify-content-center col-12">Mes projets et mes réalisations</h2>
            
            <!-- block1 projet integration bootstarp -->
            <div class="row">
                <div class="blockMokup d-flex justify-content-around scol-12">
                    <div class="d-flex justify-content-center align-items-center col-6">
                        <div class="d-flex justify-content-center align-items-center">
                            <input type="image" id="imgMokup_1" class="imgMokup1" value="1" src="mokup/Mokup_projet_bootstarp_redimensionnée.png" alt="mon projet integration bootstarp">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center col-6">
                        <div class="col-10">
                            <div class="col-12">
                                <p>Mon premier projet en formation<br><br>J'ai intégré une maquette d'un site web sur figma, en utilisant le framework Bootstarp</p>
                            </div>
                            <div class="visiteWeb">
                                <a target="_blank" href="https://arthurg.promo-93.codeur.online/Projet_Integration_Bootstarp_MNTN/integration_bootstarp.html" class="d-flex justify-content-start col-12">
                                    <div class="arrow"><span class="material-icons">trending_flat</span></div>
                                    <div><p>Visitez le site web</p></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- block2 projet crédit ledonien -->
                <!-- block3 projet todo-list -->

                <!-- block4 draw Chalice -->
            <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-1">
                        <p>Dessin : Le Calice du Monde <br><br>
                            Je me suis inspiré d'un artwortk d'une carte du jeu Yu-Gi-Oh! 
                            <br><br> Histoire : Le "Calice du Monde" est une des septs reliques de l'héritage du monde appartenant à un dieu vennu sur terre il y-a des milénaires
                        </p>
                    </div>
                    <div class="BlockDrawVertical d-flex justify-content-center col-6 order-2">
                        <input type="image" id="imgDraw_1" value="4" src="drawing/relicWorldChalice.png" alt="dessin Calice du Monde">
                    </div>
                </div>
            </div>

            <!-- block5 draw Fox-->
            <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-2">
                        <p>Dessin d'un animal fantasy mangas, que j'ai réalisé pour mon examen d'art appliqué du Bac Pro
                            <br><br> Histoire : Un renard de lumière aux ailes de nuit du nom de Ichigo est un protecteur de la vie humaine
                        </p>
                    </div>
                    <div class="BlockDrawHorizontal d-flex justify-content-center align-items-center col-6 order-1">
                        <input type="image" id="imgDraw_2" value="5" src="drawing/foxOfLightBlack.png" alt="dessin d'un renard de lumière aux ailes de nuit">
                    </div>
                </div>
            </div>

            <!-- block6 draw city inverted-->
            <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-1">
                        <p>
                            Dessin : la cité inversée
                            <br><br>Histoire : La cité Inverted, est une cité à la technologie douteuse. Une experience fatale est arrivée, changeant la gravité et tout ce quui l'entour, à créer une nouvelleville au sens inversé.
                        </p>
                    </div>
                    <div class="BlockDrawHorizontal  d-flex justify-content-center align-items-center col-6 order-2">
                        <input type="image" id="imgDraw_3" value="6" src="drawing/cityInverted.png" alt="dessin ka cité inversé">
                    </div>
                </div>
            </div>

            <!-- block7 draw haloween -->
            <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-2">
                        <p>
                            Dessin mangas, je me suis inspiré de quelques artwork de cartes Yu-Gi-Oh!
                            <br><br> Histoire : Le fantôme d'un enfant mort le soir d'haloween, passe dans les cimetières pour faire peur aux personnes qui le croisaient
                        </p>
                    </div>
                    <div class="BlockDrawVertical  d-flex justify-content-center col-6 order-1">
                        <input type="image" id="imgDraw_4" value="7" src="drawing/haloween.png" alt="dessin haloween">
                    </div>
                </div>
            </div>

             <!-- block8 draw cité imaginaire 3D-->
             <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-1">
                        <p>Dessin d'une ville imaginaire en 3D</p>
                    </div>
                    <div class="BlockDrawVertical  d-flex justify-content-center col-6 order-2">
                        <input type="image" id="imgDraw_5" value="8" src="drawing/oeil3D.png" alt="dessin cité imginaire en 3D">
                    </div>
                </div>
            </div>

             <!-- block9 draw Numéro66-->
             <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-2">
                        <p>Dessin réaliser au collége, du personnage "Numéro 66" du manga Fullmetal Alchemist</p>
                    </div>
                    <div class="BlockDrawVertical  d-flex justify-content-center col-6 order-1">
                        <input type="image" id="imgDraw_6" value="9" src="drawing/number66.png" alt="dessin personnage en armure du manga Fullmetal Achemiste">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section competence -->
    <section id="section_competence" class="sct-competences">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center col-12"><h2>Mes compétences</h2></div>
            </div>

            <div class="row">
                <div class="boxLogo d-flex justify-content-between col-12">

                    <div class="devlp d-flex align-items-center col-6">
                        <div class="col-12">
                            <h3 class="d-flex justify-content-center col-12">Langages de développements :</h3>
                            <div class="d-flex justify-content-center">
                                <div class="col-8">
                                    <div class="logoSpanLine d-flex justify-content-between">
                                        <img src="logo/logo-Cd-js.svg" id="logoJs" alt="Logo Javascript">
                                        <img src="logo/logo-Cd-php.svg" id="logoPhp" alt="Logo php">
                                        <img src="logo/logo-Cd-java.svg" id="logoJava" alt="Logo Java">
                                    </div>

                                    <div class="d-flex justify-content-around">
                                        <img src="logo/logo-Cd-html.svg" id="logoHtml"  alt="Logo Html5">
                                        <img src="logo/logo-Cd-css.svg" id="logoCss" alt="Logo Css3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-6">
                        <div class="framework">
                            <h3 class="d-flex justify-content-center col-12">Frameworks :</h3>
                            <div class="d-flex justify-content-center">
                                <div class="d-flex justify-content-around col-8">
                                    <img src="logo/logo-Fw-bootstarp.svg" id="logoBootsp" alt="Logo Bootstarp">
                                    <img src="logo/logo-Fw-vueJs.svg" id="logoVueJs" alt="Logo Vue.js">
                                    <img src="logo/logo-Fw-laravel.svg" id="logoLrvl" alt="Logo Laravel">
                                </div>
                            </div>
                        </div>

                        <div class="logiciel">
                            <h3 class="d-flex justify-content-center col-12">Logiciels :</h3>
                            <div class="d-flex justify-content-center">

                                <div class="col-10">
                                    <div class="logoSpanLine d-flex justify-content-around">
                                        <img src="logo/logo-Lg-vsc.svg" id="logoVsc" alt="Logo Visual Studio Code">
                                        <img src="logo/logo-Lg-mySql.svg" id="logoMsql" alt="Logo MySQL">
                                        <img src="logo/logo-Lg-worpress.svg" id="logoWordpress" alt="Logo Wordpress">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <div class="d-flex justify-content-around col-7">
                                            <img src="logo/logo-Lg-figma.svg" id="logoFgma" alt="Logo Figma">
                                            <img src="logo/logo-Lg-vegasPro.svg" id="logoVp" alt="Logo Vegas Pro">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- section contact -->
        <section id="section_contact" class="sct-contact">
            <div class="container-fluid">
            <div class="row">
                <h2 class="d-flex justify-content-center">Pour me contacter :</h2>
                <?php
                    if(isset($_POST['mailform'])) {
                        if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
                            $header="MIME-Version: 1.0\r\n";
                            $header.='From:"nom_d\'expediteur"<votre@mail.com>'."\n";
                            $header.='Content-Type:text/html; charset="uft-8"'."\n";
                            $header.='Content-Transfer-Encoding: 8bit';
                            $message='
                                <html>
                                    <body>
                                        <div align="center">
           
                                            <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
                                            <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
                                            <br />
                                            '.nl2br($_POST['message']).'
          
                                        </div>
                                    </body>
                                </html>
                            ';
                            mail("a.guichot@codeur.online", "Sujet du message", $message, $header);
                            $msg="Votre message a bien été envoyé !";
                        } else {
                            $msg="Tous les champs doivent être complétés !";
                        }
                    }
                ?>

                <h2>Formulaire de contact !</h2>
                <form method="POST" action="">
                    <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
                    <input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
                    <textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
                    <input type="submit" value="Envoyer !" name="mailform"/>
                </form>
                <?php if(isset($msg)) {
                            echo $msg;
                        }
                ?>
            </div>
            </div>
        </section>
</main>

    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="src.js" async></script>
</body>
</html>