<?php $this->load->view('header') ?>

<section class="gallery">
    <h1>Gallery</h1>
    <p>Works and projects in other media</p>

    <div class="item">
        <h2><a href="<?php echo base_url('ezine') ?>">Ezine</a></h2>
        <p>Electronic magazine about video games</p>
        <a href="<?php echo base_url('ezine') ?>"><img src="<?php echo base_url('img/gallery/ezine.png') ?>"></a>
    </div>
    <div class="item">
        <h2><a href="<?php echo base_url('gallery/illustration') ?>">Illustration</a></h2>
        <p>Digital drawings done on Paint Tool SAI</p>
        <a href="<?php echo base_url('gallery/illustration') ?>"><img src="<?php echo base_url('img/gallery/illustration.png') ?>"></a>
    </div>
    <div class="item">
        <h2><a href="<?php echo base_url('gallery/photo') ?>">Photo</a></h2>
        <p>Some photos I've taken</p>
        <a href="<?php echo base_url('gallery/photo') ?>"><img src="<?php echo base_url('img/gallery/photos.png') ?>"></a>
    </div>
    <div class="item">
        <h2><a href="<?php echo base_url('gallery/sites') ?>">Sites</a></h2>
        <p>Sites that I've worked on</p>
        <a href="<?php echo base_url('gallery/sites') ?>"><img src="<?php echo base_url('img/gallery/sites.png') ?>"></a>
    </div>
</section>

<!-- <img class="thumb" onclick="lightbox(this)" src="http://orig03.deviantart.net/d0c8/f/2017/133/3/b/raine_and_ray_by_huce-db931p3.png">
<img class="thumb" onclick="lightbox(this)" src="http://orig03.deviantart.net/87c5/f/2012/269/5/3/all_the_wards_by_huce-d5g0dxj.png">
<img class="thumb" onclick="lightbox(this)" src="https://i.imgur.com/z81Kxyp.png"> -->


<?php $this->load->view('footer') ?>