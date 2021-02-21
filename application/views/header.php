<!DOCTYPE html>
<html>
<head>
    <title><?php echo get_title() ? get_title() . ' | ' : null ?>Tomual</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: lucida grande,verdana,arial,helvetica;
        font-size: 12px;
    }
    .outer {
        width: 1000px;
        margin: auto;
    }
    .header {
        background: #666;
        width: 100%;
        height: 160px;
        border: 1px solid black;
        background-image: url(<?php echo base_url('img/bannerino.png') ?>);
        background-size: cover;
    }
    .white {
        background: #FFF;
        border: 1px solid black;
        padding: 24px;
        min-height: calc(100vh - 280px);
    }
    .nav-item {
        display: inline-block;
        border: 1px solid #000;
        position: relative;
        padding: 12px 24px;
        bottom: -1px;
    }
    .nav-item.active {
        border-bottom: 1px solid #FFF;
    }
    .content {
        width: 680px;
        float: left;
    }
    .side {
        width: 250px;
        float: right;
    }
    .clear {
        clear: both;
    }
    .side-box {
        background: #EEE;
        padding: 12px;
        height: 200px;
    }
    textarea.code {
        background: #000;
        color: #FFF;
        font-family: monospace;
        padding: 12px;
        width: 100%;
    }
    .breadcrumbs {
        background: #EEE;
        display: inline-block;
        padding: 3px 6px;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #666;
    }

    .breadcrumbs a {
        text-decoration: none;
        color: #666;
        font-weight: bold;
    }

    .nav a {
        color: #000;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 11px;
        font-weight: bold;
    }
    h1 {
        background: #000;
        color: #FFF;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 3px 6px;
    }

    h2 {
        font-size: 1em;
        border-bottom: 1px dotted #000;
    }
    .border {
        border: 1px solid #000;
    }

    /* SOFTWARE*/
    .thumbnail > div {
        height: 85px;
        width: 145px;
        border: 1px dashed #000;
        vertical-align: middle;
        background-size: 160%;
        background-position: top;
        float: left;
        margin-right: 14px;
    }

    .item {
        margin-bottom: 24px;
        min-height: 110px;
    }

    .item-small {
        margin-bottom: 24px;
    }
    h2 a {
        text-decoration: none;
        color: #000;
    }
    .post-info {
        font-style: italic;
        margin-bottom: 12px;
    }
    .nav-item.nav-top {
        border: none;
    }
    .site-title {
        background: #FFF;
        display: inline-block;
        position: relative;
        top: -1px;
        left: -1px;
        padding: 12px 24px;
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 1px;
    }
    .site-title a {
        color: #000;
        text-decoration: none;
    }
    .update {
        display: inline;
        margin-right: 24px;
    }
    .updates {
        font-size: 11px;
        margin-top: 6px;
        margin-bottom: 3px;
    }
</style>
<body>
    <div class="outer">
        <div class="header">
            <div class="site-title"><a href="<?php echo base_url() ?>">Tomual</a></div>
        </div>

        <marquee class="updates">
            <div class="update">2021-02-21 · Layout Update</div>
            <div class="update">2021-01-09 · Software Godot Game</div>
        </marquee>
        <div class="nav">
            <a class="nav-item <?php echo $this->router->fetch_class() == 'material' ? 'active' : null ?>" href="<?php echo base_url('material') ?>">material</a>
            <a class="nav-item <?php echo $this->router->fetch_class() == 'software' ? 'active' : null ?>" href="<?php echo base_url('software') ?>">software</a>
            <a class="nav-item <?php echo $this->router->fetch_class() == 'blog' ? 'active' : null ?>" href="<?php echo base_url('blog') ?>">blog</a>
            <a class="nav-item <?php echo $this->router->fetch_class() == 'ezine' ? 'active' : null ?>" href="<?php echo base_url('ezine/intro') ?>">ezine</a>
            <a class="nav-item <?php echo $this->router->fetch_class() == 'about' ? 'active' : null ?>" href="<?php echo base_url('about') ?>">about</a>
            <a class="nav-item nav-top <?php echo $this->router->fetch_class() == 'about' ? 'active' : null ?>" href="<?php echo base_url() ?>">top</a>
        </div>
        <div class="white">
            <div class="main">
                <div class="content">
                    <?php echo get_breadcrumbs() ?>
                    
