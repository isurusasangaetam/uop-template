<?php
$page_title = "Home";
/** @var array $site_config */
require_once 'includes/header.php'; 
require_once 'components/cards/card-service.php'; 
$base = $site_config['base_url'];
?>

<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden">
    <!-- Dynamic Hero Image -->
    <div class="absolute inset-0 z-0 bg-cover bg-center" style="background-image: url('<?php echo $base . $site_config['hero_image']; ?>');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-primary/95 to-black/70 z-0"></div>

    <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight leading-tight">
            Welcome to the <br><span class="text-secondary"><?php echo $site_config['name']; ?></span>
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-3xl mx-auto leading-relaxed">
            <?php echo $site_config['tagline']; ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo $base; ?>/services.php" class="btn btn-primary bg-secondary border-none">Explore Services</a>
            <a href="<?php echo $base; ?>/about.php" class="btn btn-secondary">About Us</a>
        </div>
    </div>
</section>

<!-- Services Highlights -->
<section class="py-12 bg-white relative -mt-10 z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php 
            $icon = '<svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>';
            render_service_card("Primary Service", "Description of the first main offering.", $icon, $base . "/services.php");
            render_service_card("Secondary Feature", "Details about the second core functionality.", $icon, $base . "/services.php");
            render_service_card("Student Support", "Information regarding student resources.", $icon, $base . "/resources.php");
            ?>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-primary mb-4">Get In Touch</h2>
            <p class="text-lg text-gray-500 max-w-2xl mx-auto">Send us a message and our team will get back to you.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100">
            
            <div class="bg-primary text-white p-8 md:p-12 flex flex-col justify-between relative overflow-hidden">
                <div class="relative z-10 mb-8">
                    <h3 class="text-2xl font-bold mb-8">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="mt-1 font-bold text-secondary">Location:</div>
                            <div class="text-gray-300"><?php echo $site_config['contact']['address']; ?></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="mt-1 font-bold text-secondary">Email:</div>
                            <a href="mailto:<?php echo $site_config['contact']['email']; ?>" class="text-gray-300 hover:text-white transition"><?php echo $site_config['contact']['email']; ?></a>
                        </div>
                    </div>
                </div>

                <!-- Dynamic Google Map -->
                <div class="relative z-10 w-full h-48 md:h-64 rounded-xl overflow-hidden shadow-md border-2 border-white/10 mt-6 bg-gray-800">
                    <iframe 
                        src="<?php echo $site_config['contact']['map_url']; ?>" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="p-8 md:p-12 flex items-center">
                <!-- Generic Contact Form -->
                <form action="#" method="POST" class="space-y-6 w-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Your Name</label>
                            <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:border-primary transition">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Email Address</label>
                            <input type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:border-primary transition">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-1">Message</label>
                        <textarea rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:border-primary transition resize-none"></textarea>
                    </div>
                    <button type="submit" class="w-full btn btn-primary flex justify-center items-center">
                        Send Message
                    </button>
                </form>
            </div>
            
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>