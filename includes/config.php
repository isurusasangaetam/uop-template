<?php
// includes/config.php

$site_config = [
    'name' => 'Department Name', // e.g., Career Guidance Unit
    'short_name' => 'Dept',
    'tagline' => 'Your engaging tagline goes right here',
    'description' => 'A highly reusable PHP template built for University of Peradeniya websites.',
    
    'base_url' => '/uop-template', 
    
    // UoP Branding Assets
    'logo_url' => '/assets/images/uop-logo.png',
    'favicon_url' => '/assets/images/favicon.ico',
    'hero_image' => '/assets/images/hero.png',
    
    // Contact Info & Map
    'contact' => [
        'address' => 'University of Peradeniya,<br>Peradeniya 20400.',
        'email' => 'contact@pdn.ac.lk',
        'phone' => '+94 81 239 2000',
        // Get this from Google Maps -> Share -> Embed a map -> src=""
        'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.788506869429!2d80.5947702!3d7.2648714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae368d4d8c83e29%3A0xc3b8fb0396420d20!2sUniversity%20of%20Peradeniya!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk'
    ],
    
    // Social Links
    'socials' => [
        'facebook' => 'https://facebook.com/universityofperadeniya',
        'linkedin' => 'https://linkedin.com/school/university-of-peradeniya/',
        'youtube' => 'https://youtube.com/@UoP'
    ],

    // Navigation Links
    'nav_links' => [
        'Home' => '/index.php',
        'About' => '/about.php',
        'Services' => '/services.php',
        'Resources' => '/resources.php',
        'Events' => '/events.php',
        'News' => '/news.php'
    ],

    // Developer Attribution
    'developer' => [
        'name' => 'Isuru Etampawala',
        'link' => 'https://www.linkedin.com/in/isuru-sasanga-etampawala'
    ],

    // Database Configuration
    'db' => [
        'host' => 'localhost',
        'dbname' => 'template_db',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4'
    ]
];
?>