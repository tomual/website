<!doctype html>
<html>
    <head>
        <title><?php echo empty(has_meta('title')) ? '' : get_meta('title') . ' | ' ?> Tomual</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('favicon.ico') ?>" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap');
            body {
                font-family: 'Noto Serif', serif;
                padding: 2rem;
                font-size: 14px;
                background: aliceblue;
            }
            body > table {
                width: 900px;
                background: #FFF;
                margin: auto;
            }
            .site-title {
                font-size: 28px;
                margin: 1rem 0;
                font-weight: bold;
            }
            .header, .menu, .side, .footer {
                background: aliceblue;
            }
            .header {
                background-image: url("<?php echo base_url('img/header boy.png') ?>");
                background-repeat: no-repeat;
                background-position: 450px;
                background-size: 160px;

            }
            .content {
                background: #FFF;
                display: table-cell;
                width: 570px;
                max-width: 570px;
                box-sizing: border-box;
            }
            body > table > tbody > tr > td {
                padding: 1rem;
            }
            .menu ul {
                padding: 0;
                margin: 0;
            }
            .menu li {
                list-style-type: none;
            }
            .moon {
                margin: auto;
                display: block;
                padding: 1rem
            }
            .updates-list {
                height: 11rem;
                overflow: hidden;
            }
            .content img {
                max-width: 100%;
            }
            .blog img {
                max-width: 100px;
            }
            .about svg {
                width: 25px;
                height: 25px;
                margin-top: 1rem
            }
            .software .thumbnail > div {
                width: 160px;
                height: 100px;
                border: 1px solid;
                float: left;
                margin-right: 1rem;
                margin-bottom: 1rem;
            }
            .about td {
                padding: 0;
            }

            .contact label {
                display: block;
            }

            .contact .error {
                color: crimson;
            }

            .contact img {
                display: block;
            }
        </style>
    </head>

<body>
<table border=2>
    <tr>
        <td valign="top" colspan="3" class="header">
            <div class="site-title">tomual</div>
            <p>personal site and laboratory</p>
        </td>
    </tr>
    <tr>
        <td valign="top" width="120" class="menu">
            <ul>
                <li><a href="<?php echo base_url('home') ?>">Home</a></li>
                <li><a href="<?php echo base_url('software') ?>">Software</a></li>
                <li><a href="<?php echo base_url('material') ?>">Material</a></li>
                <!-- <li><a href="<?php echo base_url('articles') ?>">Articles</a></li> -->
                <li><a href="<?php echo base_url('blog') ?>">Blog</a></li>
                <li><a href="<?php echo base_url('about') ?>">About</a></li>
                <img src="<?php echo base_url('img/the moon.png') ?>" width="30" height="28" class="moon">
                <small>
                    <b>TODO</b><br>
                    <strike>■ Put toolip somewhere visible</strike><br>
                    ❏ Put tttt somewhere visible<br>
                    ❏ Finish Witcher 3 <br>
                    ❏ Post about Unity <br>
                    ❏ Post about Godot <br>
                    ❏ Update timeline <br>
                    ❏ Get a new mouse <br>
                    ❏ Fix Twitch report <br>

                </small>
            </ul>
        </td>
        <td valign="top" class="content">