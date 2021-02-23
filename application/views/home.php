<!DOCTYPE html>
<html>
<head>
    <title>Tomual</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-89678350-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-89678350-1');
    </script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap');
        body {
            font-family: lucida grande,verdana,arial,helvetica;
            font-size: 12px;
        }
        
        .container {
            width: 400px;
            height: 500px;
            margin: auto;
            margin-top: 170px;
            position: relative;
        }

        h1 {
            font-family: 'Nanum Pen Script', cursive;
            margin: 0;
            padding: 0;
            font-size: 46px;
            font-weight: normal;
            line-height: 42px;
        }

        .subtitle {
            font-size: 12px;
        }

        .white {
            border: 1px solid #000;
            padding: 12px;
            margin: 6px 0;
        }

        .banner {
            height: 100px;
            border: 1px solid black;
            background: #666;
            text-align: end;
            padding: 12px;
            background-image: url(<?php echo base_url('img/front_bg.jpg') ?>);
            background-position: 1px;
            background-size: cover;
            color: #EEE;
            font-size: 10px;

        }

        .nav a {
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: bold;
            color: black;
            text-decoration: none;
            margin-top: 12px;
            border-bottom: 1px dotted black;
        }

        .updates {
            width: 340px;
            margin-left: 60px;
            overflow: hidden;
            height: 14px;
        }

        .update {
            display: inline;
            margin-right: 24px;
        }

        .updates {
            /* margin-top: 6px; */
        }

        .item-desc {
            font-size: 12px;
        }

        img {
            position: absolute;
            height: 670px;
            top: -130px;
            pointer-events: none;
            left: -145px;
        }

        .title {
            margin-left: 110px;
        }
    </style>

</head>
<body>
    <div class="container">
        <img src="<?php echo base_url('img/yasu_front.png') ?>">
        <div class="title">
            <h1>Tomual</h1>
            <div class="subtitle">Personal site and laboratory</div>
        </div>

        <div class="white">
            <div class="banner">
                lost heroes ver.
            </div>
            <div class="nav">
                <div class="item" style="margin-left: 60px">
                    <a href="<?php echo base_url('material') ?>">material</a>
                    <div class="item-desc">materials for your website or other projects</div>
                </div>
                <div class="item" style="margin-left: 70px">
                    <a href="<?php echo base_url('software') ?>">software</a>
                    <div class="item-desc">web applications made by tom</div>
                </div>
                <div class="item" style="margin-left: 60px">
                    <a href="<?php echo base_url('blog') ?>">blog</a>
                    <div class="item-desc">programming and personal notes</div>
                </div>
                <div class="item" style="margin-left: 60px">
                    <a href="<?php echo base_url('ezine') ?>">ezine</a>
                    <div class="item-desc">electronic magazine of games tom has played</div>
                </div>
                <div class="item" style="margin-left: 50px">
                    <a href="<?php echo base_url('about') ?>">about</a>
                    <div class="item-desc">about the website and webmaster</div>
                </div>
            </div>
        </div>
        <marquee class="updates">
            <div class="update">2021-02-21 · Layout Update</div>
            <div class="update">2021-01-09 · Software Godot Game</div>
        </marquee>
    </div>
</body>
</html>
