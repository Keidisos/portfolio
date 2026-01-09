<?php
define('PROJECT_ROOT', dirname(__DIR__));
require_once PROJECT_ROOT . '/src/templates/header.php';
?>

<section id="home" class="hero-section">
    <div class="container hero-grid">
        
        <div class="hero-text">
            <div class="badge-status">
                <span class="status-dot"></span> Recherche CDI | Dispo : Septembre 2026
            </div>
            
            <h1 class="glitch-wrapper">
                <span class="hero-surtitle">Détail du profil :</span>
                <br>
		<span class="glitch" data-text="Mateo Hirsch">Mateo Hirsch</span>
            </h1>
            
            <h2 class="hero-subtitle">
                Étudiant <span class="text-accent">M2 Cybersécurité</span> & <br>
                Futur Ingénieur Cybersécurité | Incident Response.
            </h2>
            
            <p class="hero-desc">
                Je conçois des architectures sécurisées et des interfaces résilientes. Spécialisé en <strong>Defensive</strong> et <strong>Gouvernance<strong/>.
            </p>

            <div class="hero-actions">
                <a href="#projects" class="btn btn-primary">
                    <i class="ri-terminal-box-line"></i> Voir mes projets
                </a>
                <a href="/assets/docs/CV_HIRSCH.pdf" class="btn btn-outline">
                    <i class="ri-download-line"></i> CV (PDF)
                </a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="cyber-card">
                <div class="card-header">
                    <span class="dot red"></span>
                    <span class="dot yellow"></span>
                    <span class="dot green"></span>
                </div>
                <div class="card-body code-font">
                    <p><span class="purple">const</span> profile = {</p>
                    <p class="indent">name: <span class="green">'Mateo'</span>,</p>
                    <p class="indent">role: <span class="green">'Cyber Engineer'</span>,</p>
                    <p class="indent">skills: [<span class="green">'Pentest'</span>, <span class="green">'Defensive'</span>],</p>
                    <p class="indent">loc: <span class="green">'France'</span></p>
                    <p>};</p>
                    <br>
                    <p><span class="comment">// Init system...</span></p>
                    <p><span class="cyan">System.ready();</span> <span class="cursor-blink">|</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
// Import des données
require_once PROJECT_ROOT . '/src/data/skills.php'; 
?>

<section id="skills" class="section-padding">
    <div class="container">
        <h2 class="section-title"><span class="hash">#</span>02_Arsenal_Technique</h2>
        
        <div class="skills-grid">
            <?php foreach ($skills as $skill): ?>
                <div class="skill-card">
                    <div class="skill-header">
                        <i class="<?= $skill['icon'] ?>" style="color: <?= $skill['color'] ?>"></i>
                        <h3><?= $skill['category'] ?></h3>
                    </div>
                    <ul class="skill-list">
                        <?php foreach ($skill['items'] as $item): ?>
                            <li><span class="bullet" style="background: <?= $skill['color'] ?>"></span> <?= $item ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once PROJECT_ROOT . '/src/data/projects.php'; ?>

<section id="projects" class="section-padding">
    <div class="container">
        <h2 class="section-title"><span class="hash">#</span>03_Projets_Réalisés</h2>

        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
                <article class="project-card">
                    <div class="project-image">
                        <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
                        <div class="project-overlay"></div>
                    </div>
                    
                    <div class="project-content">
                        <span class="project-type"><?= $project['type'] ?></span>
                        <h3><?= $project['title'] ?></h3>
                        <p><?= $project['desc'] ?></p>
                        
                        <div class="project-stack">
                            <?php foreach ($project['stack'] as $tech): ?>
                                <span class="stack-badge"><?= $tech ?></span>
                            <?php endforeach; ?>
                        </div>

                        <div class="project-links">
                            <?php if ($project['documentation1']): ?>
                                <a href="<?= $project['documentation1'] ?>" target="_blank" class="link-item">
                                    <i class="ri-file-pdf-fill"></i> Documentation
                                </a>
                            <?php endif; ?>
			    <?php if ($project['documentation2']): ?>
                                <a href="<?= $project['documentation2'] ?>" target="_blank" class="link-item">
                                    <i class="ri-file-pdf-fill"></i> Documentation
                                </a>
                            <?php endif; ?>
                            <?php if ($project['demo']): ?>
                                <a href="<?= $project['demo'] ?>" target="_blank" class="link-item">
                                    <i class="ri-external-link-line"></i> Live Demo
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="contact" class="section-padding">
    <div class="container contact-grid">
        
        <div class="contact-info">
            <h2 class="section-title"><span class="hash">#</span>04_Me_Contacter</h2>
            <p style="margin-bottom: 30px; color: var(--text-muted);">
                Mon profil vous intéresse ? Discutons-en.
            </p>
            
            <a href="mailto:hirschmateo.mh@gmail.com" class="btn btn-primary big-btn">
                <i class="ri-mail-send-line"></i> Envoyer un Email
            </a>
            
            <div class="social-links" style="margin-top: 40px;">
                <a href="https://github.com/Keidisos" target="_blank" class="social-icon"><i class="ri-github-fill"></i></a>
                <a href="https://www.linkedin.com/in/matéo-hirsch" target="_blank" class="social-icon"><i class="ri-linkedin-fill"></i></a>
            </div>
        </div>

        <div class="pgp-block">
            <div class="terminal-header">
            <span class="dot red"></span>
            <span class="dot yellow"></span>
            <span class="dot green"></span>
            <span class="title">system_audit.log</span>
        </div>
        <div class="terminal-body" style="font-family: var(--font-code); font-size: 0.8rem;">
            <p><span class="purple">root@mateo:~$</span> ./check_security.sh</p>
            <br>
            <p>[<span class="yellow">INFO</span>] Starting vulnerability scan...</p>
            <p>[<span class="green">OK</span>] Firewall rules ............ Active</p>
            <p>[<span class="green">OK</span>] SSL/TLS Certificate ....... Valid</p>
            <p>[<span class="green">OK</span>] XSS Protection ............ Enabled</p>
            <p>[<span class="green">OK</span>] SQL Injection ............. Protected</p>
            <br>
            <p style="color: var(--success-green);">>> SYSTEM SECURE. READY FOR CONNECT.</p>
            <span class="cursor-blink">_</span>
        </div>
    </div>
</section>

<?php require_once PROJECT_ROOT . '/src/templates/footer.php'; ?>
