<?php
$page_title = "News";
/** @var array $site_config */
require_once 'includes/header.php'; 
require_once 'components/ui-page-header.php';
require_once 'components/cards/card-media.php';
$base = $site_config['base_url'];

render_page_header("Latest News", "Stay up to date with the latest announcements and success stories.");

// MOCK DATA: Replace with your PDO Database Fetch later
$news_items = [
    [
        'title' => 'New Template Released for UoP',
        'content' => 'The highly anticipated generic template for UoP is now available.',
        'publish_date' => '2026-09-13',
        'image' => '', 
        'id' => 1
    ]
];
?>

<section class="py-16 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php if (count($news_items) > 0): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($news_items as $news): ?>
                    <?php 
                    $month = date('M d', strtotime($news['publish_date']));
                    $year = date('Y', strtotime($news['publish_date']));
                    $link = $base . "/news_details.php?id=" . $news['id'];
                    
                    render_media_card(
                        $news['title'], 
                        $news['content'], 
                        $news['image'], 
                        $month, 
                        $year, 
                        $link, 
                        "Read Full Story"
                    ); 
                    ?>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="bg-white p-12 rounded-xl shadow-sm border border-gray-100 text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">No Recent Updates</h3>
                <p class="text-gray-500">Check back soon for the latest news.</p>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php require_once 'includes/footer.php'; ?>