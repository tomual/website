<!DOCTYPE html>
<html>
<head>
    <title>Tomual</title>
</head>
<style>
    body {
        background: #99CCCC;
        font-family: monospace;
    }

    .white {
        margin: auto;
        margin-top: 5%;
        height: 680px;
        width: 400px;
        background: white;
        padding: 24px;
        box-sizing: border-box;
        border-bottom: 10px solid #CCE6E6;
    }

    .banner {
        background: #99CCCC;
        height: 324px;
    }

    h1 {
        margin: 0;
        padding: 12px;
        color: #FFF;
        text-shadow: 1px 1px 1px #001b6670;
    }

    .nav a {
        border-bottom: 10px solid #BD8D82;
        padding: 8px 24px;
        background: #CCA699;
        display: inline-block;
        color: #FFF;
        text-decoration: none;
        font-weight: bold;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 12px;
        text-shadow: 1px 1px 2px #66000070;
    }

    .nav a:hover {
        margin-top: 15px;
        border-bottom-width: 7px;
    }

    .nav .yellow {
        background: #CCCC99;
        border-bottom-color: #BDAE82;
    }

    .nav .green {
        background: #A6CC99;
        border-bottom-color: #9CAE82;
    }

    .nav .teal {
        background: #99CCB3;
        border-bottom-color: #91AE98;
    }

    .nav .blue {
        background: #99BFCC;
        border-bottom-color: #91A3AE;
    }

    .exit {
        position: absolute;
        bottom: 12px;
        right: 12px;
        color: #FFF;
        font-weight: bold;
    }
</style>
<body>
    <div class="white">
        <div class="banner">
            <h1>Tomual</h1>
        </div>
        <div class="nav">
            <a href="<?php echo base_url('material') ?>" class="red">material</a><br>
            <a href="<?php echo base_url('software') ?>" class="yellow">software</a><br>
            <a href="<?php echo base_url('blog') ?>" class="green">blog</a><br>
            <a href="<?php echo base_url('ezine') ?>" class="teal">ezine</a><br>
            <a href="<?php echo base_url('about') ?>" class="blue">about</a><br>
        </div>
        <div class="exit"><a href="<?php echo base_url('exit') ?>">exit ---></a></div>
    </div>
</body>
</html>
