<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php bloginfo('name'); echo " | "; bloginfo('description');  ?></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/<?php echo $style;?>.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/geral.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/wow/css/libs/animate.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/plugins.css">
        
    </head>
    <body>
        <?php include('includes/organisms/menu-responsivo.php');?>
        <div class="layout">
            <style>
                <?php if(get_the_post_thumbnail()) : ?>
                    header{
                        background-image: url('<?php the_post_thumbnail_url(); ?>');
                    }
                <?php else :?>
                    header{
                        background-image: url('<?php bloginfo('template_url'); ?>/images/bg2.jpg');
                    }
                <?php endif; ?>

            </style>
            <header>
                <div class="container">
                    <div class="logo">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/images/logo1.png" alt="">
                        </a>
                    </div>
                    <div class="links">
                        <?php include('includes/organisms/menu.php');?>
                        <a class="toggle" href="javascript:;">
                            <span></span>
                            <span></span>
                            <span></span>
                            <!--<span></span>-->
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa  fa-github-alt"></i></a></li>
                        </ul>
                    </div>
                    <h1 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s"><?php echo $chamada; ?></h1>
                    <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s">Code // Share // Reboot</p>
                </div>
            </header>
            <main>