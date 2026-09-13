<?php
// components/cards/card-media.php

function render_media_card($title, $description, $image_url = "", $date_top, $date_bottom, $link_url, $link_text = "Read More") {
    // Reference the config for the base URL so paths don't break
    global $site_config;
    $base = isset($site_config['base_url']) ? $site_config['base_url'] : '';

    // Determine whether to use the provided image or the local placeholder
    $display_image = !empty($image_url) ? $base . htmlspecialchars($image_url) : $base . '/assets/images/placeholder.png';

    echo '
    <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col overflow-hidden group">
        <div class="relative h-48 w-full bg-gray-200 overflow-hidden">
            <img src="' . $display_image . '" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="' . htmlspecialchars($title) . '">
            
            <div class="absolute top-4 right-4 bg-white/95 text-center px-3 py-1.5 rounded-lg shadow-md border-b-4 border-secondary">
                <span class="block text-xs font-bold text-gray-500 uppercase leading-none">' . htmlspecialchars($date_top) . '</span>
                <span class="block text-xl font-extrabold text-primary leading-none mt-1">' . htmlspecialchars($date_bottom) . '</span>
            </div>
        </div>
        <div class="p-6 flex flex-col flex-grow">
            <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-primary transition-colors">' . htmlspecialchars($title) . '</h3>
            <p class="text-gray-600 text-sm mb-4 line-clamp-2 flex-grow">' . htmlspecialchars($description) . '</p>
            <a href="' . htmlspecialchars($link_url) . '" class="inline-flex items-center gap-2 text-sm font-bold text-primary hover:text-secondary transition-colors group/btn">
                ' . htmlspecialchars($link_text) . ' 
                <svg class="w-4 h-4 transform group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>';
}
?>