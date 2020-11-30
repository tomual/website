<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('about') ?>"><img src="<?php echo base_url('img/header about.png') ?>"></a>
    <img src="<?php echo base_url('img/footer.png') ?>" style="position: fixed; bottom: 30px; left: 50px;">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" style="position: fixed; bottom: 29px; left: 48px;"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" style="position: absolute; top: -1px; left: 218px;">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;"> 
    <h1>About</h1>
    <p>About the website and webmaster</p>

    <h2>Site</h2>
    <table border="1">
        <tbody>
            <tr>
                <th>Framework</th>
                <td>CodeIgniter 3</td>
            </tr>
            <tr>
                <th>Host</th>
                <td>Reclaim Hosting</td>
            </tr>
            <tr>
                <th>Language</th>
                <td>PHP 7 / HTML5 / CSS3 / jQuery</td>
            </tr>
<!--             <tr>
                <th>Sitemap</th>
                <td><a href="">Go to sitemap &raquo;</a></td>
            </tr> -->
        </tbody>
    </table>

    <h2>Profile</h2>
    <table border="1">
        <tbody>
            <tr>
                <th>Age</th>
                <td>27</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>Australia</td>
            </tr>
            <tr>
                <th>Occupation</th>
                <td>Software Developer</td>
            </tr>
        </tbody>
    </table>

    <a target="_blank" href="https://steamcommunity.com/id/tomual/">[Steam]</a>
    <a target="_blank" href="https://github.com/tomual">[Github]</a>

    <br>

    <h2>Other</h2>
    <table border="1">
        <tbody>
            <tr>
                <th>PC</th>
                <td>AMD Ryzen 7 / 8GB / GTX 1050 Ti</td>
            </tr>
            <tr>
                <th>Peripheral</th>
                <td>Vortex Race 3 / Logitech G300 / QuietComfort 25 / Wacom Bamboo Fun</td>
            </tr>
            <tr>
                <th>Software</th>
                <td>Sublime Text 3 / Paint Tool SAI / Firefox / XAMPP / Adobe Fireworks</td>
            </tr>
        </tbody>
    </table>

    <h2>Timeline</h2>
    <p>Summary of some development related things throughout the years.<br>
    <a href="<?php echo base_url('timeline/#2018') ?>" class="button">View Timeline</a></p>

    <h2>Bookmarks</h2>
    <p>A collection of sites that I frequent.<br>
    <a href="<?php echo base_url('about/bookmarks') ?>" class="button">View Bookmarks</a></p>

    <h2>Contact</h2>
    <p>To send feedback, suggestions or feedback, please use this <a href="<?php echo base_url('samband') ?>">contact form</a>.</p>

</section>



<?php $this->load->view('footer') ?>