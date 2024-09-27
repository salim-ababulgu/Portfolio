//-------------------- Modal de théme --------------------//
document.addEventListener('DOMContentLoaded', function() {
    const customModal = document.getElementById('customModal');
    const openCustomModalBtn = document.getElementById('openCustomModal');
    const closeCustomModalBtn = document.querySelector('.custom-modal__close');
    const colorOptions = document.querySelectorAll('.custom-modal__color-option');
    const customColorInput = document.getElementById('customColorInput');
    const themeOptions = document.querySelectorAll('input[name="theme"]');
    const resetButton = document.querySelector('.custom-modal__button--text');
    const navbarIcon = document.querySelector('.navbar-icon');

    let currentSettings = {
        accentColor: localStorage.getItem('accentColor') || '#0077B8',
        theme: localStorage.getItem('theme') || 'system'
    };

    function applySettings(settings) {
        document.documentElement.style.setProperty('--accent-color', settings.accentColor);
        colorOptions.forEach(option => {
            option.classList.toggle('selected', option.dataset.color === settings.accentColor);
        });
        customColorInput.value = settings.accentColor;

        applyTheme(settings.theme);
        themeOptions.forEach(option => {
            option.checked = option.value === settings.theme;
        });

        // Enregistrement automatique dans le localStorage
        localStorage.setItem('accentColor', settings.accentColor);
        localStorage.setItem('theme', settings.theme);
    }

    function applyTheme(theme) {
        const root = document.documentElement;
        if (theme === 'system') {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            root.classList.toggle('light-mode', !prefersDark);
        } else if (theme === 'light') {
            root.classList.add('light-mode');
        } else {
            root.classList.remove('light-mode');
        }
        updateIcon();
    }

    function updateIcon() {
        const icon = document.querySelector('.navbar-icon .material-icons');
        if (icon) {
            icon.textContent = document.documentElement.classList.contains('light-mode') ? 'dark_mode' : 'light_mode';
        }
    }

    function toggleTheme() {
        const root = document.documentElement;
        const newTheme = root.classList.contains('light-mode') ? 'dark' : 'light';
        currentSettings.theme = newTheme;
        applySettings(currentSettings);
    }

    function openCustomModal() {
        customModal.style.display = 'block';
        applySettings(currentSettings);
    }

    function closeCustomModal() {
        customModal.style.display = 'none';
    }

    if (openCustomModalBtn) {
        openCustomModalBtn.addEventListener('click', openCustomModal);
    }

    if (closeCustomModalBtn) {
        closeCustomModalBtn.addEventListener('click', closeCustomModal);
    }

    if (navbarIcon) {
        navbarIcon.addEventListener('click', toggleTheme);
    }

    colorOptions.forEach(option => {
        option.addEventListener('click', function() {
            currentSettings.accentColor = this.dataset.color;
            applySettings(currentSettings);
        });
    });

    customColorInput.addEventListener('change', function() {
        currentSettings.accentColor = this.value;
        applySettings(currentSettings);
    });

    themeOptions.forEach(option => {
        option.addEventListener('change', function() {
            if (this.checked) {
                currentSettings.theme = this.value;
                applySettings(currentSettings);
            }
        });
    });

    resetButton.addEventListener('click', function() {
        currentSettings = {
            accentColor: '#0077B8',
            theme: 'system'
        };
        applySettings(currentSettings);
    });

    window.addEventListener('click', function(event) {
        if (event.target === customModal) {
            closeCustomModal();
        }
    });

    // Initialisation
    applySettings(currentSettings);

    // Écouter les changements de préférences système
    window.matchMedia('(prefers-color-scheme: dark)').addListener(() => {
        if (currentSettings.theme === 'system') {
            applyTheme('system');
        }
    });
});



// -------------------- Marquee Horizontale - Pause -------------------- //
const wrapper = document.querySelector('.wrapper');
const items = document.querySelectorAll('.item');

wrapper.addEventListener('mouseenter', () => {
  items.forEach(item => {
    item.style.animationPlayState = 'paused';
  });
});

wrapper.addEventListener('mouseleave', () => {
  items.forEach(item => {
    item.style.animationPlayState = 'running';
  });
});



// -------------------- Marquee Verticale - Pause -------------------- //
const wrapperVerticale = document.querySelector('.wrapper-verticale');
const itemsVerticale = document.querySelectorAll('.item-verticale');

wrapperVerticale.addEventListener('mouseenter', () => {
    itemsVerticale.forEach(item => {
        item.style.animationPlayState = 'paused';
    });
});
wrapperVerticale.addEventListener('mouseleave', () => {
    itemsVerticale.forEach(item => {
        item.style.animationPlayState = 'running';
    });
});



// -------------------- Modal -------------------- //
const modal = document.getElementById("cardModal");
const openModalBtn = document.getElementById("openModal");
const closeModalBtn = document.querySelector("#cardModal .close-modal");

openModalBtn.onclick = function() {
    modal.style.display = "block";
}

closeModalBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



// -------------------- Offcanvas -------------------- //
document.addEventListener('DOMContentLoaded', function() {
    const offcanvas = document.getElementById("contactOffcanvas");
    const overlay = document.getElementById("overlay-offccanvas");
    const openOffcanvasBtn = document.getElementById("openOffcanvas");
    const closeOffcanvasBtn = document.querySelector("#contactOffcanvas .close-btn-offcanvas");
    const form = document.getElementById("contactForm");

    function openOffcanvas() {
        offcanvas.classList.add("active");
        overlay.style.display = "block";
    }

    function closeOffcanvas() {
        offcanvas.classList.remove("active");
        overlay.style.display = "none";
        if (form) {
            form.reset();
        }
    }

    if (openOffcanvasBtn) {
        openOffcanvasBtn.addEventListener('click', openOffcanvas);
    }

    if (closeOffcanvasBtn) {
        closeOffcanvasBtn.addEventListener('click', closeOffcanvas);
    }

    // Fermeture de l'offcanvas en cliquant en dehors
    document.addEventListener('click', function(event) {
        if (offcanvas.classList.contains('active') && 
            !offcanvas.contains(event.target) && 
            event.target !== openOffcanvasBtn) {
            closeOffcanvas();
        }
    });

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const nom = document.getElementById("nom").value;
            const prenom = document.getElementById("prenom").value;
            const email = document.getElementById("email").value;
            const message = document.getElementById("message").value;
            
            console.log("Formulaire soumis :", { nom, prenom, email, message });
            
            alert("Merci pour votre message !");
            closeOffcanvas();
        });
    }
});


// -------------------- Dropdown -------------------- //
document.querySelector('.footer-icon').addEventListener('click', function () {
    this.classList.toggle('active');
  });

  document.addEventListener('click', function (event) {
    var dropdowns = document.getElementsByClassName('footer-icon');

    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('active') && !openDropdown.contains(event.target)) {
        openDropdown.classList.remove('active');
      }
    }
  });



// -------------------- Versioning -------------------- //
  const version = '0.0.1';
// Exemple pour charger un fichier JSON avec une version
fetch('data.json?v=' + version)
    .then(response => response.json())
