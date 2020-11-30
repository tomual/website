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

            <li><a href="<?php echo base_url('material/toybox') ?>">Graphics</a></li>
            <li><a href="<?php echo base_url('material/backgrounds') ?>">Backgrounds</a></li>
            <li><a href="<?php echo base_url('material/bullets') ?>">Bullets</a></li>
            <li><a href="<?php echo base_url('material/emoticons') ?>">Emoticons</a></li>
            <li><a href="<?php echo base_url('material/blog-layouts') ?>">HTML Layouts</a></li>
        </ul>
    </nav>
    <img src="<?php echo base_url('img/footer.png') ?>" style="position: fixed; bottom: 30px; left: 50px;">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" style="position: fixed; bottom: 29px; left: 48px;"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" style="position: absolute; top: -1px; left: 218px;">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;"> 


<a href="<?php echo base_url('material/blog-layouts') ?>" class="back-link">&laquo; Back to Layouts</a>

<h1>Fluff</h1>
<br />
<img src="<?php echo base_url('img/material/layout/fluff.jpg') ?>" class="border">
<p>
<br />
A compact, cute, one-box layout. Suggested for one post per page.
</p>
<p class="center">
<a href="<?php echo base_url('demo/material/layout/fluff/demo.html') ?>">Preview</a>
</p>
<h2>HTML</h2>
<textarea class="code" rows="10" spellcheck="false">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
	&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
	&lt;head&gt;
	&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
	&lt;title&gt;fluff&lt;/title&gt;
	&lt;style type="text/css"&gt;
	body {
	  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	  background-image: url(bg.png);
	  margin-top: 30px;
	}
	section {
	  width: 400px;
	  margin: auto;
	  padding-top: 80px;
	  text-align: center;
	}
	article {
	  width: 360px;
	  font-size: 9px;
	  text-align:left;
	  color: #333;
	  line-height: 20px;
	  background-color: #FFF;
	  padding: 20px;
	  padding-top: 30px;
	  padding-bottom: 30px;
	  float: left;
	  border-radius: 5px;
	  border: solid 1px #888;
	}
	h1 {
	  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	  font-size: 9px;
	  text-transform: uppercase;
	  font-weight: normal;
	  margin: 0px;
	  padding: 0px;
	}
	h2 {
	  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	  font-size: 9px;
	  font-weight: normal;
	  color: #CCC;
	  margin: 0px;
	  padding: 0px;
	}
	header {
	  width: 100%
	  float: left;
	  font-size: 9px;
	  letter-spacing: 1px;
	  height: 60px;
	  margin-bottom: 10px;
	}
	nav {
	  position: relative;
	  left: -50px;
	}

	nav a{
	  text-decoration: none;
	  color: #333;
	}

	#polar {
	  position: relative;
	  top: -60px;
	  left: 80px;
	  width: 20%;
	}

	article a {
	  text-decoration: none;
	  color:#AAA;
	}
	&lt;/style&gt;
	&lt;/head&gt;

	&lt;body&gt;
	&lt;section&gt;
	&lt;header&gt;
	&lt;nav&gt;
	&lt;a href="indexc.html"&gt;info&lt;/a&gt; - &lt;a href="indexc.html"&gt;archive&lt;/a&gt; - &lt;a href="indexc.html"&gt;home&lt;/a&gt;
	&lt;/nav&gt;
	&lt;img src="polar.png" id="polar"/&gt;&lt;/header&gt;
	&lt;article&gt;
	&lt;h1&gt;Tranformation&lt;/h1&gt;&lt;h2&gt;12/03/12 23:00&lt;/h2&gt;
	&lt;p&gt;
	  OLD MANX SAILOR. I wonder whether those jolly lads bethink them of what they are dancing over. I'll dance over your grave, I will—that's the bitterest threat of your night-women, that beat head-winds round corners. O Christ! to think of the green navies and the green-skulled crews! Well, well; belike the whole world's a ball, as you scholars have it; and so 'tis right to make one ballroom of it. Dance on, lads, you're young; I was once.&lt;/p&gt;

	&lt;a href=""&gt;next-&lt;/a&gt; &lt;a style="float: right;" href=""&gt;-prev&lt;/a&gt;
	&lt;/article&gt;
	&lt;/section&gt;

	&lt;/body&gt;
	&lt;/html&gt;
</textarea>

<p>Copy and paste the code above to your HTML file, or the template/theme edit text box.</p>

<h2>Images</h2>
<br />
<img src="<?php echo base_url('img/material/layout/fluff/polar.png') ?>">
<br /><br />
<img src="<?php echo base_url('img/material/layout/fluff/bg.png') ?>">
<a href="<?php echo base_url('material/blog-layouts') ?>" class="back-link">&laquo; Back to Layouts</a>
<?php $this->load->view('footer') ?>
