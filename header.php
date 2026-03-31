<!doctype html>

<!-- 変更 -->
<html <?php language_attributes(); ?>>

<head>
    <!-- 変更 -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- 変更 -->
    <title><?php wp_title('|', true, 'right');
            bloginfo('name'); ?>
    </title>
    <!-- 変更 -->
    <?php wp_head(); ?>
</head>

<body>
    <header class="header_area">
        <h1 class="header_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="ロゴ" />
        </h1>
        <nav class="header_nav">
            <ul class="header_list">
                <li class="header_item"><a href="#" class="header_link">NEWS</a></li>
                <li class="header_item"><a href="#" class="header_link">ABOUT</a></li>
                <li class="header_item"><a href="#" class="header_link">BUSINESS</a></li>
                <li class="header_item"><a href="#" class="header_link">COMPANY</a></li>
            </ul>
        </nav>
        <!-- お問い合わせ -->
        <a href="#" class="header_button">お問い合わせ</a>
    </header>