<?php
http_response_code(404);
$page_title = "Page Not Found";
/** @var array $site_config */
require_once 'includes/header.php'; 
$base = $site_config['base_url'];
?>

<section class="relative flex items-center justify-center bg-gray-50 px-4 min-h-[70vh] py-20 overflow-hidden">
    
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-0 select-none">
        <h1 class="font-extrabold text-primary opacity-5" style="font-size: clamp(10rem, 25vw, 22rem); line-height: 1; margin: 0;">
            404
        </h1>
    </div>
    
    <div class="relative z-10 text-center max-w-2xl mx-auto w-full">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Page Not Found</h2>
        <p class="text-lg text-gray-600 mb-10 max-w-lg mx-auto leading-relaxed">
            We're sorry, the page you are looking for doesn't exist, has been moved, or is temporarily unavailable.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="<?php echo $base; ?>/index.php" class="btn btn-primary w-full sm:w-auto">
                Return Home
            </a>
            <a href="mailto:<?php echo $site_config['contact']['email']; ?>" class="btn btn-secondary w-full sm:w-auto !text-primary !border-primary hover:!bg-gray-100">
                Contact Support
            </a>
        </div>
    </div>

</section>

<?php require_once 'includes/footer.php'; ?>