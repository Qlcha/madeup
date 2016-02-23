<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" />
    <title><?php bloginfo('name'); ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
    <script src="http://html5shiv.googlecode.com/svn/trunk/htlm5.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Lobster+Two:400italic,700italic,700,400' rel='stylesheet' type='text/css'>
</head>
<body <?php body_class(); ?>>
<header>
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?> <span>&sstarf;&sstarf;&sstarf;</span></a>   </h1>
    <?php wp_nav_menu(array(
        'theme_location'    => 'header_menu',
        'container'		 	=> 'nav',
    )); ?>
    <?php if (is_user_logged_in ()) { ?>
        <a href="<?php echo wp_logout_url(esc_url(home_url('/'))); ?>">Выход</a>
    <?php } else { ?>
        <a href="<?php echo wp_login_url(esc_url(home_url('/'))); ?>">Войти</a>
    <?php } ?>
</header>
