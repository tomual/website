<?php $this->load->view('header') ?>
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
            <li><a href="<?php echo base_url('material') ?>"></a><a href="background">Backgrounds</a></li>
            <li><a href="bullet">Bullets</a></li>
            <li><a href="emoticon">Emoticons</a></li>
            <li><a href="sign">Sign</a></li>
        </ul>
    </nav>
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
        <li><a href="<?php echo base_url('material/toybox') ?>">Accent Graphics</a></li>
        <li><a href="<?php echo base_url('material/backgrounds') ?>">Backgrounds</a></li>
        <li><a href="<?php echo base_url('material/bullets') ?>">Bullets</a></li>
        <li><a href="<?php echo base_url('material/emoticons') ?>">Emoticons</a></li>
        <li><a href="<?php echo base_url('material/blog-layouts') ?>">Classic HTML Layouts</a></li>
    </ul>
    <br>

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
    <br>
</section>
<?php $this->load->view('footer') ?>
