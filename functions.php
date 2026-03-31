<?php

function my_theme_enqueue_styles()
{

    // reset.cssを読み込む
    wp_enqueue_style('reset', get_theme_file_uri('css/reset.css'));

    // style.cssを読み込む
    wp_enqueue_style('style', get_theme_file_uri('css/style.css'));

    // work.cssを読み込む
    wp_enqueue_style('work', get_theme_file_uri('css/work.css'));
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
