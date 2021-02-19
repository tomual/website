<!DOCTYPE html>
<html>
<head>
    <title><?php echo get_title() ? get_title() . ' | ' : null ?>Tomual</title>
</head>
<style>
    @font-face {
      font-family: 'Source Sans Pro';
      src: URL('http://localhost/soft-tomual/fonts/SourceSansPro-Regular.ttf') format('truetype');
    }

    body {
        background: #99CCCC;
        font-family: 'Source Sans Pro', Calibri;
        color: #323a3a;
        padding: 0;
        margin: 0;
        font-size: 14px;
    }

    h1 {
        margin: 0;
    }

    li {
        line-height: 1.5rem;
    }

    h2, h3, h4, h5 {
        font-size: inherit;
    }

    .container {
        box-sizing: border-box;
        margin-left: 260px;
        overflow: auto;
        margin-top: 50px;
    }

    .side {
        position: fixed;
        width: 255px;
        top: 0;
        bottom: 0;
        background-repeat: repeat-y;
        background-position: right;
        color: #FFF;
        padding: 48px 24px;
        padding-bottom: 24px;
        box-sizing: border-box;
        font-family: monospace;
        display: flex;
        flex-direction: column;
        text-shadow: 1px 1px 1px #001b6670;
    }

    .side img {
        margin-top: auto;
        width: 110px;
        margin-left: auto;
        margin-right: auto;
    }

    .side a {
        color: #FFF;
        text-decoration: none;
        font-weight: bold;
        letter-spacing: 0.5px;
    }

    .side a:hover {
        text-decoration: underline;
    }

    .page-title {
        font-size: 2em;
        font-weight: bold;
        color: #FFF;
    }

    .content {
        width: 580px;
        background: white;
        padding: 48px;
        padding-right: 48px;
    }

    ul.material {
        margin: 0;
        padding: 1rem;
    }

    .side ul {
        position: relative;
        list-style: none;
        margin-left: 0;
        padding-left: 1.2em;
    }
    .side ul li:before {
        content: "+";
        position: absolute;
        left: 0;
    }

    .back {
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
        text-align: center;
    }

    .back:hover {
        margin-top: 15px;
        border-bottom-width: 7px;
        text-decoration: none;
    }

</style>
<body>
