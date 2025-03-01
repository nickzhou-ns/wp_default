<?php get_template_part('partials/main'); ?>

<head>
    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Home')); ?>
    <link rel="shortcut icon" href="assets_ext/img/nihao_fav.png" type="image/x-icon">

    <?php get_template_part('partials/head_css'); ?>
    <?php wp_head(); ?>
</head>

<body class="homepage1-body">
    <?php
    get_template_part('partials/header_section');
    if (!is_front_page()) {
        get_template_part('partials/breadcrumb');
    }
    ?>