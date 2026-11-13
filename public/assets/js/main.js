document.addEventListener('DOMContentLoaded', () => {

    // 1. Menu mobile
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.getElementById('nav');
    if (toggle && nav) {
        const setOpen = (open) => {
            nav.classList.toggle('open', open);
            toggle.setAttribute('aria-expanded', String(open));
            toggle.innerHTML = open ? '<i class="ri-close-line"></i>' : '<i class="ri-menu-line"></i>';
        };
        toggle.addEventListener('click', () => setOpen(!nav.classList.contains('open')));
        nav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => setOpen(false)));
        // Fermer avec Échap, un clic à côté, ou en repassant en grand écran
        document.addEventListener('keydown', ev => { if (ev.key === 'Escape') setOpen(false); });
        document.addEventListener('click', ev => {
            if (nav.classList.contains('open') && !nav.contains(ev.target) && !toggle.contains(ev.target)) setOpen(false);
        });
        window.matchMedia('(min-width: 861px)').addEventListener('change', ev => { if (ev.matches) setOpen(false); });
    }

    // 2. Lien de menu actif selon la section visible
    const links = [...document.querySelectorAll('.nav a[href^="#"]')];
    const sections = links.map(a => document.querySelector(a.getAttribute('href'))).filter(Boolean);
    if ('IntersectionObserver' in window && sections.length) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    links.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + entry.target.id));
                }
            });
        }, { rootMargin: '-45% 0px -50% 0px' });
        sections.forEach(s => observer.observe(s));
    }

    // 3. Copier l'adresse email
    const copyBtn = document.getElementById('copy-mail');
    const mail = document.getElementById('mail');
    if (copyBtn && mail) {
        copyBtn.addEventListener('click', () => {
            const done = () => { copyBtn.innerHTML = '<i class="ri-check-line"></i> Adresse copiée'; };
            if (navigator.clipboard) {
                navigator.clipboard.writeText(mail.textContent.trim()).then(done, () => selectText(mail));
            } else {
                selectText(mail);
            }
        });
    }

    const calm = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // 4. Terminal du profil : une ligne après l'autre
    document.querySelectorAll('.hero .term-body > *').forEach((line, i) => {
        line.style.animationDelay = (0.9 + i * 0.35) + 's';
    });

    // 5. Apparition des blocs au défilement
    const revealables = document.querySelectorAll('.section-head, .path > li, .skill-group, .project, .contact > *');
    if ('IntersectionObserver' in window && !calm) {
        const io = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        revealables.forEach((el, i) => {
            el.classList.add('reveal');
            el.style.transitionDelay = (i % 3) * 0.08 + 's';
            io.observe(el);
        });
    }

    // 6. Reflet et inclinaison qui suivent la souris
    if (!calm && window.matchMedia('(hover: hover)').matches) {
        document.querySelectorAll('.term, .project').forEach(card => {
            card.addEventListener('pointermove', ev => {
                const r = card.getBoundingClientRect();
                const x = (ev.clientX - r.left) / r.width;
                const y = (ev.clientY - r.top) / r.height;
                card.style.setProperty('--mx', (x * 100) + '%');
                card.style.setProperty('--my', (y * 100) + '%');
                if (card.classList.contains('project')) {
                    card.style.setProperty('--rx', ((0.5 - y) * 4) + 'deg');
                    card.style.setProperty('--ry', ((x - 0.5) * 5) + 'deg');
                }
            });
            card.addEventListener('pointerleave', () => {
                card.style.setProperty('--rx', '0deg');
                card.style.setProperty('--ry', '0deg');
            });
        });
    }

    function selectText(el) {
        const range = document.createRange();
        range.selectNodeContents(el);
        const sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
    }
});
