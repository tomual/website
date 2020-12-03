<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('notes') ?>"><img src="<?php echo base_url('img/header notes.png') ?>"></a>
    <img src="<?php echo base_url('img/footer.png') ?>" class="back-to-bg">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" class="back-to-text"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" class="section-top">
    <img src="<?php echo base_url('img/pick.png') ?>" class="top-text"> 
    <h2>Walkthroughs</h2>
    <ul class="walkthrough">
        <li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter') ?>">PHP Blog with CodeIgniter</a></li>
        <li><a href="<?php echo base_url('material/setting-up-a-website-walkthrough') ?>">Setting up a Website</a></li>
    </ul>
    <br>

    <h2>Linux Notes</h2>
    <ul class="linux">
        <li><a href="<?php echo base_url('material/unsupported-value-type-error') ?>">"Unsupported value type" error</a></li>
        <li><a href="<?php echo base_url('material/acpi-error-spam') ?>">"ACPI Error" error</a></li>
        <li><a href="<?php echo base_url('material/zero-disk-space-remaining-linux') ?>">0 disk space remaining</a></li>
    </ul>
<?php $this->load->view('footer') ?>