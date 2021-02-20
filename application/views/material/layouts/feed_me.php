<?php $this->load->view('header') ?>

<h1>Feed Me</h1>
<br />
<img src="<?php echo base_url('img/material/layout/feedme.png') ?>" class="border">
<p>
<br />
A one-column layout suitable for any website. Navigation at the top, customiseable title on the collar of the cat.
</p>
<p class="center">
<a href="<?php echo base_url('demo/material/layout/feed-me/demo.html') ?>">Preview</a>
</p>
<h2>HTML</h2>
<textarea class="code" rows="10" spellcheck="false">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;

&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
&lt;link href='http://fonts.googleapis.com/css?family=Yellowtail|Open+Sans:400italic' rel='stylesheet' type='text/css'&gt;
&lt;style type="text/css"&gt;
body, html{
  font-family: 'Open Sans', sans-serif;
  font-size: 12px;
  margin: 0;
  line-height: 20px;
  height: 100%;
  background-color: #8A9B0F;
  background-image: url(menubg.png);
  background-repeat: repeat-x;  
}
header {
  font-family: 'Yellowtail', cursive;
  font-size: 40px;
  color: #FFF;
  background-image: url(head.png);
  height: 515px;
  width: 890px;
}

section {
  background-image: url(bg.png);
  background-repeat: repeat-y;
  width: 890px;
  margin: auto;
  margin-top: 40px;
  padding-bottom: 50px;
}
nav ul {
  padding-left: 0;
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
  list-style-type: none;
  font-style: italic; 
}
nav li {  
  padding: 18px;
  padding-left: 30px;
  padding-right: 30px;
  display:inline;
  background-color:#7B8A0D;
}
nav a {
  color: #FFF;
  text-decoration: none;
}
nav li:hover {
  background-color:#8A9B0F;
}
article {
  font-weight: 400;
  padding-left: 90px;
  padding-right: 90px;
  background-image: url(bg.png);
}
h1 {
  font-weight: 700;
}
a {
  text-decoration: none;
  color: #666;
  border-bottom: 1px layout-thumbnail #999;
}
p a:hover {
  color: #999;
}
ol {
  list-style-type:upper-roman;
}
article.pagination {
  margin-top: 100px;
  text-align: center;
}
&lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;nav&gt;
&lt;ul&gt;
&lt;a href=""&gt;&lt;li&gt;Home&lt;/li&gt;&lt;/a&gt;
&lt;a href=""&gt;&lt;li&gt;Blog&lt;/li&gt;&lt;/a&gt;
&lt;a href=""&gt;&lt;li&gt;Archive&lt;/li&gt;&lt;/a&gt;
&lt;a href=""&gt;&lt;li&gt;About&lt;/li&gt;&lt;/a&gt;
&lt;/ul&gt;
&lt;/nav&gt;
&lt;section&gt;
&lt;header&gt;
&lt;span style="position: relative; top: 415px; left: 390px"&gt;
Feed Me
&lt;/span&gt;
&lt;/header&gt;
&lt;article&gt;
&lt;h1&gt;HTML Ipsum Presents&lt;/h1&gt;
         
&lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. &lt;em&gt;Aenean ultricies mi vitae est.&lt;/em&gt; Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, &lt;code&gt;commodo vitae&lt;/code&gt;, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. &lt;a href="#"&gt;Donec non enim&lt;/a&gt; in turpis pulvinar facilisis. Ut felis.&lt;/p&gt;
         
&lt;ol&gt;
   &lt;li&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit.&lt;/li&gt;
   &lt;li&gt;Aliquam tincidunt mauris eu risus.&lt;/li&gt;
&lt;/ol&gt;

&lt;blockquote&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.&lt;/p&gt;&lt;/blockquote&gt;

&lt;ul&gt;
   &lt;li&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit.&lt;/li&gt;
   &lt;li&gt;Aliquam tincidunt mauris eu risus.&lt;/li&gt;
&lt;/ul&gt;
&lt;/article&gt;
&lt;article&gt;
&lt;h1&gt;HTML Ipsum Presents&lt;/h1&gt;
         
&lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. &lt;em&gt;Aenean ultricies mi vitae est.&lt;/em&gt; Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, &lt;code&gt;commodo vitae&lt;/code&gt;, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. &lt;a href="#"&gt;Donec non enim&lt;/a&gt; in turpis pulvinar facilisis. Ut felis.&lt;/p&gt;

&lt;/article&gt;
&lt;article&gt;
&lt;h1&gt;HTML Ipsum Presents&lt;/h1&gt;
         
&lt;p&gt;Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. &lt;em&gt;Aenean ultricies mi vitae est.&lt;/em&gt; Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, &lt;code&gt;commodo vitae&lt;/code&gt;, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. &lt;a href="#"&gt;Donec non enim&lt;/a&gt; in turpis pulvinar facilisis. Ut felis.&lt;/p&gt;
         
&lt;ol&gt;
   &lt;li&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit.&lt;/li&gt;
   &lt;li&gt;Aliquam tincidunt mauris eu risus.&lt;/li&gt;
&lt;/ol&gt;

&lt;blockquote&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.&lt;/p&gt;&lt;/blockquote&gt;

&lt;ul&gt;
   &lt;li&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit.&lt;/li&gt;
   &lt;li&gt;Aliquam tincidunt mauris eu risus.&lt;/li&gt;
&lt;/ul&gt;
&lt;/article&gt;
&lt;article class="pagination"&gt;&lt;a href="" style="float: left"&gt;Next&lt;/a&gt;&lt;a href="" style="float: right"&gt;Previous&lt;/a&gt;&lt;/article&gt;
&lt;/section&gt;
&lt;/body&gt;
&lt;/html&gt;


    </textarea>

<p>Copy and paste the code above to your HTML file, or the template/theme edit text box.</p>

<h2>Images</h2>
<br />
<img src="<?php echo base_url('img/material/layout/feedme/head.png') ?>">
<br /><br />
<img src="<?php echo base_url('img/material/layout/feedme/bg.png') ?>">
<br /><br />
<img src="<?php echo base_url('img/material/layout/feedme/menubg.png') ?>">
<?php $this->load->view('footer') ?>

