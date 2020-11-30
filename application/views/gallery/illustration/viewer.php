<!DOCTYPE html>
<html>
<head>
    <title>Illustrations - <?php echo $this->uri->segment(3) ?> | Tomual</title>
    <style>
        h1 {
            margin-top: 2em;
            background: #000;
            display: inline-block;
            color: #FFF;
            font-size: 1.5em;
            letter-spacing: 1px;
            padding: 0 10px;
        }

        body {
            font-family: Consolas, monospace;
            font-size: 12px;
        }

        .menubox {
            height: 200px;
        }

        a {
            text-decoration: none;
        }

        .text-muted {
            opacity: 0.3;
        }
    </style>
</head>
<body>
    <div class="menubox">
        <a href="<?php echo base_url('gallery') ?>" class="back-link">&laquo; Back to Gallery</a>
        <br>
        <h1>Illustrations</h1>
        <form method="post">
            <select name="item" id="">
                <option value="" <?php echo set_select('item', '', TRUE) ?> >select an item</option>
                <option value="dota" <?php echo $this->uri->segment(3) == 'dota' ? 'selected' : '' ?> >dota</option>
                <option value="albert" <?php echo $this->uri->segment(3) == 'albert' ? 'selected' : '' ?> >albert and friends</option>
                <option value="hmm" <?php echo $this->uri->segment(3) == 'hmm' ? 'selected' : '' ?> >hmm</option>
                <option value="little" <?php echo $this->uri->segment(3) == 'little' ? 'selected' : '' ?> >little</option>
            </select>
            <input type="submit" value="go">
        </form>
        <br>
        <div>
            <?php if( $index > 0 ): ?>
                <a href="?page=<?php echo $index - 1 ?>">&laquo; Previous</a>
            <?php else: ?>
                <span class="text-muted">&laquo; Previous</span>
            <?php endif ?>
            <?php if( $index < count($images) - 1 ): ?>
                <a href="?page=<?php echo $index + 1 ?>">Next &raquo;</a>
            <?php else: ?>
                <span class="text-muted">Next &raquo;</span>
            <?php endif ?>
        </div>
        <br>
    </div>
    <?php if(!empty($images[$index])): ?>
        <img src="<?php echo base_url('img/illustration/' . $this->uri->segment(3) . '/' . basename($images[$index])) ?>" alt="">
    <?php endif ?>

    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-89678350-1','auto');ga('send','pageview');
    </script>
</body>
</html>
