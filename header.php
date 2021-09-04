<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    
    <div id="top" class="l-container">
        <header class="p-header u-margin-lr">
            <div class="p-header__wrapper">
                <h1 class="c-logo">
                    <img class="js-color" src="<?php echo get_template_directory_uri(); ?>/img/logo-name.svg" alt="">
                    <img class="js-color" src="<?php echo get_template_directory_uri(); ?>/img/logo-name-white.svg" alt="">
                </h1>
                <nav class="p-gnav js-gnav">
                    <button class="p-hamburger js-hamburger js-color">
                        <span>menuボタン</span>
                    </button>
                    <ul class="list js-color">
                        <li><a href="<?php echo home_url('/#top'); ?>">TOP</a></li>
                        <li><a href="<?php echo home_url('/#about'); ?>">ABOUT</a></li>
                        <li><a href="<?php echo home_url('/#skills'); ?>">SKILLS</a></li>
                        <li><a href="<?php echo home_url('/#works'); ?>">WORKS</a></li>
                        <li><a href="<?php echo home_url('/#contact'); ?>">CONTACT</a></li>
                        
                    </ul>
                </nav>
            </div>
        </header>