<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<div class="main-container">
    <header>
        <nav>
            <h1 class="logo"><a href="<?php echo site_url();  ?>"><?php bloginfo('title'); ?></a></h1>
            <div class="nav-links">
                <a href="#">About</a>
                <a href="#">Projects</a>
                <a href="#">Contact</a>
                <a href="<?php echo site_url('/blog');?>">Blog</a>
            </div>
        </nav>
    </header>
