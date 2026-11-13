<?php
// src/data/homelab.php — projet « Home Lab » (aucune IP, aucun nom d'hôte interne : page publique)

$homelab = [
    // Affiché comme une sortie de `tree`
    "tree" => [
        ["name" => "pfsense/", "tone" => "accent", "desc" => "pare-feu, CrowdSec"],
        ["name" => "dmz-publique/", "tone" => "warn", "desc" => "reverse proxy, seul point d'entrée"],
        ["name" => "dmz-honeypot/", "tone" => "alert", "desc" => "leurres isolés, carte des menaces"],
        ["name" => "lan/", "tone" => "ok", "desc" => "services internes derrière SSO"],
        ["name" => "vpn/", "tone" => "info", "desc" => "WireGuard, accès d'administration"],
    ],

    "pillars" => [
        ["icon" => "ri-git-branch-line", "title" => "Segmentation", "text" => "Zones séparées par pfSense, flux autorisés au cas par cas."],
        ["icon" => "ri-fingerprint-line", "title" => "Identité", "text" => "SSO OIDC devant toutes les consoles d'administration."],
        ["icon" => "ri-radar-line", "title" => "Détection", "text" => "Honeypot dont les attaquants sont bannis au pare-feu."],
        ["icon" => "ri-shield-check-line", "title" => "Résilience", "text" => "Sauvegardes vérifiées, supervision et audit hebdomadaire."],
    ],

    "stack" => ["Proxmox VE", "pfSense", "CrowdSec", "Authentik", "WireGuard", "Proxmox Backup Server", "Docker", "Uptime Kuma"],
];
