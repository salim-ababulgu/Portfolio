document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById("genericModal");
    const overlay = document.getElementById("modalOverlay");
    const closeModalBtn = modal.querySelector(".close-btn-modal");
    const modalTitle = document.getElementById("modalTitle");
    const modalBody = document.getElementById("modalBody");

    let modalContent = {};

    // Charger les contenus JSON
    Promise.all([
        fetch('path/to/your/modal_contact.json').then(response => response.json()),
        fetch('path/to/your/modal_card_project.json').then(response => response.json())
    ]).then(([contactData, projectData]) => {
        modalContent = { ...contactData, ...projectData };
    }).catch(error => console.error('Error loading modal content:', error));

    function openModal(modalType) {
        const content = modalContent[modalType];
        if (!content) {
            console.error(`No content found for modal type: ${modalType}`);
            return;
        }

        modalTitle.textContent = content.title;
        modalBody.innerHTML = generateModalContent(modalType, content);
        modal.style.display = "block";
        overlay.style.display = "block";
    }

    function generateModalContent(type, content) {
        switch(type) {
            case 'contact':
                return generateContactContent(content);
            case 'projects':
                return generateProjectsContent(content);
            default:
                console.error(`Unknown modal type: ${type}`);
                return '';
        }
    }

    function generateContactContent(content) {
        let html = '<div class="info-cards_portfolio_modal_contact">';
        content.infoCards.forEach(card => {
            html += `
                <div class="info-card_portfolio_modal_contact">
                    <i class="${card.icon}"></i>
                    <p>${card.text}</p>
                </div>
            `;
        });
        html += `</div>
            <div class="separator_portfolio_modal_contact">${content.separator}</div>
            <form id="${content.form.id}">`;
        content.form.fields.forEach(field => {
            if (field.type === 'textarea') {
                html += `<textarea id="${field.id}" placeholder="${field.placeholder}" ${field.required ? 'required' : ''}></textarea>`;
            } else {
                html += `<input type="${field.type}" id="${field.id}" placeholder="${field.placeholder}" ${field.required ? 'required' : ''}>`;
            }
        });
        html += `<button type="submit">${content.form.submitButton.text}</button></form>`;
        return html;
    }

    function generateProjectsContent(content) {
        let html = '<div class="card-container">';
        content.cards.forEach(card => {
            html += `
                <div class="card">
                    <img class="card-img" src="${card.image}" alt="${card.title}">
                    <div class="card-content">
                        <div class="card-action">
                            <h3 class="card-title">${card.title}</h3>
                            <svg class="lucide lucide-arrow-up-right card-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                            </svg>
                        </div>
                        ${card.tags.map(tag => `<span class="card-tag">${tag}</span>`).join('')}
                    </div>
                </div>
            `;
        });
        html += '</div>';
        return html;
    }

    function closeModal() {
        modal.style.display = "none";
        overlay.style.display = "none";
        modalBody.innerHTML = '';
    }

    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', closeModal);
    }

    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            closeModal();
        }
    });

    document.querySelectorAll('[data-modal]').forEach(button => {
        button.addEventListener('click', function() {
            const modalType = this.getAttribute('data-modal');
            openModal(modalType);
        });
    });

    document.addEventListener('submit', function(e) {
        if (e.target && e.target.id === 'contactForm_portfolio_modal_contact') {
            e.preventDefault();
            // Logique de traitement du formulaire
            alert("Merci pour votre message !");
            closeModal();
        }
    });
});