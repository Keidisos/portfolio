<?php
// src/data/projects.php — le Home Lab a sa propre section (src/data/homelab.php)

$projects = [
    [
        "title" => "Secure Infrastructure",
        "type" => "Blue Team · Infrastructure",
        "desc" => "Conception et sécurisation d'une infrastructure complète (pare-feux Stormshield, VPN, IDS, SSO) avec supervision active. Robustesse validée par des audits offensifs (attaques Wi-Fi, MitM, vulnérabilités) puis contre-mesures implémentées.",
        "stack" => ["Firewalling", "Blue Team", "SSO", "Active Directory"],
        "links" => [
            ["label" => "Dossier technique", "href" => "assets/docs/secure_infra.pdf", "icon" => "ri-file-pdf-2-line"],
        ],
        // Illustration : une arborescence du projet, comme pour le Home Lab
        "terminal" => [
            "title" => "mateo@secure-infra: ~",
            "cmd" => "tree -d secure-infra/",
            "root" => "secure-infra/",
            "lines" => [
                ["name" => "firewall/", "tone" => "accent", "desc" => "Stormshield, filtrage inter-zones"],
                ["name" => "vpn/", "tone" => "info", "desc" => "accès distant chiffré"],
                ["name" => "ids/", "tone" => "alert", "desc" => "détection d'intrusion"],
                ["name" => "sso/", "tone" => "ok", "desc" => "Active Directory, authentification unique"],
                ["name" => "audit/", "tone" => "warn", "desc" => "Wi-Fi, MitM, contre-mesures"],
            ],
        ],
    ],
    [
        "title" => "Insp3ct — VulnScanner",
        "type" => "Sécurité offensive · Outil",
        "desc" => "Outil d'automatisation de pentest : orchestration de plusieurs scanners depuis un script Python et génération automatique d'un rapport d'audit en PDF.",
        "stack" => ["Python 3", "Nmap", "XSStrike", "SQLMap", "Nikto", "Fuzzing"],
        "links" => [
            ["label" => "Guide utilisateur", "href" => "assets/docs/insp3ct_doc_user.pdf", "icon" => "ri-file-pdf-2-line"],
            ["label" => "Doc technique", "href" => "assets/docs/insp3ct_doc_tech.pdf", "icon" => "ri-file-pdf-2-line"],
        ],
        // Illustration : le déroulé d'un scan
        "terminal" => [
            "title" => "mateo@insp3ct: ~",
            "cmd" => "python3 insp3ct.py --cible exemple.fr",
            "steps" => [
                ["tag" => "nmap", "text" => "ports et services"],
                ["tag" => "nikto", "text" => "configuration du serveur web"],
                ["tag" => "xsstrike", "text" => "injections XSS"],
                ["tag" => "sqlmap", "text" => "injections SQL"],
                ["tag" => "rapport", "text" => "audit.pdf généré", "ok" => true],
            ],
        ],
    ]
];
