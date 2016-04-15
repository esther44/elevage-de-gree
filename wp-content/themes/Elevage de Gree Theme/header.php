<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <title><?php bloginfo('name') ?><?php if (is_404()) : ?> &raquo; <?php _e('Not Found') ?><?php elseif (is_home()) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>"/>
    <!-- leave this for stats -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>"/>
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>"/>
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>"/>
    <link rel="pingback"
          href="<?php bloginfo('pingback_url'); ?>"/><?php wp_head(); ?>
    <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>
</head>
<body>

<div id="page" class="col-md-12">
    <!-- Informations du blog -->
    <header class="row">
        <div class="row">
            <!-- Titre du blog -->
            <h1>
                <!-- Lien qui va permettre de retourner � la homepage quand on clique sur le titre du blog-->
                <a href="<?php bloginfo('url'); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
        </div>
        <div class="row">
            <!--Menu-->
            <?php wp_nav_menu(array(
                'theme_location' => 'header-menu', /*Nom du menu (� choisir dans l'admin wordpress*/
                'menu_class' => 'header_menu_class', /*Ajoute la class 'header_menu_class' au menu*/
                'container' => 'nav')); /*Change la balise <div> en <nav>*/
            ?>
        </div>
        <div class="row">
            <!--Description du blog -->
            <span class="description">
                <?php bloginfo('description'); ?>
            </span>
        </div>
        <div class="row">
            <!--Image en-t�te-->
            <img class="image_principale" src="<?php echo( get_header_image() ); ?>">
        </div>
    </header>
