<?php
    // Versioning du site
    $version = '0.0.2';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio . Salim ABABULGU</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> -->
    <link rel="shortcut icon" href="./images/logo.jpg" type="image/x-icon">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css?v=<?php echo $version; ?>">
</head>
    <body>
        <nav class="navbar">
            <div class="navbar-title">Salim</div>
            <div class="icon-container">
                <div id="openCustomModal" class="palette-icon custom-button" onclick="document.getElementById('customModal').style.display='block'">
                    <!-- <i class="fa-solid fa-swatchbook"></i> -->
                    <img class="icon" src="images/swatch-book.svg" alt="icon de palette">
                </div>
                <a href="dashboard\index_dashboard.php" class="dashboard-link">Tableau de bord</a>
            </div>
        </nav>
        
        <section class="bento-section">
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
                            <img class="icon" src="images/swatch-book.svg" alt="icon de palette">
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
                        <a class="download-btn" href="assets/Cv Développeur Web  Salim.pdf" download class="download-btn">
                            <i class="fa-solid fa-file-arrow-down download-link-btn"></i>
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
                        <div class="item-verticale item1-verticale">
                            <img src="./images/project_e-commerce.png" 
                                srcset="./images/project_e-commerce-small.png 300w,
                                        ./images/project_e-commerce-medium.png 600w,
                                        ./images/project_e-commerce.png 900w"
                                sizes="(max-width: 320px) 280px,
                                        (max-width: 768px) 600px,
                                        900px"
                                alt="Project E-commerce" 
                                loading="lazy"
                                class="card-img">
                        </div>
                        <div class="item-verticale item2-verticale">
                            <img src="./images/project_portfolio.png" alt="Image 2">
                        </div>
                        <div class="item-verticale item3-verticale">
                            <img src="./images/project_quiz-night.png" alt="Image 3">
                        </div>
                        <div class="item-verticale item4-verticale">
                            <img src="./images/peoject_book-buddy.png" alt="Image 4">
                        </div>
                        <!-- <div class="item-verticale item5-verticale">
                            <img src="https://via.placeholder.com/300x400" alt="Image 5">
                        </div> -->
                        <div class="item-verticale item6-verticale">
                            <img src="./images/project_cinetech.png" alt="Image 6">
                        </div>
                        <div class="item-verticale item7-verticale">
                            <img src="./images/project_clicker-game.png" alt="Image 7">
                        </div>
                        <div class="item-verticale item8-verticale">
                            <img src="./images/project_happy-meal.png" alt="Image 8">
                        </div>
                        <div class="item-verticale item8-verticale">
                            <img src="./images/project_matcha-tea.png" alt="Image 8">
                        </div>
                        <!-- <div class="item-verticale item8-verticale">
                            <img src="https://via.placeholder.com/300x400" alt="Image 8">
                        </div> -->
                        <div class="item-verticale item8-verticale">
                            <img src="./images/project_fansite.png" alt="Image 8">
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
                    <a id="openOffcanvas" class="btn-contact">Contactez moi</a>
                    <!-- <button id="openOffcanvas">Contactez moi</button> -->
                </div>
            </div>
        </section>

        <footer>
            <div class="footer-icon">
              <i class="fa-solid fa-arrow-up-right-from-square icon-open-footer"></i>
              <div class="dropdown-content">
                <div class="dropdown-bouton-parents">
                    <a class="dropdown-bouton" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right icon-footer"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
                        Condition d'utilisation
                    </a>
                    <a class="dropdown-bouton" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right icon-footer"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
                        Politique de cookies 
                    </a>
                    <a class="dropdown-bouton" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right icon-footer"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
                        Mentions légales
                    </a>
                </div>
                <p class="dropdown-text">© 2024 Salim. Tous droits réservés.</p>
              </div>
            </div>
        </footer>

        <!-- Modal de théme -->
        <div id="customModal" class="custom-modal">
            <div class="custom-modal__content">
              <header class="custom-modal__header">
                <h2 class="custom-modal__title">Apparence</h2>
                <button class="custom-modal__close">&times;</button>
              </header>
              <div class="custom-modal__body">
                <section class="custom-modal__section">
                  <h3 class="custom-modal__subtitle">Couleur d'accentuation</h3>
                  <p class="custom-modal__text">Modifiez la couleur d'accentuation</p>
                  <div class="custom-modal__color-options">
                    <button class="custom-modal__color-option" data-color="#000000" style="background-color: #000000;"></button>
                    <button class="custom-modal__color-option" data-color="#6366F1" style="background-color: #6366F1;"></button>
                    <button class="custom-modal__color-option" data-color="#8B5CF6" style="background-color: #8B5CF6;"></button>
                    <button class="custom-modal__color-option selected" data-color="#3B82F6" style="background-color: #3B82F6;"></button>
                    <button class="custom-modal__color-option" data-color="#0EA5E9" style="background-color: #0EA5E9;"></button>
                    <button class="custom-modal__color-option" data-color="#06B6D4" style="background-color: #06B6D4;"></button>
                    <button class="custom-modal__color-option" data-color="#14B8A6" style="background-color: #14B8A6;"></button>
                    <button class="custom-modal__color-option" data-color="#10B981" style="background-color: #10B981;"></button>
                    <div class="custom-modal__custom-color">
                      <span>Personnalisé</span>
                      <input type="text" id="customColorInput" value="#F5F5F5" class="custom-modal__input custom-modal__color-input">
                    </div>
                  </div>
                </section>
                <section class="custom-modal__section">
                  <h3 class="custom-modal__subtitle">Thème de l'interface</h3>
                  <p class="custom-modal__text">Sélectionnez ou personnalisez votre thème d'interface utilisateur.</p>
                  <div class="custom-modal__theme-options">
                    <label class="custom-modal__theme-option">
                      <input type="radio" name="theme" value="system">
                      <div class="custom-modal__theme-preview custom-modal__system-theme"></div>
                      <span>Préférence système</span>
                    </label>
                    <label class="custom-modal__theme-option">
                      <input type="radio" name="theme" value="light">
                      <div class="custom-modal__theme-preview custom-modal__light-theme"></div>
                      <span>Clair</span>
                    </label>
                    <label class="custom-modal__theme-option">
                      <input type="radio" name="theme" value="dark">
                      <div class="custom-modal__theme-preview custom-modal__dark-theme"></div>
                      <span>Sombre</span>
                    </label>
                  </div>
                </section>
                <section class="custom-modal__footer">
                    <button class="custom-modal__button custom-modal__button--text">Réinitialiser les valeurs par défaut</button>
                </section>
              </div>
            </div>
          </div>



        <!-- Offcanvas -->
        <div id="contactOffcanvas" class="offcanvas">
            <div class="offcanvas-header">
                <h2 class="offcanvas-title">Contactez moi</h2>
                <button class="close-btn-offcanvas">&times;</button>
            </div>
            <div class="offcanvas-content">
                <div class="info-cards">
                    <div class="info-card">
                        <i class="fas fa-phone"></i>
                        <p>07 49 44 47 56</p>
                    </div>
                    <div class="info-card">
                        <i class="fas fa-envelope"></i>
                        <p>salimababulgu@gmail.com</p>
                    </div>
                    <div class="info-card">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Istres</p>
                    </div>
                    <div class="info-card">
                        <i class="fas fa-car"></i>
                        <p>Véhiculée</p>
                    </div>
                </div>
    
                <div class="separator">ou</div>
    
                <form id="contactForm">
                    <input type="text" id="nom" placeholder="Nom" required>
                    <input type="text" id="prenom" placeholder="Prénom" required>
                    <input type="email" id="email" placeholder="Email" required>
                    <textarea id="message" placeholder="Message" required></textarea>
                    <button type="submit">Envoyez</button>
                </form>
            </div>
        </div>


        <!-- Overlay du modal de projet -->
        <div id="overlay-offccanvas" class="overlay"></div>

        <!-- Modal de projet -->
        <div id="cardModal" class="modal fade-in-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Mes projets</h2>
                    <span class="close-modal">&times;</span>
                </div>
                <!-- Carte de Modal -->
                <div class="card-container">
                    <div class="card">
                        <img class="card-img" src="images/project_e-commerce.png" alt="Image 1">
                        <div class="card-content">
                            <div class="card-action">
                                <h3 class="card-title">Re-Gaming</h3>
                                <svg class="lucide lucide-arrow-up-right card-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                                </svg>
                            </div>
                            <span class="card-tag">html</span>
                            <span class="card-tag">tailwind.css</span>
                            <span class="card-tag">php</span>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img" src="./images/project_portfolio.png" alt="Image 1">
                        <div class="card-content">
                            <div class="card-action">
                                <h3 class="card-title">Portfolio</h3>
                                <svg class="lucide lucide-arrow-up-right card-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                                </svg>
                            </div>
                            <span class="card-tag">html</span>
                            <span class="card-tag">tailwind.css</span>
                            <span class="card-tag">php</span>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img" src="./images/project_quiz-night.png" alt="Image 2">
                        <div class="card-content">
                            <div class="card-action">
                                <h3 class="card-title">Quiz Night</h3>
                                <svg class="lucide lucide-arrow-up-right card-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                                </svg>
                            </div>
                            <span class="card-tag">Tag 2</span>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img" src="./images/peoject_book-buddy.png" alt="Image 3">
                        <div class="card-content">
                            <div class="card-action">
                                <h3 class="card-title">Book buddy</h3>
                                <svg class="lucide lucide-arrow-up-right card-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                                </svg>
                            </div>
                            <span class="card-tag">Tag 3</span>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img" src="./images/project_memory-game.png" alt="Image 4">
                        <div class="card-content">
                            <div class="card-action">
                                <h3 class="card-title">Memory</h3>
                                <svg class="lucide lucide-arrow-up-right card-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                                </svg>
                            </div>
                            <span class="card-tag">Tag 4</span>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img" src="./images/project_cinetech.png" alt="Image 4">
                        <div class="card-content">
                            <div class="card-action">
                                <h3 class="card-title">Cinetch</h3>
                                <svg class="lucide lucide-arrow-up-right card-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                                </svg>
                            </div>
                            <span class="card-tag">Tag 4</span>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img" src="./images/project_clicker-game.png" alt="Image 4">
                        <div class="card-content">
                            <div class="card-action">
                                <h3 class="card-title">Clicker game</h3>
                                <svg class="lucide lucide-arrow-up-right card-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                                </svg>
                            </div>
                            <span class="card-tag">Tag 4</span>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img" src="./images/project_happy-meal.png" alt="Image 4">
                        <div class="card-content">
                            <div class="card-action">
                                <h3 class="card-title">Happy meal</h3>
                                <svg class="lucide lucide-arrow-up-right card-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                                </svg>
                            </div>
                            <span class="card-tag">Tag 4</span>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img" src="./images/project_matcha-tea.png" alt="Image 4">
                        <div class="card-content">
                            <div class="card-action">
                                <h3 class="card-title">Matcha tea</h3>
                                <svg class="lucide lucide-arrow-up-right card-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                                </svg>
                            </div>
                            <span class="card-tag">Tag 4</span>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img" src="./images/project_fansite.png" alt="Image 4">
                        <div class="card-content">
                            <div class="card-action">
                                <h3 class="card-title">Fansite</h3>
                                <svg class="lucide lucide-arrow-up-right card-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                                </svg>
                            </div>
                            <span class="card-tag">HTML</span>
                            <span class="card-tag">CSS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!-- <script src="./script.js"></script> -->
    <script src="script.js?v=<?php echo $version; ?>"></script>
</html>