<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('material') ?>"><img src="<?php echo base_url('img/header material.png') ?>"></a>
    <img src="<?php echo base_url('img/footer.png') ?>" style="position: fixed; bottom: 30px; left: 50px;">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" style="position: fixed; bottom: 29px; left: 48px;"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" style="position: absolute; top: -1px; left: 218px;">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;"> 
    <h1>Material</h1>
    <p>Miscellanious things that may or may not be useful to you.</p>

    <h2>Web Materials</h2>
    <ul class="material">
        <li><a href="<?php echo base_url('material/toybox') ?>">Graphics</a></li>
        <li><a href="<?php echo base_url('material/backgrounds') ?>">Backgrounds</a></li>
        <li><a href="<?php echo base_url('material/bullets') ?>">Bullets</a></li>
        <li><a href="<?php echo base_url('material/emoticons') ?>">Emoticons</a></li>
        <li><a href="<?php echo base_url('material/blog-layouts') ?>">HTML Layouts</a></li>
    </ul>
    <br>

</section>  

<?php $this->load->view('footer') ?>