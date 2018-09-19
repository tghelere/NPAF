<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="<?=get_stylesheet_uri();?>">
        <!-- <link rel="stylesheet" href="<? bloginfo('template_url'); ?>/assets/css/default.css"> -->
        <link rel="stylesheet" href="<? bloginfo('template_url'); ?>/assets/css/<? global $style; echo $style; ?>.css">
        <!-- <link rel="stylesheet" href="<? bloginfo('template_url'); ?>/assets/css/plugins.css"> -->

        <title><? bloginfo('name'); //echo " | "; bloginfo('description'); ?></title>
        <? wp_head(); ?>
    </head>
    <body <? body_class(); ?> id="<?= is_front_page() ? 'home' : $wp->request; ?>">
    <? include('includes/molecules/button_smc.php'); ?>
    <? include('includes/organisms/modal_smc.php'); ?>
        <header>
            <div class="container-fluid">
                <div class="row gray-bar">
                    <p>Av. Nóbrega, 536 - Z4 - Maringá</p>
                </div>
                <div class="container">
                    <div class="row nav-bar">
                        <? include('includes/molecules/logo.php'); ?>
                        <? include('includes/organisms/menu.php'); ?>
                        <? include('includes/organisms/header_sociallist.php'); ?>
                    </div>
                </div>
                <div class="row banners <?= is_front_page() ? 'home' : $wp->request; ?>"></div>
            </div>
        </header>
        <main>
            <div class="container content">