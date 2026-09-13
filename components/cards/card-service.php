<?php
// components/cards/card-service.php

function render_service_card($title, $description, $icon_svg, $link_url = null, $link_text = "Learn More") {
    echo '
    <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-primary hover:shadow-lg transition flex flex-col">
        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6 text-primary">
            ' . $icon_svg . '
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">' . htmlspecialchars($title) . '</h3>
        <p class="text-gray-600 mb-6 flex-grow">' . htmlspecialchars($description) . '</p>';
        
    if ($link_url) {
        echo '
        <a href="' . htmlspecialchars($link_url) . '" class="mt-auto self-start font-bold text-primary hover:text-secondary flex items-center gap-1">
            <span>' . htmlspecialchars($link_text) . '</span>
            <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>';
    }
    
    echo '</div>';
}
?>