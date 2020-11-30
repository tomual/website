\<?php $this->load->view('header') ?>

<section class="software">
    <h1>Software</h1>
    <p>Some web-based software that I made for fun. I love PHP so most of them are written in that language. All are open source on my Github account.</p>

    <div class="item">
        <img src="<?php echo base_url('images/software/tintin.jpg') ?>"" data-mouseover="<?php echo base_url('images/software/tintin-2.jpg') ?>" class="preview">
        <h2>Tintin Ticketing</h2>
        <p>A typical ticketing system. Create tickets, update statuses, have custom statuses/categories. Built with CodeIgniter, CSS using SCSS.</p>
        <a href="https://github.com/tomual/tintin-ticketing/" target="_blank" class="button">View Github</a>
        <a href="https://github.com/tomual/tintin-ticketing/archive/master.zip" target="_blank" class="button">Download</a>
    </div>

    <div class="item">
        <img src="<?php echo base_url('images/software/phpblog.jpg') ?>"" data-mouseover="<?php echo base_url('images/software/phpblog-2.jpg') ?>" class="preview">
        <h2>PHP Blog</h2>
        <p>A blog with authentication, commenting, tags, custom pages, and searching. Made with PHP / CodeIgniter. Uses Hoaaard's UI Kit.</p>
        <a href="https://github.com/tomual/tintin-ticketing/" target="_blank" class="button">View Github</a>
        <a href="https://github.com/tomual/tintin-ticketing/archive/master.zip" target="_blank" class="button">Download</a>
    </div>

<!--     <div class="item">
        <img src="<?php echo base_url('images/software/phpblog.jpg') ?>"" data-mouseover="<?php echo base_url('images/software/phpblog-2.jpg') ?>" class="preview">
        <h2>Photo Portfolio</h2>
        <p>A photo portfolio website. Intended to be user-friendly for those who are not familiar with website building - the user only needs to drop images into the directory or edit .txt files. Written in PHP. </p>
        <i>Coming soon</i>
    </div>
 -->
    <div class="item">
        <img src="<?php echo base_url('images/software/hestia.jpg') ?>"" data-mouseover="<?php echo base_url('images/software/hestia-2.jpg') ?>" class="preview">
        <h2>Hestia</h2>
        <p>A passphrase-protected forum. Has authentication, a forum, profiles and groups. Written in Python on the Django framework.</p>
        <a href="https://github.com/tomual/tintin-ticketing/" target="_blank" class="button">View Github</a>
        <a href="https://github.com/tomual/tintin-ticketing/archive/master.zip" target="_blank" class="button">Download</a>
    </div>

    <div class="item">
        <img src="<?php echo base_url('images/software/cointheteam.jpg') ?>"" data-mouseover="<?php echo base_url('images/software/cointheteam-2.jpg') ?>" class="preview">
        <h2>coin-the-team</h2>
        <p>Another team website, but this one is more for the presentation of a small team. Has a blog and team member listing. It is a Laravel application.</p>
        <a href="https://github.com/tomual/coin-the-team" target="_blank" class="button">View Github</a>
        <a href="https://github.com/tomual/coin-the-team/archive/master.zip" target="_blank" class="button">Download</a>                
    </div>

    <div class="item">
        <img src="<?php echo base_url('images/software/cointheguild.jpg') ?>"" data-mouseover="<?php echo base_url('images/software/cointheguild-2.jpg') ?>" class="preview">
        <h2>coin-the-guild</h2>
        <p>A game team or guild website. Members can make news posts, forum posts, or schedule events. Written in PHP with CodeIgniter as the framework. Uses Zurb Foundation as the CSS framework.</p>
        <a href="https://github.com/tomual/coin-the-guild" target="_blank" class="button">View Github</a>
        <a href="https://github.com/tomual/coin-the-guild/archive/master.zip" target="_blank" class="button">Download</a>
    </div>

    <div class="item">
        <img src="<?php echo base_url('images/software/punchme.jpg') ?>"" data-mouseover="<?php echo base_url('images/software/punchme-2.jpg') ?>" class="preview">
        <h2>Punch Me</h2>
        <p>A punch card to motivate you to complete daily tasks. The user may add or remove tasks, and check them off every day. Stores data in a JSON format. Written in PHP.</p>
        <a href="https://github.com/tomual/punch-me" target="_blank" class="button">View Github</a>
        <a href="https://github.com/tomual/punch-me/archive/master.zip" target="_blank" class="button">Download</a>
    </div>
</section>

<?php $this->load->view('footer') ?>