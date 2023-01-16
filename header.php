<head>
    <title><?php bloginfo('name'); ?> | <?php wp_title();  ?></title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

    <?php wp_head(); ?>
</head>

<header id="header" class="group">
    <h1><img src="images/logo.png" alt="Logo"></h1>

    <?php get_search_form(); ?>

    <?php wp_nav_menus(
        array(
            'menu' => 'Main',
            'container' => 'nav'
        )
        ); ?>
</header>