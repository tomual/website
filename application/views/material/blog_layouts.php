<?php $this->load->view('header')?>
<nav id="side">
    <a href="<?php echo base_url('material') ?>"><img src="<?php echo base_url('img/header material.png') ?>"></a>
    <nav id="guide">
        <br>
        <h1><a href="<?php echo base_url('material') ?>">MATERIAL</a></h1>
        <a href="<?php echo base_url('material') ?>">
        </a>
        <ul>
            <a href="<?php echo base_url('material') ?>">
            </a>

            <li><a href="<?php echo base_url('material/toybox') ?>">Graphics</a></li>
            <li><a href="<?php echo base_url('material/backgrounds') ?>">Backgrounds</a></li>
            <li><a href="<?php echo base_url('material/bullets') ?>">Bullets</a></li>
            <li><a href="<?php echo base_url('material/emoticons') ?>">Emoticons</a></li>
            <li><a href="<?php echo base_url('material/blog-layouts') ?>">HTML Layouts</a></li>
        </ul>
    </nav>
    <img src="<?php echo base_url('img/footer.png') ?>" style="position: fixed; bottom: 30px; left: 50px;">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" style="position: fixed; bottom: 29px; left: 48px;"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" style="position: absolute; top: -1px; left: 218px;">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;">
    <h1>HTML Layouts</h1>
    <p>Themes to use for your personal site, Blogger, Wordpress, or Tumblr. These themes are in HTML can can be copied into the template field into the websites. Different HTML are used for each platform (the template for Blogger will not be functional for Wordpress etc), so the right one must be copied and pasted.</p>

    <h2>Gone Home</h2>
    <p>A clean, white blog layout with a top banner image.</p>
    <a href="<?php echo base_url('material/blog-layouts/gone-home') ?>"><img src="<?php echo base_url('img/material/layout/gone.png') ?>" class="border"></a>

    <br><br>

    <h2>Fluff</h2>
    <p>Simple one-post-per-page theme with a polar beard.</p>
    <a href="<?php echo base_url('material/blog-layouts/fluff') ?>"><img src="<?php echo base_url('img/material/layout/fluff.jpg') ?>" class="border"></a>

    <br><br>

    <h2>Neighbour</h2>
    <p>Simple white blog theme with a banner image.</p>
    <a href="<?php echo base_url('material/blog-layouts/neighbour') ?>"><img src="<?php echo base_url('img/material/layout/neighbour.png') ?>" class="border"></a>

    <br><br>

    <h2>Hyperion</h2>
    <p>A simple one-column blog layout in a space theme.</p>
    <a href="<?php echo base_url('material/blog-layouts/hyperion') ?>"><img src="<?php echo base_url('img/material/layout/hyperion.png') ?>" class="border"></a>

    <br><br>

    <h2>Feed Me</h2>
    <p>A colorful one-column layout in shape of a cat.</p>
    <a href="<?php echo base_url('material/blog-layouts/feed-me') ?>"><img src="<?php echo base_url('img/material/layout/feedme.png') ?>" class="border"></a>

    <br><br>

    <h2>Yacht</h2>
    <p>A simple one-column blog layout with an ocean theme.</p>
    <a href="<?php echo base_url('material/blog-layouts/yacht') ?>"><img src="<?php echo base_url('img/material/layout/yacht.png') ?>" class="border"></a>

    <br><br>

    <br>
    <a href="<?php echo base_url('material') ?>" class="back-link">&laquo; Back to Material</a>
</section>
<?php $this->load->view('footer')?>