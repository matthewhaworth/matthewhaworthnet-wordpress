<!DOCTYPE html>
<html>
<head>
    <title>matthew haworth | <?php the_title(); ?></title>
    <link rel="shortcut icon" href="/favicon.ico?v=2" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container">
    <header>            
        <div class="name">
            <h1><a href='<?php echo get_site_url(); ?>'>matthew haworth</a></h1>
        </div>
        <div class="bio">
            <h2>web developer</h2>
        </div>
        <div class="clear"></div>
        <hr class="thick"/>
        <h5 class="long-bio">Manchester based Magento certified developer, Zend Framework enthusiast (soon to be certified).</h5>
        <hr />
    </header>
    
    