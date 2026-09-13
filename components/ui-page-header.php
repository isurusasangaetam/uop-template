<?php
// components/ui-page-header.php

function render_page_header($title, $description = null) {
    echo '
    <section class="bg-primary text-white py-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">' . htmlspecialchars($title) . '</h1>';
            
    if ($description) {
        echo '
            <p class="text-lg text-gray-200 max-w-2xl border-l-4 border-secondary pl-4">
                ' . htmlspecialchars($description) . '
            </p>';
    }
    
    echo '
        </div>
        <!-- Optional background decorative element -->
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-white opacity-5 rounded-full blur-3xl pointer-events-none"></div>
    </section>';
}
?>