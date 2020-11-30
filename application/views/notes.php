<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('notes') ?>"><img src="<?php echo base_url('img/header notes.png') ?>"></a>
    <img src="<?php echo base_url('img/footer.png') ?>" style="position: fixed; bottom: 30px; left: 50px;">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" style="position: fixed; bottom: 29px; left: 48px;"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" style="position: absolute; top: -1px; left: 218px;">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;"> 
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