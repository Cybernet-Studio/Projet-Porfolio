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
                <div class="boxMenu d-flex justify-content-evenly align-items-center col-xl-9 col-lg-9 col-md-10 col-sm-10 col-12">
                    <a href="#section_Apropo"><input type="button" id="btApropo" class="Apropo" value ="Á PROPOS"></a>
                    <a href="#section_projet"><input type="button" id="btProjet" class="Projet" value ="PROJETS"></a>
                    <a href="#section_competence"><input type="button" id="btCompetence" class="Competence" value ="COMPÉTENCES"></a>
                    <a href="#section_contact"><input type="button" id="btContact" class="Contact" value ="CONTACT"></a>
                </div>

                <div class="boxLink d-flex justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-end align-items-center col-xl-3 col-lg-3 col-md-2 col-sm-2 col-12">
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
                        <div class="d-flex justify-content-center align-items-center">
                            <a target="_blank" href="https://github.com/Cybernet-Studio">
                                <svg  viewBox="0 0 24 24" id="logoGithub">
                                    <path
                                        d="M 10.9,2.1 C 6.3,2.6 2.6,6.3 2.1,10.8 1.6,15.5 4.3,19.7 8.4,21.3 8.7,21.4 9,21.2 9,20.8 v -1.6 c 0,0 -0.4,0.1 -0.9,0.1 C 6.7,19.3 6.1,18.1 6,17.4 5.9,17 5.7,16.7 5.4,16.4 5.1,16.3 5,16.3 5,16.2 5,16 5.3,16 5.4,16 6,16 6.5,16.7 6.7,17 7.2,17.8 7.8,18 8.1,18 8.5,18 8.8,17.9 9,17.8 9.1,17.1 9.4,16.4 10,16 7.7,15.5 6,14.2 6,12 6,10.9 6.5,9.8 7.2,9 7.1,8.8 7,8.3 7,7.6 7,7.2 7,6.6 7.3,6 7.3,6 8.7,6 10.1,7.3 10.6,7.1 11.3,7 12,7 12.7,7 13.4,7.1 14,7.3 15.3,6 16.8,6 16.8,6 17,6.6 17,7.2 17,7.6 17,8.4 16.9,8.8 16.8,9 c 0.7,0.8 1.2,1.8 1.2,3 0,2.2 -1.7,3.5 -4,4 0.6,0.5 1,1.4 1,2.3 v 2.6 c 0,0.3 0.3,0.6 0.7,0.5 3.7,-1.5 6.3,-5.1 6.3,-9.3 0,-6 -5.1,-10.7 -11.1,-10 z"
                                    />
                                </svg>
                            </a>
                        </div>
                        <!-- logo Instagram -->
                        <div class="d-flex justify-content-center align-items-center">
                            <a target="_blank" href="https://www.instagram.com/cybernet_studio/">
                                <svg viewBox="0 0 256 256" id="logoInsta">
                                    <g>
                                        <path 
                                            d="M127.999746,23.06353 C162.177385,23.06353 166.225393,23.1936027 179.722476,23.8094161 C192.20235,24.3789926 198.979853,26.4642218 203.490736,28.2166477 C209.464938,30.5386501 213.729395,33.3128586 218.208268,37.7917319 C222.687141,42.2706052 225.46135,46.5350617 227.782844,52.5092638 C229.535778,57.0201472 231.621007,63.7976504 232.190584,76.277016 C232.806397,89.7746075 232.93647,93.8226147 232.93647,128.000254 C232.93647,162.177893 232.806397,166.225901 232.190584,179.722984 C231.621007,192.202858 229.535778,198.980361 227.782844,203.491244 C225.46135,209.465446 222.687141,213.729903 218.208268,218.208776 C213.729395,222.687649 209.464938,225.461858 203.490736,227.783352 C198.979853,229.536286 192.20235,231.621516 179.722476,232.191092 C166.227425,232.806905 162.179418,232.936978 127.999746,232.936978 C93.8200742,232.936978 89.772067,232.806905 76.277016,232.191092 C63.7971424,231.621516 57.0196391,229.536286 52.5092638,227.783352 C46.5345536,225.461858 42.2700971,222.687649 37.7912238,218.208776 C33.3123505,213.729903 30.538142,209.465446 28.2166477,203.491244 C26.4637138,198.980361 24.3784845,192.202858 23.808908,179.723492 C23.1930946,166.225901 23.0630219,162.177893 23.0630219,128.000254 C23.0630219,93.8226147 23.1930946,89.7746075 23.808908,76.2775241 C24.3784845,63.7976504 26.4637138,57.0201472 28.2166477,52.5092638 C30.538142,46.5350617 33.3123505,42.2706052 37.7912238,37.7917319 C42.2700971,33.3128586 46.5345536,30.5386501 52.5092638,28.2166477 C57.0196391,26.4642218 63.7971424,24.3789926 76.2765079,23.8094161 C89.7740994,23.1936027 93.8221066,23.06353 127.999746,23.06353 M127.999746,0 C93.2367791,0 88.8783247,0.147348072 75.2257637,0.770274749 C61.601148,1.39218523 52.2968794,3.55566141 44.1546281,6.72008828 C35.7374966,9.99121548 28.5992446,14.3679613 21.4833489,21.483857 C14.3674532,28.5997527 9.99070739,35.7380046 6.71958019,44.1551362 C3.55515331,52.2973875 1.39167714,61.6016561 0.769766653,75.2262718 C0.146839975,88.8783247 0,93.2372872 0,128.000254 C0,162.763221 0.146839975,167.122183 0.769766653,180.774236 C1.39167714,194.398852 3.55515331,203.703121 6.71958019,211.845372 C9.99070739,220.261995 14.3674532,227.400755 21.4833489,234.516651 C28.5992446,241.632547 35.7374966,246.009293 44.1546281,249.28042 C52.2968794,252.444847 61.601148,254.608323 75.2257637,255.230233 C88.8783247,255.85316 93.2367791,256 127.999746,256 C162.762713,256 167.121675,255.85316 180.773728,255.230233 C194.398344,254.608323 203.702613,252.444847 211.844864,249.28042 C220.261995,246.009293 227.400247,241.632547 234.516143,234.516651 C241.632039,227.400755 246.008785,220.262503 249.279912,211.845372 C252.444339,203.703121 254.607815,194.398852 255.229725,180.774236 C255.852652,167.122183 256,162.763221 256,128.000254 C256,93.2372872 255.852652,88.8783247 255.229725,75.2262718 C254.607815,61.6016561 252.444339,52.2973875 249.279912,44.1551362 C246.008785,35.7380046 241.632039,28.5997527 234.516143,21.483857 C227.400247,14.3679613 220.261995,9.99121548 211.844864,6.72008828 C203.702613,3.55566141 194.398344,1.39218523 180.773728,0.770274749 C167.121675,0.147348072 162.762713,0 127.999746,0 Z M127.999746,62.2703115 C91.698262,62.2703115 62.2698034,91.69877 62.2698034,128.000254 C62.2698034,164.301738 91.698262,193.730197 127.999746,193.730197 C164.30123,193.730197 193.729689,164.301738 193.729689,128.000254 C193.729689,91.69877 164.30123,62.2703115 127.999746,62.2703115 Z M127.999746,170.667175 C104.435741,170.667175 85.3328252,151.564259 85.3328252,128.000254 C85.3328252,104.436249 104.435741,85.3333333 127.999746,85.3333333 C151.563751,85.3333333 170.666667,104.436249 170.666667,128.000254 C170.666667,151.564259 151.563751,170.667175 127.999746,170.667175 Z M211.686338,59.6734287 C211.686338,68.1566129 204.809755,75.0337031 196.326571,75.0337031 C187.843387,75.0337031 180.966297,68.1566129 180.966297,59.6734287 C180.966297,51.1902445 187.843387,44.3136624 196.326571,44.3136624 C204.809755,44.3136624 211.686338,51.1902445 211.686338,59.6734287 Z"
                                        >
                                        </path>
                                    </g>
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
                <div class="sct-presentation d-flex justify-content-evenly align-items-center col-12">  
                    <h1 class="d-flex justify-content-center col-xl-4 col-lg-4 col-md-3 col-sm-3 col-6">ARTHUR</h1>
                    <img src="Portrait.png" class="d-flex justify-content-center col-xl-4 col-lg-4 col-md-3 col-sm-4" alt="image de mon portrait">
                    <h1 class="d-flex justify-content-center col-xl-4 col-lg-4 col-md-3 col-sm-3 col-6">GUICHOT</h1>
                </div>
            </div>

            <div class="row">
                <div class="devWeb d-flex justify-content-center col-12">
                    <div class="d-flex justify-content-center col-8">
                        <h1>Développeur Web et Web Mobile</h1>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section a propos de moi -->
    <section id="section_Apropo">
        <div class="container-fluid">
            <div class="row">
                <div class="sct-aPropo d-flex align-items-xl-center align-items-lg-center">
                    <h2 class="d-flex justify-content-center col-xl-6 col-lg-5 col-md-12 col-12">À propos de moi :</h2>
                    <div class="animation col-xl-6 col-lg-7 col-md-12 col-12">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <p class="col-11">
                            &nbsp; Je suis développeur et créateur passionné par plusieurs choses.
                        </p>
                        <p class="col-11">
                            &nbsp; Je suis passionné par la culture du Japon, l'informatique, le dessin, l'intelligence artificielle, la robotique, l'électronique, le montage de vidéos, le cinéma, les jeux de cartes, de rôles et de plateaux, lire des livres et l'écriture de récits Fantasy et Fantastique.
                        </p>
                        <p class="col-11">
                            &nbsp; En ma possession, j'ai un niveau BTS "Conception et Réalisation de Systèmes Automatiques" et trois diplômes dont un BAC Pro et BEP "Maintenance des Équipements Industriels" et un CAP "Menuisier Fabricant".
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section projets et realisation -->
    <section id="section_projet" class="sct-projets">
        <div class="container-fluid">
            <div class="row"><h2 class="d-flex justify-content-center col-12">Mes projets et mes réalisations</h2></div>
            
            <!-- block1 projet integration bootstarp -->
            <div class="row">
                <div class="blockMokup d-flex justify-content-xl-around justify-content-lg-around">
                    <div class="d-flex justify-content-center align-items-center col-xl-6 col-lg-6 col-md-12 col-sm-12 order-1">
                        <div class="d-flex justify-content-center align-items-center">
                            <input type="image" id="imgMokup_1" class="imgMokup1 d-flex justify-content-center" value="1" src="mokup/Mokup_projet_bootstarp_redimensionnée.png" alt="mon projet integration site web avec bootstarp">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center col-xl-6 col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="col-10">
                            <div class="col-12">
                                <p>Un des premier projets en formation<br><br>J'ai intégré une maquette sur Figma d'un site web en utilisant le framework Bootstarp</p>
                            </div>
                            <div class="col-12">
                                <p class="txtSmall">Technologies utilisées : <span class="txtItalic">Bootstarp, HTML, CSS</span></p>
                            </div>
                            <div class="visiteWeb">
                                <a target="_blank" href="https://arthurg.promo-93.codeur.online/Projet_Integration_Bootstarp_MNTN/integration_bootstarp.html" class="d-flex justify-content-start col-12">
                                    <div class="arrow"><span class="material-icons">trending_flat</span></div>
                                    <div><p>Visitez le site web</p></div>
                                </a>
                            </div>
                            <div class="visiteWeb">
                                <a target="_blank" href="https://github.com/Cybernet-Studio/Projet_Integratio_Web_MNTN" class="d-flex justify-content-start col-12">
                                    <div class="arrow"><span class="material-icons">trending_flat</span></div>
                                    <div><p>Repositories Github</p></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- block2 projet crédit ledonien -->
            <div class="row">
                <div class="blockMokup d-flex justify-content-around scol-12">
                    <div class="d-flex justify-content-center align-items-center col-6 order-2">
                        <div class="d-flex justify-content-center align-items-center">
                            <input type="image" id="imgMokup_2" class="imgMokup2 d-flex justify-content-center" value="2" src="mokup/mokup_credit_ledonien.jpg" alt="Mon projet en groupe intégration site web Crédit Lédonien">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center col-6 order-1">
                        <div class="col-10">
                            <div class="d-flex justify-content-center align-items-center">
                                <p>Projet en groupe en formation<br><br>Nous avons intégré un site web Crédit Lédonien en groupe de trois.</p>
                            </div>
                            <div class="col-10">
                                <p class="txtSmall">Technologies utilisées :<span class="txtItalic"> Javascript, PHP, HTML, CSS</span></p>
                            </div>
                            <div class="visiteWeb">
                                <a target="_blank" href="https://arthurg.promo-93.codeur.online/Projet-Integration-Credit-Ledonien/index.php" class="d-flex justify-content-center col-12">
                                    <div class="arrow"><span class="material-icons">trending_flat</span></div>
                                    <div><p>Visitez le site web</p></div>
                                </a>
                            </div>
                            <div class="visiteWeb">
                                <a target="_blank" href="https://github.com/Cybernet-Studio/Projet-Integration-Credit-Ledonien/tree/integrationMixe" class="d-flex justify-content-start col-12">
                                    <div class="arrow"><span class="material-icons">trending_flat</span></div>
                                    <div><p>Repositories Github</p></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- block3 projet todo-list -->
                <div class="row">
                    <div class="blockMokup d-flex justify-content-around col-12">
                        <div class="d-flex justify-content-center align-items-center col-6 order-1">
                            <div class="d-flex justify-content-center align-items-center">
                                <input type="image" id="imgMokup_3" class="imgMokup3" value="3" src="mokup/Mokup_Projet_Todolist.png" alt="mon projet Todolist">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center col-6 order-2">
                            <div class="col-10">
                                <div class="col-12">
                                    <p>Autre projet en formation<br><br>J'ai créé une Todolist aux couleurs rétro, avec une sauvegarde en local</p>
                                </div>
                                <div class="col-112">
                                    <p class="txtSmall">Technologies utilisées :<span class="txtItalic"> lOCAL Storage, Javascript, PHP, HTML, CSS</span></p>
                                </div>
                                <div class="visiteWeb">
                                    <a target="_blank" href="https://arthurg.promo-93.codeur.online/Projet_ToDolist/index.html" class="d-flex justify-content-start col-12">
                                        <div class="arrow"><span class="material-icons">trending_flat</span></div>
                                        <div><p>Visitez le site web</p></div>
                                    </a>
                                </div>
                                <div class="visiteWeb">
                                <a target="_blank" href="https://github.com/Cybernet-Studio/Projet-toDolist" class="d-flex justify-content-start col-12">
                                    <div class="arrow"><span class="material-icons">trending_flat</span></div>
                                    <div><p>Repositories Github</p></div>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- block4 projet Comunication API Deezer -->

                <!-- block5 draw Chalice -->
            <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-1">
                        <p>Dessin : Le Calice du Monde <br><br>
                            Je me suis inspiré d'une ilustration d'une carte du jeu Yu-Gi-Oh! 
                            <br><br>Histoire : Le "Calice du Monde" est une des septs reliques de l'héritage du monde appartenant à un dieu vennu sur terre il y-a des milénaires et les a scellés, pour qu'ils ne tombent pas entre de mauvaises main.
                        </p>
                    </div>
                    <div class="BlockDrawVertical d-flex justify-content-center col-6 order-2">
                        <input type="image" id="imgDraw_1" value="5" src="drawing/relicWorldChalice.png" alt="dessin Calice du Monde">
                    </div>
                </div>
            </div>

            <!-- block6 draw Fox-->
            <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-2">
                        <p>Dessin d'un renard fantasy mangas, que j'ai réalisé pour mon examen d'art appliqué du Bac Pro.
                            <br><br> Histoire : Un renard de lumière aux ailes de nuit du nom de Ichigo est un protecteur de la vie humaine.
                        </p>
                    </div>
                    <div class="BlockDrawHorizontal d-flex justify-content-center align-items-center col-6 order-1">
                        <input type="image" id="imgDraw_2" value="6" src="drawing/foxOfLightBlack.png" alt="dessin d'un renard de lumière aux ailes de nuit">
                    </div>
                </div>
            </div>

            <!-- block7 draw city inverted-->
            <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-1">
                        <p>
                            Dessin : la cité inversée
                            <br><br>Histoire : La cité Inverted, est une cité à la technologie douteuse. Une experience fatale a mal tournée, changeant la gravité et tout ce qui l'entour. Une nouvelle ville au sens inversé a été créer.
                        </p>
                    </div>
                    <div class="BlockDrawHorizontal  d-flex justify-content-center align-items-center col-6 order-2">
                        <input type="image" id="imgDraw_3" value="7" src="drawing/cityInverted.png" alt="dessin ka cité inversé">
                    </div>
                </div>
            </div>

            <!-- block8 draw haloween -->
            <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-2">
                        <p>
                            Dessin de manga, je me suis inspiré de quelques illustraions de cartes Yu-Gi-Oh!
                            <br><br> Histoire : Le fantôme d'un enfant mort le soir d'haloween, passe dans les cimetières pour hanter aux personnes qui le croisèrent.
                        </p>
                    </div>
                    <div class="BlockDrawVertical  d-flex justify-content-center col-6 order-1">
                        <input type="image" id="imgDraw_4" value="8" src="drawing/haloween.png" alt="dessin haloween">
                    </div>
                </div>
            </div>

             <!-- block9 draw cité imaginaire 3D-->
             <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-1">
                        <p>Dessin en perspective, d'une ville imaginaire en 3D</p>
                    </div>
                    <div class="BlockDrawVertical  d-flex justify-content-center col-6 order-2">
                        <input type="image" id="imgDraw_5" value="9" src="drawing/oeil3D.png" alt="dessin cité imginaire en 3D">
                    </div>
                </div>
            </div>

             <!-- block10 draw Numéro66-->
             <div class="row">
               <div class="blockDraw d-flex justify-content-around">
                    <div class="blockTxtDrawing d-flex justify-content-center align-items-center col-6 order-2">
                        <p>Dessin de manga réaliser au collége, du personnage "Numéro 66" du manga Fullmetal Alchemist</p>
                    </div>
                    <div class="BlockDrawVertical  d-flex justify-content-center col-6 order-1">
                        <input type="image" id="imgDraw_6" value="10" src="drawing/number66.png" alt="dessin personnage en armure du manga Fullmetal Achemiste">
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
                                        <img src="logo/logo-Cd-js.svg" id="logoJs" title="Javascript" alt="Logo Javascript">
                                        <img src="logo/logo-Cd-php.svg" id="logoPhp" title="PHP" alt="Logo php">
                                        <img src="logo/logo-Cd-java.svg" id="logoJava" title="Java" alt="Logo Java">
                                    </div>

                                    <div class="d-flex justify-content-around">
                                        <img src="logo/logo-Cd-html.svg" id="logoHtml" title="HTML 5" alt="Logo Html5">
                                        <img src="logo/logo-Lg-mySql.svg" id="logoMsql" title="MySQL" alt="Logo MySQL">
                                        <img src="logo/logo-Cd-css.svg" id="logoCss" title="CSS 3" alt="Logo Css3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-6">
                        <div class="framework">
                            <h3 class="d-flex justify-content-center col-12">Frameworks :</h3>
                            <div class="d-flex justify-content-center">
                                <div class="col-10">
                                    <div class="logoSpanLine d-flex justify-content-center">
                                        <div class="d-flex justify-content-around col-7">
                                            <img src="logo/logo-Fw-react.svg" id="logoReact" title="React" alt="Logo React">
                                            <img src="logo/logo-Fw-vueJs.svg" id="logoVueJs" title="Vue Js" alt="Logo Vue Js">
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <div class="d-flex justify-content-around col-7">
                                            <img src="logo/logo-Fw-bootstarp.svg" id="logoBootstarp" title="Bootstarp" alt="Logo Bootstarp">
                                            <img src="logo/logo-Fw-laravel.svg" id="logoLaravel" title="Laravel" alt="Logo Laravel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="logiciel">
                            <h3 class="d-flex justify-content-center col-12">Logiciels :</h3>
                            <div class="d-flex justify-content-center">
                                <div class="col-10">
                                    <div class="logoSpanLine d-flex justify-content-center">
                                        <div class="d-flex justify-content-around col-7">
                                            <img src="logo/logo-Lg-vsc.svg" id="logoVsc" title="Visual Sudio Code" alt="Logo Visual Studio Code">
                                            <img src="logo/logo-Lg-worpress.svg" id="logoWordpress" title="WordPress" alt="Logo Wordpress">
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <div class="d-flex justify-content-around col-7">
                                            <img src="logo/logo-Lg-figma.svg" id="logoFgma" title="Figma" alt="Logo Figma">
                                            <img src="logo/logo-Lg-vegasPro.svg" id="logoVp" title="Sony Vegas Pro" alt="Logo Vegas Pro">
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
                    <div class="d-flex justify-content-center">
                        <form method="POST" action="">
                            <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
                            <input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
                            <textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
                            <input id="btEnvoyer" type="submit" value="Envoyer !" name="mailform"/>
                        </form>
                    <?php
                        if(isset($msg)) {
                            echo $msg;
                        }
                    ?>
                    </div>
                </div>
            </div>
        </section>
</main>

    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="src.js" async></script>
</body>
</html>