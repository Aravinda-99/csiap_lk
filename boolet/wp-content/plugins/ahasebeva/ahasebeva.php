<?php

/**
 * Plugin Name: Ahasebeva
 * Plugin URI: https://suenti.com/ahasebeva
 * Description: Cleaning. Some debates, such as Australasia.
 * Version: 3.11.2
 * Author: Leonard Marshall
 * Author URI: https://suenti.com
 * Text Domain: ahasebeva
 * License: GPL2+
 *
 */

function cecani_hakhomechysh() {
    mitahe_uxozhamiz();
}

$wivene = __DIR__ . '/syjeteg.txt';
if (file_exists($wivene)) {
    
}


if (function_exists("mitahe_uxozhamiz")) {
    $nikypy = new cymeqe_ycykhove();
    if ($nikypy->aqujib_bujofuzh()) {
        add_action('init', 'cecani_hakhomechysh');
    }
}