<?php
// components/cards/card-profile.php

function render_profile_card($name, $role, $image_url, $phone = null, $email = null) {
    // Reference the config for the base URL so paths don't break
    global $site_config; 
    $base = $site_config['base_url'];
    
    // Use local default avatar if no image is provided
    $display_image = !empty($image_url) ? $base . htmlspecialchars($image_url) : $base . '/assets/images/staff/default-avatar.png';
    
    echo '
    <div class="group w-full sm:w-64 flex flex-col items-center text-center">
        <div class="w-32 h-32 rounded-full bg-white mb-4 overflow-hidden border-4 border-gray-200 shadow-md group-hover:border-secondary transition-colors duration-300">
            <img src="' . $display_image . '" alt="' . htmlspecialchars($name) . '" class="w-full h-full object-cover">
        </div>
        
        <h3 class="text-lg font-bold text-gray-900 leading-tight">' . htmlspecialchars($name) . '</h3>
        <p class="text-primary font-medium text-sm mb-3 mt-1">' . htmlspecialchars($role) . '</p>
        
        <div class="flex flex-col gap-1.5">';
        
    if ($phone) {
        echo '
            <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                ' . htmlspecialchars($phone) . '
            </p>';
    }
    
    if ($email) {
        echo '
            <p class="text-gray-500 text-sm flex items-center justify-center gap-2">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <a href="mailto:' . htmlspecialchars($email) . '" class="hover:text-primary hover:underline transition">' . htmlspecialchars($email) . '</a>
            </p>';
    }
    
    echo '
        </div>
    </div>';
}
?>