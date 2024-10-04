<?php 
    require_once 'head.php'; 
?>

    <body>
        <nav class="navbar">
            <div class="navbar-title">Salim</div>
            <div class="icon-container">
                <!-- <div class="palette-icon custom-button">
                    Télécharger mon CV
                </div> -->
                        <a class="download-btn-navbar" href="../assets/Cv Développeur Web  Salim.pdf" download class="download-btn-navbar">
                            <i class="fa-solid fa-file-arrow-down download-link-btn-navbar"></i>
                            Télécharger mon CV
                        </a>
                <!-- <div id="openCustomModal" class="palette-icon custom-button" onclick="document.getElementById('customModal').style.display='block'">
                    <i class="fa-solid fa-bars"></i>
                </div> -->
            </div>
        </nav>
        
        <section class="bento-section" id="particles-js">
            <div class="bento-container">

                <!-- Case 1 - photo -->
                <div class="bento-item item-1 fadeIn"></div>

                <!-- Case 2 - Présentation -->
                <div class="bento-item item-2">
                    <h1 class="typing-effect">Salim ABABULGU</h1>
                    <h4 class="subtitle">Développeur web</h4>
                    <div class="media-row">
                        <a class="social" href="https://github.com/salim-ababulgu">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a class="social" href="https://www.linkedin.com/feed/">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a class="social" href="https://mail.google.com/mail/u/0/#inbox">
                            <i class="fa-brands fa-at"></i>
                        </a>
                    </div>
                </div>

                <!-- Case 3 - Description -->
                <div class="bento-item item-3 fade-in-down">
                    <div class="description-case">
                        <p><strong>👋 Bonjour et bienvenue sur mon portfolio,</strong></p>
                        <p class="text-description">
                            Actuellement en cursus préparatoire à l'école La Plateforme à Martigues, je suis à la recherche d'une entreprise qui saura reconnaître mon potentiel pour un bachelor en développement web.
                            <br><br> Grâce à mes diverses expériences dans ce domaine, j'ai pu forger des compétences solides, prêtes à être mises à profit pour votre entreprise.
                            <br><br> Mon sérieux et mon investissement sont des atouts indéniables, et je suis convaincu de pouvoir apporter une réelle valeur ajoutée à vos projets. 
                            <br><br>N'hésitez pas à parcourir mon CV et à me contacter pour toute information complémentaire.
                        </mp>
                    </div>
                    <div class="case-bottom">
                        <a class="download-btn-in-bento" href="assets/Cv Développeur Web  Salim.pdf" download class="download-btn-in-bento">
                            <i class="fa-solid fa-file-arrow-down download-link-btn-in-bento"></i>
                            Télécharger mon CV
                        </a>
                    </div>
                </div>

                <!-- Case 4 - Compétence en marquee -->
                <div class="bento-item item-4">
                    <div class="wrapper">
                        <div class="item item1">
                            <div class="marquee-column">
                                <i class="fab fa-html5"></i>
                                <span>HTML</span>
                            </div>
                        </div>
                        <div class="item item2">
                            <div class="marquee-column">
                                <i class="fab fa-css3-alt"></i>
                                <span>CSS</span>
                            </div>
                        </div>
                        <div class="item item3">
                            <div class="marquee-column">
                                <i class="fab fa-js"></i>
                                <span>JavaScript</span>
                            </div>
                        </div>
                        <div class="item item4">
                            <div class="marquee-column">
                                <i class="fab fa-react"></i>
                                <span>React</span>
                            </div>
                        </div>
                        <div class="item item5">
                            <div class="marquee-column">
                                <i class="fab fa-php"></i>
                                <span>PHP</span>
                            </div>
                        </div>
                        <div class="item item6">
                            <div class="marquee-column">
                                <i class="fab fa-vuejs"></i>
                                <span>Vite.js</span>
                            </div>
                        </div>
                        <div class="item item7">
                            <div class="marquee-column">
                                <i class="fab fa-node-js"></i>
                                <span>Express</span>
                            </div>
                        </div>
                        <div class="item item8">
                            <div class="marquee-column">
                                <i class="fas fa-database"></i>
                                <span>MongoDB</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case 5 - Projet avec slider -->
                <div class="bento-item item-5 fade-in-up">
                    <div class="wrapper-verticale">
                        <div class="item-verticale item2-verticale">
                            <img src="../images/project_e-commerce.png" alt="Project E-commerce">
                        </div>
                        <div class="item-verticale item2-verticale">
                            <img src="../images/project_portfolio.png" alt="Project portfolio">
                        </div>
                        <div class="item-verticale item3-verticale">
                            <img src="../images/project_quiz-night.png" alt="Project Quiz-night">
                        </div>
                        <div class="item-verticale item4-verticale">
                            <img src="../images/peoject_book-buddy.png" alt="Peoject Book-buddy">
                        </div>
                        <div class="item-verticale item6-verticale">
                            <img src="../images/project_cinetech.png" alt="Project Cinetech">
                        </div>
                        <div class="item-verticale item7-verticale">
                            <img src="../images/project_clicker-game.png" alt="Project Clicker-game">
                        </div>
                        <div class="item-verticale item8-verticale">
                            <img src="../images/project_happy-meal.png" alt="Project Happy-meal">
                        </div>
                        <div class="item-verticale item8-verticale">
                            <img src="../images/project_matcha-tea.png" alt="Project Matcha-tea">
                        </div>
                        <div class="item-verticale item8-verticale">
                            <img src="../images/project_fansite.png" alt="Project Fansite">
                        </div>
                    </div>
                    <button id="openModal" class="btn-overlay">Découvrez mes projets</button>
                </div>

                <!-- Case 6 - Contact -->
                <div class="bento-item item-6 fade-in-up">
                    <div class="social-contact">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <!-- <div class="spinner">
                            <div class="spinner-little"></div>
                        </div> -->
                    </div>
                    <p class="social-paragraphe">Je suis à la recherche active d'une alternance</p>
                    <!-- <a id="openModal_portfolio_modal_contact" class="btn-contact">Contactez moi</a> -->
                    <div data-tf-live="01J98X0P3FS5FH5TXDD7HGEPHP"></div><script src="//embed.typeform.com/next/embed.js"></script>
                </div>


<!-- <button data-modal="contact" class="btn-contact">Contactez moi</button>
<button data-modal="projects" class="btn-projects">Mes Projets</button> -->
            


            </div>
        </section>

       


<?php 
    require_once 'footer.php'; 
?>

        