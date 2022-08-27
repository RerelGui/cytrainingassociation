<!DOCTYPE html>




<html>
    <head lang="fr">
        <title>CY Training Association</title>
        <meta charset="UTF-8">
        <meta name="keywords" content="CY Training Association">
        <meta name="description"
            content="CY Training Association est une association de CY Tech dont le but est de former les étudiants aux métiers d'audit et de conseil.">
        <meta name="author" content="Margaux GONTIE & Jérémy GROGUELIN-BESNARD & Aurélien GUIMONT ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/d0ad92ffe2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../function.js" />
    </head>
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

        body, html {
        height: 100%;  
        line-height: 1.8;
        }

        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url("../images/filtre.png");
            min-height: 100%;
        }
        .bar .button {
            padding: 16px;
        }

    </style>  


    <body>

        <!-- Barre de navigation en haut -->
        <div class="top">
            <div class="bar white card" id="myNavbar">
                <img class="image round-large" src="../images/logo_simple.png" alt="Logo" width="50" height="auto" style="float:left">
                <a href="#home" class="bar-item button wide">CY Training Association</a>
                <!-- Liens vers les parties du site à droite -->
                <div class="right hide-small">
                    <a href="#about" class="bar-item button">A PROPOS</a>
                    <a href="#team" class="bar-item button"><i class="fa fa-user"></i> EQUIPE</a>
                    <a href="#work" class="bar-item button"><i class="fa fa-th"></i> PROJET</a>
                    <a href="#contact" class="bar-item button"><i class="fa fa-envelope"></i> CONTACT</a>
                </div>
                <!-- Icone si on est sur un petit écran -->

                <a href="#" class="bar-item button right hide-large hide-medium" onclick="_open()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>

        <!-- Barre de navigation verticale quand on est sur petit écran -->
        <nav class="sidebar bar-block black card animate-left hide-medium hide-large" style="display:none" id="mySidebar">
            <a href="#" onclick="_close()" class="bar-item button large padding-16">Fermer ×</a>
            <a href="#about" onclick="_close()" class="bar-item button">A PROPOS</a>
            <!-- <a href="#team" onclick="_close()" class="bar-item button">EQUIPE</a>
            <a href="#work" onclick="_close()" class="bar-item button">PROJET</a> -->
            <a href="#pricing" onclick="_close()" class="bar-item button"> OFFRES</a>
            <a href="#contact" onclick="_close()" class="bar-item button">NOUS CONTACTER</a>
        </nav>

        <!-- Entête avec image en plein écran -->
        <header class="bgimg-1 display-container" id="home">
            <div class="display-left text-white" style="padding:48px;padding-top:80px">
                <span class="jumbo hide-small">Votre formation, notre mission !</span><br>
                <span class="xxlarge hide-large hide-medium">Le sport à portée de doigts !</span><br>
                <h3>Notre mission :</h3>
                <h3>Former les étudiants de CY Tech sur des thématiques transversesau monde de l’entreprise !</h3><br><br>
                <div class="col m5 hide-small hide-medium" style="margin-right:1000px; margin-bottom:50px">
                    <span class="large">Les ingénieurs de demain se doivent d’être toujours plus complets à la sortie de leur cursus de formation. Pour répondre à cet enjeu d’avenir, la CY Training Association forme les étudiants de CY Tech sur des thématiques complémentaires à leur cursus. De la mise en place d’une stratégie commerciale, au pilotage d’un budget en passant par le suivi RH, les étudiants développent de nouvelles compétences et renforcent ainsi leur employabilité.</span>
                </div>
            </div>
            
             
            <div class="display-bottomleft text-dark-grey large" style="padding:24px 48px">
                <a href="https://m.facebook.com/profile.php?id=100069845695998&lst=100010060621196%3A100069845695998%3A1625563617"><i class="fa fa-facebook-official hover-opacity"></i></a>
                <a href="https://www.instagram.com/posnfit/"><i class="fa fa-instagram hover-opacity"></i></a>
            </div>
        </header>

        <!-- Section "à propos" -->
        <div class="container" style="padding:128px 16px" id="about">
            <h3 class="center">A PROPOS DE NOTRE ASSOCIATION</h3>
            <p class="center large">Ce qui nous caractérise</p>
            <div class="row-padding center" style="margin-top:64px">
                <div class="third">
                    <i class="fa fa-people-carry-box margin-bottom jumbo text-green"></i>
                    <p class="large text-cyan">Pédagogie</p>
                    <p>Nous alternons entre formations théoriques et ateliers pratiques afin que chaque étudiant puisse avoir une réelle expérience du sujet. Nous nous appuyons sur la pratique car elle permet une meilleure compréhension et appropriation des sujets abordés.</p>
                </div>
                <div class="third">
                    <i class="fa fa-people-arrows margin-bottom jumbo center text-green"></i>
                    <p class="large text-cyan">Accompagnement</p>
                    <p>Nous assurons un accompagnement personnalisé de tous les étudiants que nous formons. Ceux-ci bénéficient d’un suivi personnalisé tout au long de leur parcours. Ils peuvent également bénéficier, sur demande, de sessions individuelles afin d’approfondir les sujets abordés en groupe.</p>
                </div>
                <div class="third">
                    <i class="fa fa-user-gear margin-bottom jumbo text-green"></i>
                    <p class="large text-cyan">Expertise </p>
                    <p>Fort d’un brillant parcours de Junior-Entrepreneur, premièrement en tant que membre dirigeant de la Junior-Entreprise de CY Tech, puis en tant qu’Auditeur-Conseil pour la Confédération Nationale des Junior-Entreprises, les formateurs de la CY Training Association maîtrisent parfaitement les sujets abordés.</p>
                </div>                
            </div>
        </div>

        <!-- Section "auto promo" -->
        <div class="container light-grey" style="padding:128px 16px" id="work">
            <div class="row-padding">
                <div class="col m5">
                    <h3>Où nous trouver ?</h3>
                    <p>Nous sommes situés au plus près des élèves de dernière année au sein du bâtiment Saint-Martin de CY Cergy Paris Université. Nous intervenons également sur les autres sites où est implanté CY Tech :</p>
                    </p>    Le site du Parc</p>
                    </p>    Le site de Fermat</p>
                    </p>    Le site de Neuville-sur-Oise</p>
                </div>
                <div class="col l7">
                    <iframe class="map round-large" src="https://www.google.com/maps/d/u/0/embed?mid=1cgZAB5y9JS9jLidDU_coX5rcy7kBGyw&ehbc=2E312F" width="80%" height="500px"></iframe>
                </div>
            </div>
        </div>

        

        <!-- Team Section -->

        <style>
            .description{height : max-content}
        </style>


        <div class="container" style="padding-top:120px; padding-right:16px; padding-left:16px" id="team">
            <h3 class="center">L'équipe</h3>
            <p class="center large">Les dirigeants de l'association</p>
            <div class="row-padding " style="margin-top:64px">
                <div class="col l4 m6 margin-bottom">
                    <div class="card">
                        <img src="../images/jérémy.png" alt="Jérémy" style="width:100%">
                        <div class="container">
                            <h4 class="center description">Jérémy G.-B.</h4>
                            <p class="opacity description">Président de la CY Training Association</p>
                            <p class="description">Président 2021-2022 de CY Junior Engineering</p>
                            <p class="description">Auditeur-Conseil en Organisationnel à la CNJE</p>
                            <div class="linkedin">
                                <a href="https://www.linkedin.com/in/j%C3%A9r%C3%A9my-groguelin-besnard-54022a205/"><img src="../images/linkedin.png" style="display: block;margin-left: auto;margin-right: auto; margin-bottom: 8px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l4 m6 margin-bottom">
                    <div class="card">
                        <img src="../images/margaux.png" alt="Margaux" style="width:100%">
                        <div class="container">
                            <h4 class="center description">Margaux G.</h4>
                            <p class="opacity description">Secrétaire Générale de la CY Training Association</p>
                            <p class="description">Secrétaire Générale 2021-2022 de CY Junior Engineering</p>
                            <p class="description">Auditrice-Conseil en Organisationnel à la CNJE</p>
                            <div class="linkedin">
                                <a href="https://www.linkedin.com/in/margaux-gonti%C3%A9-933531201/"><img src="../images/linkedin.png" style="display: block;margin-left: auto;margin-right: auto; margin-bottom: 8px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l4 m6 margin-bottom">
                    <div class="card">
                        <img src="../images/aurel.png" alt="Aurélien" style="width:100%">
                        <div class="container">
                            <h4 class="center description">Aurélien G.</h4>
                            <p class="opacity description">Trésorier de la CY Training Association</p>
                            <p class="description">Vice-Trésorier 2021-2022 de CY Junior Engineering</p>
                            <p class="description">Auditeur-Conseil en Trésorerie à la CNJE</p>
                            <div class="linkedin">
                                <a href="https://www.linkedin.com/in/aur%C3%A9lien-guimont-8a13081bb/"><img src="../images/linkedin.png" style="display: block;margin-left: auto;margin-right: auto; margin-bottom: 8px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nos stats -->
        <div class="container row center dark-grey padding-64">
            <h3 class="center" style="padding-bottom: 50px;">ILS NOUS FONT CONFIANCE</h3>
            <div class="third">
                <img src="../images/cytech.png" style="height: 310px;width:310">
            </div>
            <div class="third">
                <img src="../images/cyje.png" style="height: 310px;width:310">
            </div>
            <div class="third">
                <img src="../images/cyu.png" style="height: 310px;width:310">
            </div>
        </div>


        <!-- Modalités images en taille normale -->
        <div id="modal01" class="modal black" onclick="this.style.display='none'">
            <span class="button xxlarge black padding-large display-topright" title="Close Modal Image">×</span>
            <div class="modal-content animate-zoom center transparent padding-64">
                <img id="img01" class="image">
                <p id="caption" class="opacity large"></p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="container light-grey" style="padding:128px 16px" id="contact">
            <h3 class="center">Nous contacter</h3>
            <p class="center large">Restons en contact, envoyez-nous un message :</p>
            <div style="margin-top:48px">
                <p><i class="fa fa-map-marker fa-fw xxlarge margin-right"></i> 95000, Cergy</p>
                <p><i class="fa fa-phone fa-fw xxlarge margin-right"></i> Téléphone: 06.52.57.19.95</p>
                <p><i class="fa fa-envelope fa-fw xxlarge margin-right"> </i> Email: </p>
                <br>
                <script type="text/javascript" src="https://form.jotform.com/jsform/211812317864354"></script>
                <!-- Image of location/map -->
               
            </div>
        </div>

        <!-- Footer -->
        <footer class="center black padding-64">
            <a href="#home" class="button light-grey"><i class="fa fa-arrow-up margin-right"></i>Retourner en haut de page</a>
            <div class="xlarge section">
                <a href=""><i class="fa fa-facebook-official hover-opacity"></i></a>
                <a href=""><i class="fa fa-instagram hover-opacity"></i></a>
            </div>
        </footer>
        <script>
            // Modal Image Gallery
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }
            
            
            // Toggle between showing and hiding the sidebar when clicking the menu icon
            var mySidebar = document.getElementById("mySidebar");
            
            function _open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
            }
            
            // Close the sidebar with the close button
            function _close() {
                mySidebar.style.display = "none";
            }
        </script>
    </body>





</html>
