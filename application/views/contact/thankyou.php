<?php $this->load->view('header')?>
<nav id="side">
    <a href="<?php echo base_url('about') ?>"><img src="<?php echo base_url('img/header about.png') ?>"></a>
    <img src="<?php echo base_url('img/footer.png') ?>" class="back-to-bg">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" class="back-to-text"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" class="section-top">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;">
    <h1>Contact</h1>
    <p>Your message has been submitted successfully.</p>
    <a href="<?php echo base_url() ?>">Back to home</a>
</section>
<?php $this->load->view('footer')?>