<?php $this->load->view('header') ?>

<section class="stuff">
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