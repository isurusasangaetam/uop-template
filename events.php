<?php
$page_title = "Events";
/** @var array $site_config */
require_once 'includes/header.php'; 
require_once 'components/ui-page-header.php';
require_once 'components/cards/card-media.php';
$base = $site_config['base_url'];

render_page_header("Events & Workshops", "Discover upcoming workshops, seminars, and special programs.");

// MOCK DATA: Replace this array with your PDO Database Fetch later
// e.g., $events = $pdo->query("SELECT * FROM events")->fetchAll();
$events = [
    [
        'title' => 'Annual Template Workshop',
        'description' => 'Learn how to use this PHP/Tailwind template efficiently.',
        'event_date' => '2026-10-15',
        'image' => '', // Empty triggers the SVG placeholder fallback in the card component
        'id' => 1
    ],
    [
        'title' => 'Guest Lecture on Web Dev',
        'description' => 'A comprehensive guide to building modular systems.',
        'event_date' => '2026-11-02',
        'image' => '',
        'id' => 2
    ]
];
?>

<section class="py-16 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php if (count($events) > 0): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($events as $event): ?>
                    <?php 
                    // Format dates for the UI Card
                    $month = date('M', strtotime($event['event_date']));
                    $day = date('d', strtotime($event['event_date']));
                    $link = $base . "/event_details.php?id=" . $event['id'];
                    
                    render_media_card(
                        $event['title'], 
                        $event['description'], 
                        $event['image'], 
                        $month, 
                        $day, 
                        $link, 
                        "Read Details"
                    ); 
                    ?>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="bg-white p-12 rounded-xl shadow-sm border border-gray-100 text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">No Upcoming Events</h3>
                <p class="text-gray-500">Check back soon for updates!</p>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php require_once 'includes/footer.php'; ?>