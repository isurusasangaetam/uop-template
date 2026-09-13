<?php
// components/ui-section-header.php

function render_section_header($title, $subtitle = null, $link_url = null, $link_text = "View All") {
    echo '
    <div class="flex justify-between items-end mb-10 border-b border-gray-200 pb-4">
        <div>
            <h2 class="text-3xl font-extrabold text-gray-900">' . htmlspecialchars($title) . '</h2>';
            
    if ($subtitle) {
        echo '<p class="text-gray-500 mt-2">' . htmlspecialchars($subtitle) . '</p>';
    }
    
    echo '
        </div>';
        
    if ($link_url) {
        echo '
        <a href="' . htmlspecialchars($link_url) . '" class="hidden sm:inline-flex items-center font-bold text-primary hover:text-secondary transition gap-1">
            ' . htmlspecialchars($link_text) . ' 
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>';
    }
    
    echo '</div>';
}
?>