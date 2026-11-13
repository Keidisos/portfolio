<?php
// src/data/parcours.php — expériences et formation (source : CV de novembre 2026)

$experiences = [
    [
        "dates" => "08/2024 – 09/2026",
        "title" => "Alternant cybersécurité, appui RSSI local",
        "org" => "EDF",
        "missions" => [
            "Qualification et traitement de 3 à 5 incidents SI par mois, en lien avec le SOC et le CERT internes.",
            "Pilotage de 2 exercices de crise cyber (scénario d'intrusion) avec 30 à 40 participants : conception, animation, retour d'expérience.",
            "Formations sécurité des nouveaux arrivants et analyses de risque sur des projets applicatifs.",
            "Audit de conformité d'un SI face aux référentiels en vigueur.",
        ],
    ],
    [
        "dates" => "09/2021 – 08/2024",
        "title" => "Alternant pilote d'exploitation systèmes & réseaux",
        "org" => "EDF",
        "missions" => [
            "Administration d'un parc Windows Server, Linux et switchs Cisco / Alcatel.",
            "Pilotage d'un projet de mise en réseau d'équipements de contrôle : nouveaux switchs accès et cœur, intégration au SI, remontée centralisée des alertes.",
            "Participation au déploiement d'un réseau 4G privé, gestion des incidents avec les équipes métiers.",
            "Traitement des tickets d'incident et de demande (GTI / GTR).",
        ],
    ],
];

$formations = [
    [
        "dates" => "2024 – 2026",
        "title" => "Mastère Cybersécurité (RNCP niveau 7)",
        "org" => "Sup de Vinci, Bordeaux",
        "detail" => "Red / Blue Team, pentest & OSINT, forensic, cryptographie, gestion de crise.",
        "badge" => "42e / 500+ au CTF Campus Cyber Bordeaux",
    ],
    [
        "dates" => "2021 – 2024",
        "title" => "BUT Réseaux & Télécommunications",
        "org" => "IUT de Montbéliard",
        "detail" => "Administration systèmes et réseaux, sécurisation des SI, gestion de crise.",
        "badge" => null,
    ],
];
