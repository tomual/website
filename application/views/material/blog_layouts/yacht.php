<?php $this->load->view('header') ?>

<a href="<?php echo base_url('material/blog-layouts') ?>" class="back-link">&laquo; Back to Layouts</a>

<h1>Yacht</h1>
<br />
<img src="<?php echo base_url('img/material/layout/yacht.png') ?>" class="border">
<p>
<br />
A one-column simple blog layout with an ocean background. Small navigation menu on the left.
</p>
<p class="center">
<a href="<?php echo base_url('demo/material/layout/yacht/demo.html') ?>">Preview</a>
</p>
<h2>HTML</h2>
<textarea class="code" rows="10" spellcheck="false">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
&lt;title&gt;Yacht&lt;/title&gt;
&lt;style type="text/css"&gt;
html { height: 100%; }
body {
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  font-size: 10px;
  margin:0;
  height: 100%;
  background-image: url(../material/background/1_tiled_ocean_pixel.png);
}
section {
  width: 370px;
  padding: 30px;
  margin-left: 25%;
  height: 100%;
  background: #FFF;
  box-shadow: 1px 1px 8px #1B343F;
}
article {
  color: #333;
  line-height: 20px;
  margin-bottom: 40px;
}
section article:first-of-type {
  margin-top: -50px;
}
h1 {
  font-size: 10px;
  text-transform: uppercase;
  font-weight: normal;
  margin: 0px;
  padding: 0px;
  text-align:center;
}
h2 {
  font-size: 10px;
  font-weight: normal;
  text-align:center;
  color: #CCC;
  margin: 0px;
  padding: 0px;
}
nav {
  color: #FFF;
  height: 20px;
  width: 100px;
  position: relative;
  left: 405px;
  top: -60px;
}

nav a{
  color: #FFF;
  text-decoration:none;
}
nav a:hover{
  text-decoration: underline;;
}
#boat {
  position: relative;
  top: 300px;
  left: 550px;
}
&lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;

&lt;section&gt;
&lt;img src="boat.png') ?>" id="boat" /&gt;
&lt;nav&gt;
&lt;a href="#"&gt;home&lt;/a&gt;&lt;br /&gt;
&lt;a href="#"&gt;archive&lt;/a&gt;&lt;br /&gt;
&lt;a href="#"&gt;info&lt;/a&gt;
&lt;/nav&gt;
&lt;article&gt;
&lt;h1&gt;Tranformation&lt;/h1&gt;&lt;h2&gt;12/03/12 23:00&lt;/h2&gt;
&lt;p&gt;&lt;br /&gt;
  OLD MANX SAILOR. I wonder whether those jolly lads bethink them of what they are dancing over. I'll dance over your grave, I will—that's the bitterest threat of your night-women, that beat head-winds round corners. O Christ! to think of the green navies and the green-skulled crews! Well, well; belike the whole world's a ball, as you scholars have it; and so 'tis right to make one ballroom of it. Dance on, lads, you're young; I was once.&lt;/p&gt;
&lt;/article&gt;
&lt;article&gt;
  &lt;h1&gt;Tranformation&lt;/h1&gt;
  &lt;h2&gt;12/03/12 23:00&lt;/h2&gt;
  &lt;p&gt;&lt;br /&gt;
  OLD MANX SAILOR. I wonder whether those jolly lads bethink them of what they are dancing over. I'll dance over your grave, I will—that's the bitterest threat of your night-women, that beat head-winds round corners. O Christ! to think of the green navies and the green-skulled crews! Well, well; belike the whole world's a ball, as you scholars have it; and so 'tis right to make one ballroom of it. Dance on, lads, you're young; I was once.&lt;/p&gt;
&lt;/article&gt;
&lt;article&gt;
  &lt;h1&gt;Tranformation&lt;/h1&gt;
  &lt;h2&gt;12/03/12 23:00&lt;/h2&gt;
  &lt;p&gt;&lt;br /&gt;
  OLD MANX SAILOR. I wonder whether those jolly lads bethink them of what they are dancing over. I'll dance over your grave, I will—that's the bitterest threat of your night-women, that beat head-winds round corners. O Christ! to think of the green navies and the green-skulled crews! Well, well; belike the whole world's a ball, as you scholars have it; and so 'tis right to make one ballroom of it. Dance on, lads, you're young; I was once.&lt;/p&gt;
&lt;/article&gt;
&lt;/section&gt;

&lt;/body&gt;
&lt;/html&gt;

&lt;/html&gt;

	</textarea>
<p>Copy and paste the code above to your HTML file, or the template/theme edit text box.</p>


<h2>Images</h2>

<br />
<img src="<?php echo base_url('img/material/layout/yacht/yacht.png') ?>">
<br /><br />
<img src="<?php echo base_url('img/material/layout/yacht/bg.png') ?>">
<a href="<?php echo base_url('material/blog-layouts') ?>" class="back-link">&laquo; Back to Layouts</a>
<?php $this->load->view('footer') ?>
