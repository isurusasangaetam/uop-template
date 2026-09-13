<?php
// includes/header.php
require_once __DIR__ . '/config.php';
/** @var array $site_config */ 
$current_page = basename($_SERVER['PHP_SELF']);
$base = $site_config['base_url']; // Shortcut variable
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | ' . $site_config['name'] : $site_config['name']; ?></title>
    <meta name="description" content="<?php echo $site_config['description']; ?>">
    
    <!-- UoP Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $base . $site_config['favicon_url']; ?>">
    
    <!-- Fixed CSS Path -->
    <link href="<?php echo $base; ?>/assets/css/output.css" rel="stylesheet">
</head>
<body class="bg-gray-50 flex flex-col min-h-screen text-gray-800">

    <header class="bg-white sticky top-0 z-[1000] shadow-[0_4px_10px_rgba(0,0,0,0.05)] transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-24 items-center">
                
                <a href="<?php echo $base; ?>/index.php" class="flex items-center gap-3 sm:gap-4 hover:opacity-90 transition group z-50">
                    <img src="<?php echo $base . $site_config['logo_url']; ?>" alt="UoP Logo" class="h-14 sm:h-16 w-auto object-contain">
                    <div class="flex flex-col text-left">
                        <span class="text-lg sm:text-xl md:text-2xl font-bold text-primary leading-tight group-hover:text-secondary transition-colors duration-300"><?php echo $site_config['name']; ?></span>
                        <span class="text-xs sm:text-sm font-semibold text-gray-500 uppercase tracking-wide">University of Peradeniya</span>
                    </div>
                </a>

                <nav class="hidden lg:flex space-x-6 items-center">
                    <?php foreach ($site_config['nav_links'] as $label => $url): ?>
                        <a href="<?php echo $base . $url; ?>" class="font-medium transition border-b-2 pb-1 <?php echo ($current_page == basename($url)) ? 'text-primary border-secondary' : 'text-gray-600 border-transparent hover:text-primary hover:border-secondary'; ?>">
                            <?php echo $label; ?>
                        </a>
                    <?php endforeach; ?>
                </nav>

            </div>
        </div>
    </header>
    <main class="flex-grow">