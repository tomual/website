<?php $this->load->view('header') ?>

<a href="<?php echo base_url('gallery') ?>" class="back-link">&laquo; Back to Gallery</a>

<h1>Sites</h1>
<p>Some websites I've worked on which are currently online</p>

<ul>
<!--    <li><a target="_blank" href="link">name</a> description</li>-->
    <li><a target="_blank" href="https://coco.lat/koi-auth/">Koi Auth</a> is a user auth service where developers can create/log in users for their apps.</li>
    <li><a target="_blank" href="https://coco.lat/c/">Churro</a> is a blog service where users can create a blog with custom pages and styling.</li>
    <li><a target="_blank" href="http://coco.lat/t/">Toyscreen</a> is a screenshot logger where users can post their screenshots with a text post.</li>
    <li><a target="_blank" href="https://give-me-hot.herokuapp.com/">give-me-hot</a> is a dynamic aggregate from multiple popular sites. 20 second bootup time.</li>
    <li><a target="_blank" href="<?php echo base_url('s/iconshop') ?>">Iconshop</a> is a small site with downloads for Windows desktop icons and cursors</li>
	<li><a target="_blank" href="https://tomacoin.snowblush.com/">Tomacoin</a> is my previous personal site</li>
<!--	<li><a target="_blank" href="--><?php //echo base_url('s/oddpuffin') ?><!--">OddPuffin</a> is one of my first attempts at a sozai site</li>-->
</ul>

<?php $this->load->view('footer') ?>