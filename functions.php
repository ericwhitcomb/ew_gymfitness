<?php

// Creates the Menus
function ew_gymfitness_menus() {
    // WordPress Function
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}

// Hook
add_action('init', 'ew_gymfitness_menus');

?>