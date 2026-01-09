<?php
$projects = [
    [
        "title" => "Secure Infrastructure",
        "type" => "Blue Team / Infra",
        "desc" => "Conception et sécurisation d'une infrastructure complète (Firewalls Stormshield, VPN, IDS, SSO) avec supervision active. Validation de la robustesse par audits offensifs (attaques Wi-Fi, MitM, vulnérabilités) et implémentation de contre-mesures.",
        "stack" => ["Firewalling", "Blue Team", "SSO", "Active Directory"],
        "documentation1" => "assets/docs/secure_infra.pdf",
	"documentation2" => null,
        "demo" => null,
        "image" => "assets/img/cyber-security-infrastructure.png"
    ],
    [
        "title" => "VulnScanner Automator",
        "type" => "Offensive Security",
        "desc" => "Outil d'automatisation de pentest. Orchestration de divers outils de scan via un script Python, avec génération automatique de rapport PDF pour l'audit.",
        "stack" => ["Python 3", "Nmap", "XSStrike", "Fuzzing", "SQL Map", "Nikto"],
	"documentation1" => "assets/docs/insp3ct_doc_user.pdf",
	"documentation2" => "assets/docs/insp3ct_doc_tech.pdf",
        "demo" => null,
        "image" => "assets/img/vuln-scanning.png"
    ]
];
