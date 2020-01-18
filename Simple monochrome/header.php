<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab9bf04d42.js" crossorigin="anonymous"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_enqueue_script('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array('jquery')); ?>  
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="pt-3">
                <h1><?php bloginfo( 'name' ); ?></h1>
                <p><?php bloginfo( 'description' ); ?></p>
            </div>
        </div>
    </header>
    <!-- global-Navi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="<?php echo esc_url( get_home_url() ); ?>">Home</a>
            <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <?php
                $defaults = array(
                    'menu_class'      => 'navbar-nav', // ulタグに着けるクラス名
                    'container'       => false,
                    'link_before'     => '<span class="nav-link text-white nav-item">',
                    'link_after'      => '<span>',
                    'theme_location'  => 'gloval-navigation',
                );
                wp_nav_menu( $defaults );
            ?>
            </div>
        </div>
    </nav>


    <!-- /global-Navi -->
