<?php $this->load->view('header') ?>

<a href="<?php echo base_url('stuff') ?>" class="back-link">&laquo; Back to Stuff</a>

<h1>Setting Up a Website Walkthrough</h1>

<p>To set up your own website, you will need your pages, a web host, and a domain registration. This guide will walk you through those steps.</p>

<h2>Prepare the webpages</h2>

<p>You will need to have your web pages prepared in a html format. If you do not already have a site prepared this section will go over creating simple pages.</p>

<p>First we will create a folder in the Desktop and create a new file called index.html in it. This file name is to indicate that it is a home page and the server will look for this when users visit your domain.</p>

<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/index-html-file.png" class="border">

<p>Open index.html with a text editor - Sublime Text is suggested, which is free to use. Start by putting in the basic tags a web page wants - head and body tags inside a html tag.</p>

<textarea class="code" rows="9"><!DOCTYPE html>
<html>
<head>
    <title>John Smith's Portfolio</title>
</head>
<body>

</body>
</html></textarea>

<p>The head tag is used for website information and does not display content on the website. This is where things like page title, and descriptions for Google go. The body tag is for the content.</p>

<p>We'll make the website a portfolio. It will use Bootstrap as the CSS styling base for the site. <a href="http://v4-alpha.getbootstrap.com/">Bootstrap</a> is a collection of basic style rules used by many websites.</p>

<p>The content HTML will be put in the body tag. The content is from one of Bootstrap's templates.</p>

<textarea class="code" rows="9">
    <div class="navbar-collapse collapse inverse" id="navbar-header">
      <div class="container-fluid">
        <div class="about">
          <h4>About</h4>
          <p class="text-muted">Add some information about the album below, author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="social">
          <h4>Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#">Follow on Twitter</a></li>
            <li><a href="#">Like on Facebook</a></li>
            <li><a href="#">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="navbar navbar-static-top navbar-dark bg-inverse">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header">
          &#9776;
        </button>
        <a href="#" class="navbar-brand">Album</a>
      </div>
    </div>

    <section class="jumbotron text-xs-center">
      <div class="container">
        <h1 class="jumbotron-heading">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below - its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary">Main call to action</a>
          <a href="#" class="btn btn-secondary">Secondary action</a>
        </p>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">

        <div class="row">
          <div class="card">
            <img src="http://placehold.it/356x280" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card">
            <img src="http://placehold.it/356x280" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card">
            <img src="http://placehold.it/356x280" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>

          <div class="card">
            <img src="http://placehold.it/356x280" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card">
            <img src="http://placehold.it/356x280" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card">
            <img src="http://placehold.it/356x280" alt="Card image cap">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>

        </div>

      </div>
    </div>

    <footer class="text-muted">
      <div class="container">
        <p class="pull-xs-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>
</textarea>

<p>View index.html using a web browser. It will be an unstyled page.</p>

<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/page-without-bootstrap.png" class="border">

<p>To link the Bootstrap style to the site we will link it in the head tag of the site.</p>

<textarea class="code" rows="9"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous"></textarea>

<p>To link the Bootstrap javascript files for menu animations, add these near the bottom of the page, before the body tag closes.</p>

<textarea class="code" rows="9"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script></textarea>

<p>View index.html again. It is now styled using Bootstrap. The template comes with additional styling which we will add.</p>

<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/page-with-bootstrap.png" class="border">

<p>Create a new file called style.css in the same location as index.html. Copy and paste the contents of <a href="http://v4-alpha.getbootstrap.com/examples/album/album.css">Bootstrap's additional styling</a> for the template and save.</p>

<p>Now put the link in to the head tag of index.html to tell it to use our new style.css file.</p>

<textarea class="code" rows="1"><link rel="stylesheet" type="text/css" href="style.css"></textarea>

<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/page-with-custom-bootstrap-styling.png" class="border">

<p>The page is now ready to be uploaded to a server.</p>

<h2>Getting a Web Server</h2>

<p>The pages now need a location to be put in, a place where they can be visited by the public. A web host will keep the files online all the time on their web servers, and can have domains link to them.</p>

<p>Web hosting can be free and paid. Paid hosting usually has the benefit of better service, speed, and no advertisements.</p>

<p>A host I suggest is <a href="https://reclaimhosting.com/">Reclaim Hosting</a>. They do hosting at $25 a year ($2 a month), and has a great support team.</p>

<p>For free hosting, you could look up your own or try <a href="https://x10hosting.com/">x10Hosting</a>. You will want hosting which has 'cPanel', which is a useful tool in website management.</p>

<p>After registration, find the cPanel. Find <b>File Manager</b> - this is where we can upload our files. Here are two screenshots of what a cPanel may look like on your host.</p>

<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/x10hostingi-cpanel-file-manager.png" class="border">
<br><br>
<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/reclaim-hosting-cpanel-file-manager.png" class="border">

<p>The page will show an interactable list of files which are currentky on your slice of the internet. There will already be files there, try not to touch those. We need to find the right place to put our files - it is usually called public_html. Enter that directory.</p>

<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/public-html-folder.png" class="border">

<p>This is where our website files will go. Open the upload dialog and select the index.html and style.css files.</p>

<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/upload-to-public-html.png" class="border">

<p>Go to your hosted site's URL. You should see your website.</p>

<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/x10hosting-page-example.png" class="border">

<p>We are now ready to get a domain for the website.</p>

<h2>Getting Your Domain</h2>

<p>A domain is something which can be purchased from domain registrars. The price can vary from $9 - $32 a year depending on the TLD (.com, .net, .io etc.). I suggest <a href="">Namecheap</a> as a registrar. If you registered with a paid web host, they may offer a free domain, and you may skip this section.</p>

<p>Before getting started, find out the nameserver from your web host. This is an address used to link your domain to the web host. It is entered into the domain settings after purchasing the domain. Your host will have a couple of nameserver addresses, and they often look like the following:</p>

<textarea class="code" rows="2">ns1.your-host.com
ns2.your-host.com</textarea>

<p>Below are examples of where to find nameservers - they are often found under domain settings.</p>

<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/x10hosting-nameservers.png" class="border">
<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/reclaim-hosting-nameservers.png" class="border">

<p>Once you have the nameserver addresses, register the desired domain. Under the domain management settings, find the nameservers section. Select an option which allows you to enter your own nameservers, e.g. "Custom DNS". Enter the nameservers.</p>

<img src="<?php echo base_url() ?>img/extra/setting-up-a-website/namecheap-setting-nameserver.png" class="border">

<p>It will take some time for the domain to point to the web host. Once it is done, you should see your website when you visit your domain.</p>


<a href="<?php echo base_url('stuff') ?>" class="back-link">&laquo; Back to Stuff</a>

<?php $this->load->view('footer') ?>