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
});
