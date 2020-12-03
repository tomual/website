<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo empty(has_meta('title')) ? '' : get_meta('title') . ' &middot; ' ?> tomual</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <meta http-equiv="cleartype" content="on">
    <style>
        @font-face
        {
            font-family: Volter;
            src: url('<?php echo base_url('Volter.ttf') ?>')
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style.css') ?>?v=1">
</head>
<body style="background-image: url(<?php echo base_url('img/bg.png') ?>);">