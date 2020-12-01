<?php $this->load->view('header')?>
<nav id="side">
    <a href="<?php echo base_url('about') ?>"><img src="<?php echo base_url('img/header about.png') ?>"></a>
    <img src="<?php echo base_url('img/footer.png') ?>" style="position: fixed; bottom: 30px; left: 50px;">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" style="position: fixed; bottom: 29px; left: 48px;"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" style="position: absolute; top: -1px; left: 218px;">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;">
    <h1>Contact</h1>
    <p>Your message has been submitted successfully.</p>
    <a href="<?php echo base_url() ?>">Back to home</a>
</section>
<?php $this->load->view('footer')?>