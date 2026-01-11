document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Smooth Scroll pour les liens d'ancrage
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // 2. Effet Glitch au survol (Optionnel, renforce le style)
    const glitchText = document.querySelector('.glitch');
    if(glitchText) {
        glitchText.addEventListener('mouseover', () => {
            glitchText.style.textShadow = '2px 0 var(--neon-purple), -2px 0 var(--neon-cyan)';
        });
        glitchText.addEventListener('mouseout', () => {
            glitchText.style.textShadow = 'none';
        });
    }

    // 3. Navbar : Background change au scroll
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(11, 12, 16, 0.95)';
            navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.5)';
        } else {
            navbar.style.background = 'rgba(11, 12, 16, 0.85)';
            navbar.style.boxShadow = 'none';
        }
    });

    console.log('%c SYSTEM READY ', 'background: #66FCF1; color: #000; font-weight: bold; padding: 5px;');


    // 4. Mobile Menu Toggle
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-links");

    if(hamburger) {
        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        });
    }

    // Fermer le menu quand on clique sur un lien
    document.querySelectorAll(".nav-link, .btn-sm").forEach(n => n.addEventListener("click", () => {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }));

    // 5. SYSTEM BOOT LOADER
    const preloader = document.getElementById('preloader');
    const progressBar = document.getElementById('progress-bar');
    const loadingText = document.getElementById('loading-text');
    
    // Liste des "faux" modules à charger pour l'effet style
    const modules = ['kernel', 'network_d', 'security_patch', 'graphics_ui', 'user_data', 'DONE'];
    let progress = 0;
    let moduleIndex = 0;

    // Fonction qui fait avancer la barre artificiellement
    // pour donner l'impression que ça travaille
    const interval = setInterval(() => {
        // On avance un peu aléatoirement
        progress += Math.random() * 15; 
        
        // On change le texte du module chargé
        if(progress > (moduleIndex + 1) * (100 / modules.length)) {
            if(moduleIndex < modules.length - 1) {
                moduleIndex++;
                loadingText.innerText = modules[moduleIndex];
            }
        }

        // On borne à 90% tant que la page n'est pas "vraiment" chargée
        if (progress > 95) progress = 95;
        
        progressBar.style.width = progress + '%';

    }, 100); // Toutes les 100ms

    // L'événement "load" signifie que TOUT (images, css) est chargé
    window.addEventListener('load', () => {
        clearInterval(interval); // On arrête la simulation
        
        // On complète la barre à 100%
        progressBar.style.width = '100%';
        loadingText.innerText = 'READY';

        // Petit délai de 500ms pour laisser l'utilisateur voir le "100%"
        setTimeout(() => {
            preloader.classList.add('loaded'); // Le CSS fait le fade-out
            
            // On supprime l'élément du DOM pour libérer la mémoire
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        }, 500);
    });

});
