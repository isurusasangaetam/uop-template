<?php
/** @var array $site_config */
?>
    </main> 
    
    <footer class="bg-primary text-white pt-16 pb-8 mt-auto border-t-4 border-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                
                <div>
                    <h3 class="text-lg font-bold mb-4"><?php echo $site_config['name']; ?></h3>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        <?php echo $site_config['description']; ?>
                    </p>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6 border-b-2 border-secondary pb-2 inline-block">Quick Links</h3>
                    <ul class="space-y-3 text-gray-300 text-sm">
                        <?php foreach ($site_config['nav_links'] as $label => $url): ?>
                            <li><a href="<?php echo $url; ?>" class="hover:text-secondary transition-colors">› <?php echo $label; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6 border-b-2 border-secondary pb-2 inline-block">Contact Us</h3>
                    <ul class="space-y-4 text-gray-300 text-sm">
                        <li>Address: <?php echo $site_config['contact']['address']; ?></li>
                        <li>Email: <a href="mailto:<?php echo $site_config['contact']['email']; ?>" class="hover:text-secondary"><?php echo $site_config['contact']['email']; ?></a></li>
                        <li>Phone: <?php echo $site_config['contact']['phone']; ?></li>
                    </ul>
                </div>

            </div>
            
            <div class="border-t border-white/10 pt-6 flex flex-col md:flex-row justify-between items-center text-gray-400 text-xs sm:text-sm gap-4">
                <p>© <?php echo date("Y"); ?> <?php echo $site_config['name']; ?>. All rights reserved.</p>

                <p class="mt-2 md:mt-0">
                    Template Designed & Developed by 
                    <a href="<?php echo $site_config['developer']['link']; ?>" target="_blank" class="text-secondary font-bold hover:text-white transition-colors">
                        <?php echo $site_config['developer']['name']; ?>
                    </a>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>