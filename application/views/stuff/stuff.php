<?php $this->load->view('header') ?>

<section class="stuff">
    <h1>Stuff</h1>
    <p>Miscellanious things that may or may not be useful to you.</p>

    <div class="item">
        <h2>Web Materials</h2>
        <ul class="material">
            <li><a href="<?php echo base_url('stuff/backgrounds') ?>">Backgrounds</a></li>
            <li><a href="<?php echo base_url('stuff/bullets') ?>">Bullets</a></li>
            <li><a href="<?php echo base_url('stuff/emoticons') ?>">Emoticons</a></li>
        </ul>
    </div>

    <div class="item">
        <h2>Linux Notes</h2>
        <ul class="linux">
            <li><a href="<?php echo base_url('stuff/unsupported-value-type-error') ?>">"Unsupported value type" error</a></li>
            <li><a href="<?php echo base_url('stuff/acpi-error-spam') ?>">"ACPI Error" error</a></li>
            <li><a href="<?php echo base_url('stuff/zero-disk-space-remaining-linux') ?>">0 disk space remaining</a></li>
        </ul>
    </div>

    <div class="item">
        <h2>Walkthroughs</h2>
        <ul class="walkthrough">
            <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter') ?>">PHP Blog with CodeIgniter</a></li>
            <li><a href="<?php echo base_url('stuff/setting-up-a-website-walkthrough') ?>">Setting up a Website</a></li>
        </ul>
    </div>

    <div class="item">
        <h2>HTML Blog Layouts</h2>
        <p>Some classic HTML layouts</p>
        <a href="<?php echo base_url('stuff/blog-layouts') ?>" class="button">View Layouts &raquo;</a>
    </div>

    <div class="toybox">
        <h2>Toybox</h2>
        <img src=""><img src=""><img src=""><br>
        <ul>
            <li><a href="">Cats</a></li>
            <li><a href="">Dogs</a></li>
            <li><a href="">Boys</a></li>
            <li><a href="">Girls</a></li>
        </ul>
        <ul>
            <li><a href="">Breakfast</a></li>
            <li><a href="">Lunch</a></li>
            <li><a href="">Dinner</a></li>
            <li><a href="">Dessert</a></li>
        </ul>
        <ul>
            <li><a href="">Office</a></li>
            <li><a href="">Lounge</a></li>
            <li><a href="">Kitchen</a></li>
            <li><a href="">Bathroom</a></li>
        </ul>
        <ul>
            <li><a href="">Programming</a></li>
            <li><a href="">Plants</a></li>
            <li><a href="">Holiday</a></li>
            <li><a href="">Season</a></li>
        </ul>
    </div>

</section>  

<?php $this->load->view('footer') ?>