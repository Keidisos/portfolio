<?php
// src/data/skills.php

$skills = [
    [
        "category" => "Offensive Security",
        "icon" => "ri-bug-fill", // Icone Bug
        "color" => "var(--accent-cyan)", // Cyan
        "items" => ["Pentesting Web", "Network Scanning (Nmap)", "Burp Suite", "Metasploit", "Python Scripting"]
    ],
    [
        "category" => "Defensive & Blue Team",
        "icon" => "ri-shield-check-fill", // Icone Bouclier
        "color" => "var(--accent-cyan)", // Cyan
        "items" => ["SIEM (Wazuh)", "Analyses de logs", "Hardening Linux", "Firewalling (Stormshield/PfSense)", "Incident Response"]
    ],
    [
        "category" => "Infra & Dev",
        "icon" => "ri-server-line", // Icone Serveur
        "color" => "var(--accent-cyan)", // Cyan
        "items" => ["Docker", "Proxmox / LXC", "Routing", "TCP / IP", "Python", "Bash" ]
    ],
    [
        "category" => "Conformité",
        "icon" => "ri-server-line", // Icone Serveur
        "color" => "var(--accent-cyan)", // Cyan
        "items" => ["RGPD", "PSSI", "LPM", "ISO 27001"]
    ],
];
