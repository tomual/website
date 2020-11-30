<!DOCTYPE html>
<html>
<head>
    <title>Photos - <?php echo $this->uri->segment(3) ?> | Tomual</title>
    <style type="text/css">
    	body {
    	    font-family: Consolas, monospace;
    	    font-size: 12px;
    	    padding-top: 10%;
    	}

    	img {
    		max-width: 400px;
    		margin:	auto;
    		display: block;
    	}

    	p {
    		margin:	auto;
    		margin-top: 40px;
    		max-width: 400px;
    		display: block;
    	}

    	nav {
    		max-width: 400px;
    		margin:	auto;
    		display: block;
    		margin-top: 40px;
    	}

    	nav a {
    		display: block;
    		width: 33%;
    		float: left;
    		text-align: center;
    	}

    	b {
    		display: block;
    		margin:	auto;
    		max-width: 400px;
    		text-align: center;
    		font-weight: 600;
    		letter-spacing: 1px;
    		margin-bottom: 1rem;
    	}

        .text-muted {
            opacity: 0.3;
        }
    </style>
</head>
<body>
	<b><?php echo $this->uri->segment(3) ?></b>
	<?php if(!empty($images[$index])): ?>
	    <img src="<?php echo base_url('img/photos/' . $this->uri->segment(3) . '/' . basename($images[$index])) ?>" alt="">
	<?php endif ?>
	<nav>
	    <?php if( $index > 0 ): ?>
	        <a href="?page=<?php echo $index - 1 ?>">&laquo; Previous</a>
	    <?php else: ?>
	        <a class="text-muted">&laquo; Previous</a>
	    <?php endif ?>
		<a href="<?php echo base_url('gallery/photo') ?>">Back</a>
	    <?php if( $index < count($images) - 1 ): ?>
	        <a href="?page=<?php echo $index + 1 ?>">Next &raquo;</a>
	    <?php else: ?>
	        <a class="text-muted">Next &raquo;</a>
	    <?php endif ?>
	</nav>
</body>
</html>
