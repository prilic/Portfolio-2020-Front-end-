<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierre Nyssen Developpeur Web - Namur</title>
    <meta name="description" content="Developpeur Web orienté front-end"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
    <header>
        <div id="container">
            <div class="strip1"></div>
            <div class="strip2"></div>
            <div class="strip3"></div>
        </div>
        <nav>
            <div id="wrapper">
                 <ul>
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Portfolio</a></li>
                    <li><a href="">contact</a></li>
                </ul>               
            </div>
        </nav>
        <div id="header">
            <div id="welcome-message">
                <h1>Pierre Nyssen</h1>
                <p>Developpeur Web orienté front-end</p>
                <span class="btn x-base"><a href="">Voir les projets</a></span>
            </div>
        </div>
    </header>
    
    <main>
        <section id="about" class="x-medium">
            <h2>&#192; Propos</h2>
            <div id="about-content">
                <div id="about-illustration" class="x-base">
                    <img src="images/technology-1283624_640.jpg" alt="technology">
                </div >
                <div id="presentation" class="intro-text">
                    <p class="x-base">Je suis un développeur web orienté front-end, impliqué dans mon travail, je n'hésite pas à mettre à profit toutes mes compétences. Par ma motivation j'apporte à l'entreprise un collaborateur aux compétences expansibles. Ainsi qu'une véritable passion du web. Pendant ma formation, j’ai appris les langages et technologies tels que HTML5, CSS3, JavaScript, JQuery, MySQL et PHP ainsi que le fonctionnement des réseaux/serveurs. Ouvert à la communication, je suis attentif et je sais détecter les besoins du client. Lors de ma réalisation finale de formation, j'ai peaufiné mon approche grâce à la méthodologie de travail AGILE SCRUM.</p>
                    <div id="intro-btn" class="x-base">
                        <span class="btn"><a href="www.linkedin.com/in/pierre-nyssen"><i class="fab fa-linkedin-in"></i></a></span>
                        <span class="btn"><a href="https://github.com/prilic"><i class="fab fa-github"></i></a></span>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="x-medium">
            <h2>Skills</h2>
            <div id="flex-contener">
                <div class="skills-set">
                    <img src="images/icons/laptop-solid.svg" alt="Font-end">
                    <h4>Front-end</h4>
                    <ul>
                        <li>Html</li>
                        <li>Css</li>
                        <li>JavaScript</li>
                        <li>JQuery</li>
                        <li>Bootstrap</li>
                    </ul>
                </div>
                <div class="skills-set">
                    <img src="images/icons/server-solid.svg" alt="Back-end">
                    <h4>Back-end</h4>
                    <ul>
                        <li>Php</li>
                        <li>MySql</li>
                    </ul>
                </div>
                <div class="skills-set">
                    <img src="images/icons/window-restore-solid.svg" alt="Software">
                    <h4>Technologies</h4>
                    <ul>
                        <li>VS Code</li>
                        <li>Git</li>
                        <li>Linux</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="portfolio">
            <h2>Portfolio</h2>
            <div class="project">
                <div class="project-img">
                    <img src="images/preview/tactic.png" alt="screenshoot du site tactic emploi">
                </div>
                <div class="project-desc">
                    <h3>Site TACTIC Emploi</h3>
                    <p>Est un site servant à faire découvrir une formation pour les demandeurs d'emplois. Il offre la possibilité de connaître toutes les informations concernant celle-ci et de pouvoir s'y inscrire. Une fois que l'utilisateur a confirmé sa demande sur le site, ce dernier reçoit une notification que sa demande a été bien validée.</p>
                    <div class="link">
                        <span class="btn live-demo"><a href="https://prilic.github.io/mini-site-tactic/index.html#" target="_blank">Demo</a></span>
                        <span class="btn view-code"><a href="">Code</a></span>  
                    </div>

                </div>
            </div>
            <div class="project">
                <div class="project-img">
                    <img src="images/preview/edr.png" alt="screenshoot de l'application web Enfants des rues">
                </div>
                <div class="project-desc">
                    <h3>Enfants des rues</h3>
                    <p>Un "serious game" réalisé pour Louvain Coopération dans le cadre de la deuxième édition du Hackathon "Hack in The Woods".</p>
                    <p>Le dispositif pour objectif de sensibiliser le joueur à la condition des enfants des rues de Kinshasa.</p>
                    <div class="link">
                        <span class="btn live-demo"><a href="https://prilic.github.io/enfants_des_rues/" target="_blank">Demo</a></span>
                        <span class="btn view-code"><a href="">Code</a></span>
                    </div>

                </div>
            </div>
            <div class="project">
                <div class="project-img">
                    <img src="images/preview/project-jin.png" alt="screenshoot du portfolio artiste project-jin">
                </div>
                <div class="project-desc">
                    <h3>Project Jin</h3>
                    <p>Site web réalisé pour un client musicien dans le cadre de projet de fin de formation avec présentation devant un jury. Les fonctions de celui-ci est de pouvoir ajouter et modifier des démonstrations audio des réalisations du client et de pouvoir le contacter via un formulaire de contact.</p>
                    <div class="link">
                        <span class="btn live-demo"><a href="www.project-jin.yo.fr" target="_blank">Demo</a></span>
                        <span class="btn view-code"><a href="">Code</a></span>
                    </div>

                </div>
            </div>
            <div class="project">
                <div class="project-img">
                    <img src="images/preview/computeurmuseum.png" alt="screenshoot du site computer museum">
                </div>
                <div class="project-desc">
                    <h3>Computer museum</h3>
                    <p>Projet réalisé pour mettre en pratique mes compétences en HTML, CSS3 et Javascript</p>
                    <div class="link">
                        <span class="btn live-demo"><a href="https://prilic.github.io/computermuseum/" target="_blank">Demo</a></span>
                        <span class="btn view-code"><a href="">Code</a></span>                        
                    </div>

                </div>
            </div>

        </section>

        <section id="contact" class="x-medium">

            <h2 class="x-base">Contact</h2>

            <form action="index.php" method="POST">
                <div class="input">
                    <div class="label">
                        <label for="name">Nom:</label>
                    </div>
                    <div class="form-ipt">
                        <input type="text" name="name" id="name">
                    </div>
                </div>

                <div class="input">
                    <div class="label">
                        <label for="email">Email:</label>
                    </div>
                    <div class="form-ipt">
                        <input type="email" name="email" id="email">
                    </div>
                </div>

                <div class="input">
                    <div class="label">
                        <label for="object">Objet:</label>
                    </div>
                    <div class="form-ipt">
                        <input type="text" name="object" id="object">
                    </div>
                </div>

                <div class="input">
                    <div class="label">
                        <label for="message">Message:</label>
                    </div>
                    <div class="form-ipt">
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="input">
                    <input type="button" value="Envoyer" class="btn">
                </div>
            </form>
            <?php include script/mail.php; ?>
        </section>
    </main>
    <footer>
        <p>&copy; Pierre Nyssen</p>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>