<?php $this->load->view('header') ?>


<section class="about">
    <h1>About</h1>
    <p>About the website and webmaster</p>

    <h2>Site</h2>
    <table border="1" cellspacing="0">
        <tbody>
            <tr>
                <th>Language</th>
                <td>PHP 7 / HTML5 / CSS3 / jQuery</td>
            </tr>
            <tr>
                <th>Framework</th>
                <td>CodeIgniter 3</td>
            </tr>
            <tr>
                <th>Host</th>
                <td>Reclaim Hosting</td>
            </tr>
<!--             <tr>
                <th>Sitemap</th>
                <td><a href="">Go to sitemap &raquo;</a></td>
            </tr> -->
        </tbody>
    </table>

    <h2>Profile</h2>
    <table border="1" cellspacing="0">
        <tbody>
            <tr>
                <th>Location</th>
                <td>Australia</td>
            </tr>
            <tr>
                <th>Occupation</th>
                <td>Software Developer</td>
            </tr>
            <tr>
                <th>Likes</th>
                <td>PHP, DS2, eating</td>
            </tr>
            <tr>
                <th>Dislikes</th>
                <td>JS libraries, fondant</td>
            </tr>
        </tbody>
    </table>

    <a target="_blank" href="https://steamcommunity.com/id/tomual/" style="margin-right: 20px;">
    <svg aria-labelledby="simpleicons-steam-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-steam-icon">Steam icon</title><path d="M11.979 0C5.678 0 .511 4.86.022 11.037l6.432 2.658c.545-.371 1.203-.59 1.912-.59.063 0 .125.004.188.006l2.861-4.142V8.91c0-2.495 2.028-4.524 4.524-4.524 2.494 0 4.524 2.031 4.524 4.527s-2.03 4.525-4.524 4.525h-.105l-4.076 2.911c0 .052.004.105.004.159 0 1.875-1.515 3.396-3.39 3.396-1.635 0-3.016-1.173-3.331-2.727L.436 15.27C1.862 20.307 6.486 24 11.979 24c6.627 0 11.999-5.373 11.999-12S18.605 0 11.979 0zM7.54 18.21l-1.473-.61c.262.543.714.999 1.314 1.25 1.297.539 2.793-.076 3.332-1.375.263-.63.264-1.319.005-1.949s-.75-1.121-1.377-1.383c-.624-.26-1.29-.249-1.878-.03l1.523.63c.956.4 1.409 1.5 1.009 2.455-.397.957-1.497 1.41-2.454 1.012H7.54zm11.415-9.303c0-1.662-1.353-3.015-3.015-3.015-1.665 0-3.015 1.353-3.015 3.015 0 1.665 1.35 3.015 3.015 3.015 1.663 0 3.015-1.35 3.015-3.015zm-5.273-.005c0-1.252 1.013-2.266 2.265-2.266 1.249 0 2.266 1.014 2.266 2.266 0 1.251-1.017 2.265-2.266 2.265-1.253 0-2.265-1.014-2.265-2.265z"></path></svg> Steam</a>
    
    <a target="_blank" href="https://github.com/tomual">
    <svg aria-labelledby="simpleicons-github-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-github-icon">GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg> Github</a>

    <br>
    <br>

    <h2>Other</h2>
    <table border="1" cellspacing="0">
        <tbody>
            <tr>
                <th>PC</th>
                <td>AMD Ryzen 7 / 8GB / GTX 1050 Ti</td>
            </tr>
            <tr>
                <th>Peripheral</th>
                <td>Vortex Race 3 / Logitech G300 / QuietComfort 25 / Wacom Intuos</td>
            </tr>
            <tr>
                <th>Software</th>
                <td>Sublime Text 3 / Paint Tool SAI / Firefox / XAMPP / Fireworks</td>
            </tr>
        </tbody>
    </table>

    <h2>Timeline</h2>
    <p>Timeline of projects or other life matters.</p>
    <p><a href="<?php echo base_url('timeline/#2018') ?>" class="button">View Timeline</a></p>
    <br>

    <h2>Bookmarks</h2>
    <p>A collection of sites that I frequent.</p>
    <p><a href="<?php echo base_url('about/bookmarks') ?>" class="button">View Bookmarks</a></p>
    <br>

    <h2>Contact</h2>
    <p>To send feedback, suggestions or feedback, please use this <a href="<?php echo base_url('samband') ?>">contact form</a>.</p>

</section>



<?php $this->load->view('footer') ?>