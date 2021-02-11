<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('software') ?>"><img src="<?php echo base_url('img/header software.png') ?>"></a>
    <nav id="guide">
    </nav>
    <img src="<?php echo base_url('img/footer.png') ?>" class="back-to-bg">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" class="back-to-text"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" class="section-top">
    <img src="<?php echo base_url('img/pick.png') ?>" class="top-text"> 
    <style>
        .thumbnail .tintin {
            background: url('<?php echo base_url('img/software/tintin.png') ?>');
            background-position: top;
            background-size: 160%;
        }
        .thumbnail .phpblog {
            background: url('<?php echo base_url('img/software/phpblog.png') ?>');
            background-position: inherit;
            background-size: 160%;
        }
        .thumbnail .hestia {
            background: url('<?php echo base_url('img/software/hestia.png') ?>');
            background-position: inherit;
            background-size: 160%;
        }
        .thumbnail .dps {
            background: url('<?php echo base_url('img/software/dps.png') ?>');
            background-position: top;
            background-size: 80%;
        }
        .thumbnail .hyperion {
            background: url('<?php echo base_url('img/software/hyperion.jpg') ?>');
            background-position: top;
            background-size: 130%;
        }
        .thumbnail .timeman {
            background: url('<?php echo base_url('img/software/timeman1.png') ?>');
            background-size: 230%;
            background-position: -163px -30px;
        }
        .thumbnail .koi {
            background: url('<?php echo base_url('img/software/koi.png') ?>');
            background-position: inherit;
            background-size: 106%;
        }
        .thumbnail .churro {
            background: url('<?php echo base_url('img/software/churro.png') ?>');
            background-position: top;
            background-size: 200%;
        }
        .thumbnail .wisa {
            background: url('<?php echo base_url('img/software/wisa.png') ?>');
            background-position: top;
            background-size: 140%;
        }
        .thumbnail .tintin2 {
            background: url('<?php echo base_url('img/software/tintin2.png') ?>');
            background-position: top-left;
            background-size: 140%;
        }
        .thumbnail .mushroom-game {
            background: url('<?php echo base_url('img/software/mushroom-game.png') ?>');
            background-position: top-left;
            background-size: 140%;
        }
    </style>
        <h1>Software</h1>
        <p>Some web-based software that I made for fun. I love PHP so most of them are written in that language. All are open source on my Github account.</p>

        <div class="item">
            <h2>Tintin Ticketing 2</h2>
            <a href="<?php echo base_url('img/software/tintin2.png') ?>" class="thumbnail">
                <div class="tintin2"></div>
            </a>
            A ticketing system with a focus on keyboard shortcuts. Built using CodeIgniter and Tabler CSS.<br>
            <a href="https://github.com/tomual/tintin2/" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/tintin2/archive/master.zip" target="_blank" class="button">Download</a>
        </div>

        <div class="item">
            <h2>WISA Job Board</h2>
            <a href="<?php echo base_url('img/software/wisa.png') ?>" class="thumbnail">
                <div class="wisa"></div>
            </a>
            Job posting and application site. Authenticated users may create postings and view applications. Writted using WISA stack.<br>
            <a href="https://github.com/tomual/wisa-job-board/" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/wisa-job-board/archive/master.zip" target="_blank" class="button">Download</a>
        </div>

        <div class="item">
            <h2>Churro Blog Service</h2>
            <a href="<?php echo base_url('img/software/churro.png') ?>" class="thumbnail">
                <div class="churro"></div>
            </a>
            A blog service where users may create an account for a blog with custom styling, archives, custom pages. Written using CodeIgniter.<br>
            <a href="https://github.com/tomual/mini-blog/" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/mini-blog/archive/master.zip" target="_blank" class="button">Download</a>
        </div>

        <div class="item">
            <h2>Mushroom Game</h2>
            <a href="<?php echo base_url('img/software/mushroom-game.png') ?>" class="thumbnail">
                <div class="mushroom-game"></div>
            </a>
            A small demo of a 2D game made with combat, maps, NPCs, monsters. Written using Godot engine (GDScript)<br>
            <a href="https://github.com/tomual/mushroom-game" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/mushroom-game/releases/tag/1" target="_blank" class="button">Download</a>
        </div>

        <div class="item">
            <h2>Hestia</h2>
            <a href="<?php echo base_url('img/software/hestia.png') ?>" class="thumbnail">
                <div class="hestia"></div>
            </a>
            A passphrase-protected forum. Has authentication, a forum, profiles and groups. Written in Python on the Django framework.<br>
            <a href="https://github.com/tomual/hestia/" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/hestia/archive/master.zip" target="_blank" class="button">Download</a>
        </div>

        <div class="item">
            <h2>Koi Authentication API</h2>
            <a href="<?php echo base_url('img/software/koi.png') ?>" class="thumbnail">
                <div class="koi"></div>
            </a>
            User signup/login API. Developer can set up multiple apps each with an API key to create/sign in users with. Written using Slim framework.<br>
            <a href="https://github.com/tomual/koi-auth/" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/koi-auth/archive/master.zip" target="_blank" class="button">Download</a>
        </div>

        <div class="item">
            <h2>time-man</h2>
            <a href="<?php echo base_url('img/software/timeman.png') ?>" class="thumbnail">
                <div class="timeman"></div>
            </a>
            Windows application where user may enter tasks on a schedule. Every day when the time is up, it will show a windows notification. Written in C#.<br>
            <a href="https://github.com/tomual/time-man/" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/time-man/archive/master.zip" target="_blank" class="button">Download</a>
        </div>

        <div class="item">
            <h2>Tintin Ticketing</h2>
            <a href="<?php echo base_url('img/software/tintin.png') ?>" class="thumbnail">
                <div class="tintin"></div>
            </a>
            A team ticketing system. Create tickets, update statuses, have custom statuses/categories. Built with CodeIgniter, CSS using SCSS.<br>
            <a href="https://github.com/tomual/tintin-ticketing/" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/tintin-ticketing/archive/master.zip" target="_blank" class="button">Download</a>
        </div>

        <div class="item">
            <h2>PHP Blog</h2>
            <a href="<?php echo base_url('img/software/phpblog.png') ?>" class="thumbnail">
                <div class="phpblog"></div>
            </a>
            A blog with authentication, commenting, tags, custom pages, and searching. Made with PHP / CodeIgniter. Uses Hoaaard's UI Kit.<br>
            <a href="https://github.com/tomual/php-blog/" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/php-blog/archive/master.zip" target="_blank" class="button">Download</a>
        </div>

        <div class="item">
            <h2>coin-the-team</h2>
            <a href="<?php echo base_url('img/software/dps.png') ?>" class="thumbnail">
                <div class="dps"></div>
            </a>
            Another team website, but this one is more for the presentation of a small team. Has a blog and team member listing. It is a Laravel application.<br>
            <a href="https://github.com/tomual/coin-the-team" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/coin-the-team/archive/master.zip" target="_blank" class="button">Download</a>
        </div>

        <div class="item">
            <h2>coin-the-guild</h2>
            <a href="<?php echo base_url('img/software/hyperion.jpg') ?>" class="thumbnail">
                <div class="hyperion"></div>
            </a>
            A game team or guild website. Members can make news posts, forum posts, or schedule events. Written in PHP with CodeIgniter as the framework. Uses Zurb Foundation as the CSS framework.<br>
            <a href="https://github.com/tomual/coin-the-guild" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/coin-the-guild/archive/master.zip" target="_blank" class="button">Download</a>
        </div>

        <div class="item-small">
            <h2>Peopledex</h2>
            Pokedex for your friends. Like a CRM software but for people you know. This is a WPF written in C#.<br>
            <a href="https://github.com/tomual/peopledex" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/peopledex/raw/master/peopledex.exe" target="_blank" class="button">Download</a>
        </div>

        <div class="item-small">
            <h2>ReactJS Promotional Site</h2>
            A landing page for a product or service using the common web design layout. Written using ReactJS.<br>
            <a href="https://github.com/tomual/mern-services-site" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/mern-services-site/archive/master.zip" target="_blank" class="button">Download</a>
        </div>
        <div class="item-small">
            <h2>Toyscreen</h2>
            A game screenshot posting service. Like a small blog where the user posts a screenshot with a text post. Has a comment board, archives, custom backgrounds.<br>
            <a href="https://github.com/tomual/toyscreen" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/toyscreen/archive/master.zip" target="_blank" class="button">Download</a>
        </div>
<!--        <div class="item-small">-->
<!--            <h2>Photo Portfolio</h2>-->
<!--            <p>A photo gallery designed to work just through directories. User is only required to create folders with image files inside. Written in PHP.</p>-->
<!--            <a href="https://github.com/tomual/punch-me" target="_blank" class="button">View Github</a>-->
<!--            <a href="https://github.com/tomual/punch-me/archive/master.zip" target="_blank" class="button">Download</a>-->
<!--        </div>-->
        <div class="item-small">
            <h2>Txty Diary</h2>
            Windows diary application. Has daily entries with auto-saving. Written using C#.<br>
            <a href="<?php echo base_url('downloads/software/txty.zip') ?>" target="_blank" class="button">Download</a>
        </div>
        <div class="item-small">
            <h2>Punch Me</h2>
            A punch card to log daily tasks. The user may add or remove tasks, and check them off every day. Stores data in a JSON format. Written in PHP.<br>
            <a href="https://github.com/tomual/punch-me" target="_blank" class="button">View Github</a>
            <a href="https://github.com/tomual/punch-me/archive/master.zip" target="_blank" class="button">Download</a>
        </div>
    </section>

<?php $this->load->view('footer') ?>