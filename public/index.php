<?php
define('PROJECT_ROOT', dirname(__DIR__));

function e($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

require_once PROJECT_ROOT . '/src/data/skills.php';
require_once PROJECT_ROOT . '/src/data/projects.php';
require_once PROJECT_ROOT . '/src/data/homelab.php';
require_once PROJECT_ROOT . '/src/data/parcours.php';
require_once PROJECT_ROOT . '/src/templates/header.php';
?>

<section id="profil" class="hero">
    <div class="wrap hero-grid">
        <div class="hero-text">
            <p class="status"><span class="dot dot-ok"></span> Disponible dès maintenant en CDI</p>
            <h1><span class="prompt-sign" aria-hidden="true">&gt;</span> Mateo Hirsch<span class="caret" aria-hidden="true">_</span></h1>
            <p class="hero-role">Systèmes, réseaux &amp; cybersécurité. <strong>5 ans d’alternance chez EDF</strong>, de l’exploitation à l’appui RSSI.</p>
            <p class="hero-desc">
                Diplômé d’un Mastère Cybersécurité (RNCP 7), je recherche un CDI en exploitation, support technique ou sécurité opérationnelle.
                En parallèle, j’administre un home lab Proxmox comme un petit SI d’entreprise.
            </p>
            <div class="hero-actions">
                <a href="#projets" class="btn btn-primary"><i class="ri-terminal-box-line"></i> Voir mes projets</a>
                <a href="https://keidisos.github.io/resume/" class="btn btn-ghost" target="_blank" rel="noopener"><i class="ri-file-user-line"></i> Mon CV</a>
            </div>
        </div>

        <aside class="term" aria-label="Fiche profil">
            <div class="term-bar">
                <span class="lights" aria-hidden="true"><i></i><i></i><i></i></span>
                <span class="mono">mateo@soc: ~</span>
            </div>
            <div class="term-body">
                <p class="cmd"><span class="ps1">$</span> cat profil.yml</p>
                <dl class="kv">
                    <div><dt>experience</dt><dd>5 ans d’alternance chez EDF</dd></div>
                    <div><dt>formation</dt><dd>Mastère Cybersécurité, RNCP 7</dd></div>
                    <div><dt>ctf</dt><dd>42e / 500+, Campus Cyber Bordeaux</dd></div>
                    <div><dt>langues</dt><dd>français, anglais B2, espagnol B1</dd></div>
                    <div><dt>recherche</dt><dd>CDI, disponible immédiatement</dd></div>
                </dl>
                <p class="cmd"><span class="ps1">$</span> systemctl status mateo</p>
                <p class="out"><span class="ok-text">● active (running)</span> ouvert aux offres</p>
                <p class="cmd"><span class="ps1">$</span> <span class="caret">_</span></p>
            </div>
        </aside>
    </div>
</section>

<section id="parcours" class="section">
    <div class="wrap">
        <header class="section-head">
            <p class="eyebrow"><span class="ps1">$</span> cat ~/parcours.log</p>
            <h2>Parcours</h2>
        </header>
        <div class="path-grid">
            <div>
                <h3 class="path-title"><i class="ri-briefcase-4-line"></i> Expériences</h3>
                <ol class="path">
                    <?php foreach ($experiences as $xp): ?>
                        <li>
                            <p class="mono when"><?= e($xp['dates']) ?></p>
                            <h4><?= e($xp['title']) ?> <span class="org">· <?= e($xp['org']) ?></span></h4>
                            <ul class="missions">
                                <?php foreach ($xp['missions'] as $m): ?>
                                    <li><?= e($m) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
            <div>
                <h3 class="path-title"><i class="ri-graduation-cap-line"></i> Formation</h3>
                <ol class="path">
                    <?php foreach ($formations as $f): ?>
                        <li>
                            <p class="mono when"><?= e($f['dates']) ?></p>
                            <h4><?= e($f['title']) ?> <span class="org">· <?= e($f['org']) ?></span></h4>
                            <p class="path-detail"><?= e($f['detail']) ?></p>
                            <?php if ($f['badge']): ?>
                                <p class="path-badge"><i class="ri-trophy-line"></i> <?= e($f['badge']) ?></p>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
</section>

<section id="competences" class="section">
    <div class="wrap">
        <header class="section-head">
            <p class="eyebrow"><span class="ps1">$</span> ls ~/competences</p>
            <h2>Défendre, gouverner, construire</h2>
        </header>
        <div class="skills-grid">
            <?php foreach ($skills as $skill): ?>
                <div class="skill-group">
                    <h3><i class="<?= e($skill['icon']) ?>"></i> <?= e($skill['category']) ?></h3>
                    <ul class="chips">
                        <?php foreach ($skill['items'] as $item): ?>
                            <li><?= e($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="projets" class="section">
    <div class="wrap">
        <header class="section-head">
            <p class="eyebrow"><span class="ps1">$</span> ls ~/projets</p>
            <h2>Réalisations</h2>
        </header>
        <div class="projects-grid">
            <article id="homelab" class="project project-featured">
                <div class="project-visual term term-flat">
                    <div class="term-bar">
                        <span class="lights" aria-hidden="true"><i></i><i></i><i></i></span>
                        <span class="mono">mateo@homelab: ~</span>
                    </div>
                    <div class="term-body">
                        <p class="cmd"><span class="ps1">$</span> tree -d homelab/</p>
                        <p class="out">homelab/ <span class="dim"># Proxmox VE</span></p>
                        <ul class="tree">
                            <?php foreach ($homelab['tree'] as $node): ?>
                                <li class="tone-<?= e($node['tone']) ?>"><span class="tree-name"><?= e($node['name']) ?></span> <span class="dim"># <?= e($node['desc']) ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="project-body">
                    <p class="project-type">Infrastructure · Blue Team · En production</p>
                    <h3>Home Lab</h3>
                    <p>Un hyperviseur Proxmox qui héberge mes services du quotidien (cloud personnel, médias, domotique, serveur de jeu), audité puis remis à niveau comme on le ferait en entreprise : constat, priorisation, correctif, vérification.</p>
                    <ul class="pillars">
                        <?php foreach ($homelab['pillars'] as $p): ?>
                            <li><i class="<?= e($p['icon']) ?>" aria-hidden="true"></i> <span><strong><?= e($p['title']) ?></strong> <?= e($p['text']) ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                    <ul class="chips chips-small">
                        <?php foreach ($homelab['stack'] as $tech): ?>
                            <li><?= e($tech) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </article>
            <?php foreach ($projects as $project): ?>
                <article class="project">
                    <?php $t = $project['terminal']; ?>
                    <div class="project-visual term term-flat" aria-hidden="true">
                        <div class="term-bar">
                            <span class="lights"><i></i><i></i><i></i></span>
                            <span class="mono"><?= e($t['title']) ?></span>
                        </div>
                        <div class="term-body">
                            <p class="cmd"><span class="ps1">$</span> <?= e($t['cmd']) ?></p>
                            <?php if (isset($t['lines'])): ?>
                                <p class="out"><?= e($t['root']) ?></p>
                                <ul class="tree">
                                    <?php foreach ($t['lines'] as $node): ?>
                                        <li class="tone-<?= e($node['tone']) ?>"><span class="tree-name"><?= e($node['name']) ?></span> <span class="dim"># <?= e($node['desc']) ?></span></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <ul class="steps">
                                    <?php foreach ($t['steps'] as $step): ?>
                                        <li><span class="<?= !empty($step['ok']) ? 'ok-text' : 'step-tag' ?>">[<?= e($step['tag']) ?>]</span> <?= e($step['text']) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="project-body">
                        <p class="project-type"><?= e($project['type']) ?></p>
                        <h3><?= e($project['title']) ?></h3>
                        <p><?= e($project['desc']) ?></p>
                        <ul class="chips chips-small">
                            <?php foreach ($project['stack'] as $tech): ?>
                                <li><?= e($tech) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="project-links">
                            <?php foreach ($project['links'] as $link): ?>
                                <a href="<?= e($link['href']) ?>" target="_blank" rel="noopener"><i class="<?= e($link['icon']) ?>"></i> <?= e($link['label']) ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<section id="contact" class="section">
    <div class="wrap contact">
        <div>
            <p class="eyebrow"><span class="ps1">$</span> ./contact.sh</p>
            <h2>Un poste en exploitation, support ou sécurité ? Parlons-en.</h2>
            <p class="lead">Le plus simple est un email. Mon CV détaillé est aussi en ligne.</p>
        </div>
        <div class="term">
            <div class="term-bar">
                <span class="lights" aria-hidden="true"><i></i><i></i><i></i></span>
                <span class="mono">contact</span>
            </div>
            <div class="term-body">
                <p class="cmd"><span class="ps1">$</span> echo $EMAIL</p>
                <p class="out contact-mail" id="mail">contact@mateohirsch.fr</p>
                <div class="contact-actions">
                    <a href="mailto:contact@mateohirsch.fr" class="btn btn-primary"><i class="ri-mail-send-line"></i> Écrire un email</a>
                    <button type="button" class="btn btn-ghost" id="copy-mail"><i class="ri-file-copy-line"></i> Copier l'adresse</button>
                </div>
                <div class="socials">
                    <a href="https://github.com/Keidisos" target="_blank" rel="noopener"><i class="ri-github-fill"></i> GitHub</a>
                    <a href="https://www.linkedin.com/in/mat%C3%A9o-hirsch" target="_blank" rel="noopener"><i class="ri-linkedin-box-fill"></i> LinkedIn</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once PROJECT_ROOT . '/src/templates/footer.php'; ?>
