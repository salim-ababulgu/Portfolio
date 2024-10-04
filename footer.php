<footer>
            <!-- <div class="footer-icon"> -->
              <!-- <i class="fa-solid fa-arrow-up-right-from-square icon-open-footer"></i>
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
                </div> -->
                <p class="dropdown-text">© 2024 Salim. Tous droits réservés.</p>
              <!-- </div> -->
            <!-- </div> -->
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



<!-- Contact Modal -->
<!-- <div id="contactModal_portfolio_modal_contact" class="modal_portfolio_modal_contact">
    <div class="modal-content_portfolio_modal_contact">
        <div class="modal-header_portfolio_modal_contact">
            <h2 class="modal-title_portfolio_modal_contact">Contactez moi</h2>
            <button class="close-btn-modal_portfolio_modal_contact">&times;</button>
        </div>
        <div class="modal-body_portfolio_modal_contact">
            <div class="info-cards_portfolio_modal_contact">
                <div class="info-card_portfolio_modal_contact">
                    <i class="fas fa-phone"></i>
                    <p>07 49 44 47 56</p>
                </div>
                <div class="info-card_portfolio_modal_contact">
                    <i class="fas fa-envelope"></i>
                    <p>salimababulgu@gmail.com</p>
                </div>
                <div class="info-card_portfolio_modal_contact">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>Istres</p>
                </div>
                <div class="info-card_portfolio_modal_contact">
                    <i class="fas fa-car"></i>
                    <p>Véhiculée</p>
                </div>
            </div>

            <div class="separator_portfolio_modal_contact">ou</div>

            <form id="contactForm_portfolio_modal_contact">
                <input type="text" id="nom_portfolio_modal_contact" placeholder="Nom" required>
                <input type="text" id="prenom_portfolio_modal_contact" placeholder="Prénom" required>
                <input type="email" id="email_portfolio_modal_contact" placeholder="Email" required>
                <textarea id="message_portfolio_modal_contact" placeholder="Message" required></textarea>
                <button type="submit">Envoyez</button>
            </form>
        </div>
    </div>
</div> -->

<!-- Overlay -->
<!-- <div id="overlay_portfolio_modal_contact" class="overlay_portfolio_modal_contact"></div> -->




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
                        <img class="card-img" src="../images/project_e-commerce.png" alt="Image 1">
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
                        <img class="card-img" src="../images/project_portfolio.png" alt="Image 1">
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
                        <img class="card-img" src="../images/project_quiz-night.png" alt="Image 2">
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
                        <img class="card-img" src="../images/peoject_book-buddy.png" alt="Image 3">
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
                        <img class="card-img" src="../images/project_memory-game.png" alt="Image 4">
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
                        <img class="card-img" src="../images/project_cinetech.png" alt="Image 4">
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
                        <img class="card-img" src="../images/project_clicker-game.png" alt="Image 4">
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
                        <img class="card-img" src="../images/project_happy-meal.png" alt="Image 4">
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
                        <img class="card-img" src="../images/project_matcha-tea.png" alt="Image 4">
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
                        <img class="card-img" src="../images/project_fansite.png" alt="Image 4">
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