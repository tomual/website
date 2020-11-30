<?php $this->load->view('header') ?>

<a href="<?php echo base_url('stuff/blog-layouts') ?>" class="back-link">&laquo; Back to Layouts</a>

<h1>Gone Home</h1>
<br />
<img src="<?php echo base_url('img/material/layout/gone.png') ?>" class="border">
<p>
<br />
A simple white layout witha customiseable banner image. Navigation on right bar. Suggested to be used as a blog layout.
</p>
<p class="center">
<a href="<?php echo base_url('demo/material/layout/gone-home/demo.html') ?>">Preview</a>
</p>
<h2>HTML</h2>
<textarea class="code" rows="10" spellcheck="false">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
	&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
	&lt;head&gt;
	&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
	&lt;title&gt;Untitled Document&lt;/title&gt;
	&lt;style type="text/css"&gt;
	body, html {
	  height: 100%;
	  width: 100%;
	  margin: 0;
	  font-family: Geneva, sans-serif;
	  font-size: 11px;
	  line-height: 20px;
	}
	a {
	  text-decoration: none;
	  border-bottom-width: 1px;
	  border-bottom-style: layout-thumbnail;
	  border-bottom-color: #CCC;
	  color: #666;
	}
	a:hover {
	  color: #999;
	}
	section {
	  height: 100%;
	  width: 800px;
	  margin: auto;
	}
	article {
	  padding: 20px;
	  width: 56%;
	  margin-left: 110px;
	}
	header {
	  background-image: url(http://colourlovers.com.s3.amazonaws.com/img/patterns/3481/3481412.png?1363789348);
	  height: 200px;
	  width: 100%;
	  border: 1px solid #000;
	}
	hr {
	  border:0;
	  background-color: #999;
	  margin-top: 20px;
	  margin-bottom: 20px;
	  height: 1px;
	}
	nav {
	  float: right;
	  width: 25%;
	  margin-left: 20px;
	}
	nav ul {
	  list-style-type:none;
	  margin: 0;
	  padding: 0;
	}
	h1 {
	  font-size: 14px;
	  letter-spacing: 1px;
	  font-family: Helvetica, sans-serif;
	}
	.date {
	  text-align: right;
	  position: relative;
	  left: -475px;
	  top: 13px;
	  float: right;
	  color: #999;
	}
	article.pagination {
	  text-align: center;
	}
	&lt;/style&gt;
	&lt;/head&gt;

	&lt;body&gt;
	&lt;section&gt;
	&lt;header&gt;&lt;/header&gt;
	&lt;nav&gt;
	&lt;br /&gt;
	&lt;h1&gt;HTML Ipsum Presents&lt;/h1&gt;
	&lt;p&gt;Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.&lt;/p&gt;
	&lt;hr /&gt;
	&lt;ul&gt;
	   &lt;li&gt;&lt;a href=""&gt;Info&lt;/a&gt;&lt;/li&gt;
	   &lt;li&gt;&lt;a href=""&gt;Gallery&lt;/a&gt; &lt;/li&gt;
	   &lt;li&gt;&lt;a href=""&gt;Other Blog&lt;/a&gt;&lt;/li&gt;
	   &lt;li&gt;&lt;a href=""&gt;Archive&lt;/a&gt;&lt;/li&gt;
	   &lt;li&gt;&lt;a href=""&gt;Facebook&lt;/a&gt;&lt;/li&gt;
	   &lt;li&gt;&lt;a href=""&gt;Instagram&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
	&lt;hr /&gt;

	&lt;h1&gt;Archive&lt;/h1&gt;

	&lt;ul&gt;
	   &lt;li&gt;&lt;a href=""&gt;January 2014&lt;/a&gt; (12)&lt;/li&gt;
	   &lt;li&gt;&lt;a href=""&gt;December 2013&lt;/a&gt; (5)&lt;/li&gt;
	   &lt;li&gt;&lt;a href=""&gt;November 2013&lt;/a&gt; (8)&lt;/li&gt;
	&lt;/ul&gt;
	  
	  &lt;/nav&gt;
	&lt;article&gt;
	&lt;span class="date"&gt;24th December 2014&lt;br /&gt;12:05&lt;/span&gt;
	&lt;h1&gt;HTML Ipsum Presents&lt;/h1&gt;
	&lt;p&gt;&lt;strong&gt;Pellentesque habitant morbi tristique&lt;/strong&gt; senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. &lt;em&gt;Aenean ultricies mi vitae est.&lt;/em&gt; Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, &lt;code&gt;commodo vitae&lt;/code&gt;, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. &lt;a href="#"&gt;Donec non enim&lt;/a&gt; in turpis pulvinar facilisis. Ut felis.&lt;/p&gt;

	&lt;/article&gt;
	&lt;article&gt;

	&lt;h1&gt;HTML Ipsum Presents&lt;/h1&gt;
	&lt;p&gt;&lt;strong&gt;Pellentesque habitant morbi tristique&lt;/strong&gt; senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. &lt;em&gt;Aenean ultricies mi vitae est.&lt;/em&gt; Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, &lt;code&gt;commodo vitae&lt;/code&gt;, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. &lt;a href="#"&gt;Donec non enim&lt;/a&gt; in turpis pulvinar facilisis. Ut felis.&lt;/p&gt;

	&lt;/article&gt;
	&lt;article&gt;

	&lt;h1&gt;HTML Ipsum Presents&lt;/h1&gt;
	&lt;p&gt;&lt;strong&gt;Pellentesque habitant morbi tristique&lt;/strong&gt; senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. &lt;em&gt;Aenean ultricies mi vitae est.&lt;/em&gt; Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, &lt;code&gt;commodo vitae&lt;/code&gt;, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. &lt;a href="#"&gt;Donec non enim&lt;/a&gt; in turpis pulvinar facilisis. Ut felis.&lt;/p&gt;

	&lt;/article&gt;
	&lt;article class="pagination"&gt;&lt;a href="" style="float: left"&gt;Next&lt;/a&gt;&lt;a href="" style="float: right"&gt;Previous&lt;/a&gt;&lt;/article&gt;
	&lt;/section&gt;
	&lt;/body&gt;
	&lt;/html&gt;
</textarea>

<p>Copy and paste the code above to your HTML file, or the template/theme edit text box.</p>
<a href="<?php echo base_url('stuff/blog-layouts') ?>" class="back-link">&laquo; Back to Layouts</a>
<?php $this->load->view('footer') ?>
