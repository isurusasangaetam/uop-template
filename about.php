<?php
$page_title = "About Us";
/** @var array $site_config */

require_once 'includes/header.php'; 
require_once 'components/ui-page-header.php';
require_once 'components/cards/card-service.php';
require_once 'components/cards/card-profile.php';

render_page_header("About Us", "Transforming goals into actionable paths through guidance and collaboration.");
?>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <?php
            $vision_svg = '<svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>';
            $mission_svg = '<svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>';
            
            render_service_card("Our Vision", "To be the leading unit providing exceptional services and opportunities for development.", $vision_svg);
            render_service_card("Our Mission", "To guide and train individuals to plan appropriate steps for their educational and professional choices.", $mission_svg);
            ?>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">The dedicated staff working to support your journey.</p>
        
        <div class="flex flex-wrap justify-center gap-x-10 gap-y-12">
            <?php
            // Generic placeholders for the template
            render_profile_card("Dr. Jane Doe", "Director", "", "071 000 0000", "jane.doe@pdn.ac.lk");
            render_profile_card("John Smith", "Senior Coordinator", "", "077 000 0000", "john@pdn.ac.lk");
            render_profile_card("Alice Johnson", "Assistant", "", "", "alice@pdn.ac.lk");
            ?>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>