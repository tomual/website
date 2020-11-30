<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('notes') ?>"><img src="<?php echo base_url('img/header notes.png') ?>"></a>
    <img src="<?php echo base_url('img/footer.png') ?>" style="position: fixed; bottom: 30px; left: 50px;">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" style="position: fixed; bottom: 29px; left: 48px;"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" style="position: absolute; top: -1px; left: 218px;">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;"> 


<h1>PHP Blog Walkthrough with CodeIgniter</h1>

<div style="clear: both">
    <div class="float-left">
        <b><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/') ?>">&laquo; Back to Chapter 1</a></b>
    </div>
    <div class="float-right">
        <b><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/3/') ?>">To Chapter 3 &raquo;</a></b>
    </div>
</div>
<br>
<br>
<h2>Table of Contents</h2>
<ul>

<li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/') ?>">Chapter 1</a></li>
<li>Chapter 2
    <ul>
        <li><a href="#part-5-template" aria-hidden="true" >Part 5: Template</a></li>
        <li><a href="#part-6-edit-posts" aria-hidden="true" >Part 6: Edit Posts</a></li>
        <li><a href="#part-7-pagination" aria-hidden="true" >Part 7: Pagination</a></li>
        <li><a href="#part-8-home-page" aria-hidden="true" >Part 8: Home page</a></li>
        <li><a href="#part-8-comments" aria-hidden="true" >Part 8: Comments</a></li>
    </ul>
</li>
<li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/3/') ?>">Chapter 3</a></li>
</ul>
<h2><a href="#part-5-template" aria-hidden="true" class="anchor" id="part-5-template"></a>Part 5: Template</h2>
<p>The site now has basic funcitonality but is missing any form of styling.</p>
<p>In this part we will give each page a shared header and a footer, and add styling.</p>
<h3><a href="#basic-html-tags" aria-hidden="true" class="anchor" id="basic-html-tags"></a>Basic HTML tags</h3>
<p>Open <code>application/views/posts/all.php</code>. This was our list of all posts.</p>
<p>Currently, it's missing a lot of HTML tags, and has no header of footer.</p>
<p>Let's start with giving it tags to make it a valid HTML document:</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;minimalist-blog&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;ul class="posts-list"&gt;
        &lt;?php foreach($posts as $post): ?&gt;
        &lt;li&gt;
            &lt;div class="post-title"&gt;&lt;?php echo anchor( base_url("posts/view/{$post-&gt;post_id}"), $post-&gt;title) ?&gt;&lt;/div&gt;
            &lt;div class="post-info"&gt;Posted &lt;?php echo date('j F Y \a\t H:ia', strtotime($post-&gt;publish_date)) ?&gt; by &lt;?php echo $post-&gt;author-&gt;first_name . ' ' . $post-&gt;author-&gt;last_name ?&gt;&lt;/div&gt;
        &lt;/li&gt;
        &lt;?php endforeach ?&gt;
    &lt;/ul&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<h3><a href="#stylesheets" aria-hidden="true" class="anchor" id="stylesheets"></a>Stylesheets</h3>
<p>Now inside the body tag, we'll wrap our content with some container tags.</p>
<pre><code>...
&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-md-12"&gt;
            &lt;ul class="posts-list"&gt;
                &lt;?php foreach($posts as $post): ?&gt;
                &lt;li&gt;
                    &lt;div class="post-title"&gt;&lt;?php echo anchor( base_url("posts/view/{$post-&gt;post_id}"), $post-&gt;title) ?&gt;&lt;/div&gt;
                    &lt;div class="post-info"&gt;Posted &lt;?php echo date('j F Y \a\t H:ia', strtotime($post-&gt;publish_date)) ?&gt; by &lt;?php echo $post-&gt;author-&gt;first_name . ' ' . $post-&gt;author-&gt;last_name ?&gt;&lt;/div&gt;
                &lt;/li&gt;
                &lt;?php endforeach ?&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
... 
</code></pre>
<p>Refreshing the <code>http://localhost/posts/all</code> page, you won't see a difference in appearance other than a new page title.</p>
<p>We need to link stylesheets to this document.</p>
<p>In your CodeIgniter root, create a folder called <code>css</code> to put our CSS sheets in - this should be next to your <code>application</code> and <code>system</code> folders.</p>
<p>The stylesheets I will use will be:</p>
<ol>
<li>(Bootstrap's Grid-only Stylesheet)[<a href="https://raw.githubusercontent.com/minimalist-collection/style-guide/master/css/bootstrap-grid.css">https://raw.githubusercontent.com/minimalist-collection/style-guide/master/css/bootstrap-grid.css</a>]</li>
<li>(minimalist-collection's Stylesheet)[<a href="https://raw.githubusercontent.com/minimalist-collection/style-guide/master/css/style.css">https://raw.githubusercontent.com/minimalist-collection/style-guide/master/css/style.css</a>]</li>
</ol>
<p>Save the above as <code>bootstrap-grid.css</code> and <code>style.css</code> inside the <code>css</code> folder you just created.</p>
<p>In the <code>&lt;head&gt;</code> tags of the <code>all.php</code> view file, link the two sheets:</p>
<pre><code>...
&lt;head&gt;
    &lt;title&gt;minimalist-blog&lt;/title&gt;
    &lt;link rel="stylesheet" type="text/css" href="&lt;?php echo base_url('css/bootstrap-grid.css') ?&gt;"&gt;
    &lt;link rel="stylesheet" type="text/css" href="&lt;?php echo base_url('css/style.css') ?&gt;"&gt;
&lt;/head&gt;
...
</code></pre>
<p>Refreshing the page, we'll see those <code>div</code> tags we wrapped our content around makes the content be more in the center now.</p>
<h3><a href="#standard-page-elements" aria-hidden="true" class="anchor" id="standard-page-elements"></a>Standard page elements</h3>
<p>Next up, inside this main container we'll give the page a header with a site title, page title and a footer.</p>
<pre><code>...
&lt;div class="container"&gt;
    &lt;div class="header row"&gt;
        &lt;div class="col-md-12"&gt;
            &lt;div class="site-title"&gt;minimalist-blog&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="main row"&gt;
        &lt;div class="col-md-12"&gt;
            &lt;h1&gt;Posts&lt;/h1&gt;
            &lt;ul class="posts-list"&gt;
                &lt;?php foreach($posts as $post): ?&gt;
                &lt;li&gt;
                    &lt;div class="post-title"&gt;&lt;?php echo anchor( base_url("posts/view/{$post-&gt;post_id}"), $post-&gt;title) ?&gt;&lt;/div&gt;
                    &lt;div class="post-info"&gt;Posted &lt;?php echo date('j F Y \a\t H:ia', strtotime($post-&gt;publish_date)) ?&gt; by &lt;?php echo $post-&gt;author-&gt;first_name . ' ' . $post-&gt;author-&gt;last_name ?&gt;&lt;/div&gt;
                &lt;/li&gt;
                &lt;?php endforeach ?&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="footer row"&gt;
        &lt;div class="col-md-12"&gt;
            Copyright © &lt;?php echo date("Y") ?&gt; minimalist-blog
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
...
</code></pre>
<p>The page looks much more like a web page now - now we need to make the same change to all other views.</p>
<h3><a href="#loading-headers-and-footers-as-views" aria-hidden="true" class="anchor" id="loading-headers-and-footers-as-views"></a>Loading headers and footers as views</h3>
<p>To prevent having to copy and paste all these tags on all the views, we'll put one copy of the top and bottom tags in two files - <code>header.php</code> and <code>footer.php</code>.</p>
<p>In a new file <code>application/views/header.php</code>, enter the tags above the content:</p>
<pre><code>...
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;minimalist-blog&lt;/title&gt;
    &lt;link rel="stylesheet" type="text/css" href="&lt;?php echo base_url('css/bootstrap-grid.css') ?&gt;"&gt;
    &lt;link rel="stylesheet" type="text/css" href="&lt;?php echo base_url('css/style.css') ?&gt;"&gt;
    &lt;link rel="stylesheet" type="text/css" href="&lt;?php echo base_url('css/blog.css') ?&gt;"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="container"&gt;
        &lt;div class="header row"&gt;
            &lt;div class="col-md-12"&gt;
                &lt;div class="site-title"&gt;minimalist-blog&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="main row"&gt;
            &lt;div class="col-md-12"&gt;
...
</code></pre>
<p>In another new files <code>application/view/footer.php</code>, enter the tags below the content:</p>
<pre><code>...

            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="footer row"&gt;
            &lt;div class="col-md-12"&gt;
                Copyright © &lt;?php echo date("Y") ?&gt; minimalist-blog
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
...
</code></pre>
<p>We will now call these two views from the <code>all.php</code> file:</p>
<pre><code>&lt;?php $this-&gt;load-&gt;view('header.php') ?&gt;

&lt;ul class="posts-list"&gt;
    &lt;?php foreach($posts as $post): ?&gt;
    &lt;li&gt;
        &lt;div class="post-title"&gt;&lt;?php echo anchor( base_url("posts/view/{$post-&gt;post_id}"), $post-&gt;title) ?&gt;&lt;/div&gt;
        &lt;div class="post-info"&gt;Posted &lt;?php echo date('j F Y \a\t H:ia', strtotime($post-&gt;publish_date)) ?&gt; by &lt;?php echo $post-&gt;author-&gt;first_name . ' ' . $post-&gt;author-&gt;last_name ?&gt;&lt;/div&gt;
    &lt;/li&gt;
    &lt;?php endforeach ?&gt;
&lt;/ul&gt;

&lt;?php $this-&gt;load-&gt;view('footer.php') ?&gt;
</code></pre>
<p>Refresh the page on your browser to see that the styling is still there.</p>
<p>Apply the same change with placing the header and footer views on the first and last lines of the other views:</p>
<ul>
<li><code>application/views/posts/create.php</code></li>
<li><code>application/views/posts/create.php</code></li>
</ul>
<p>We can also apply similar changes to Ion Auth's login form (and others) too.</p>
<p>Here is what <code>application/views/auth/login.php</code> could be changed to:</p>
<pre><code>&lt;?php $this-&gt;load-&gt;view('header.php') ?&gt;

&lt;h1&gt;Login&lt;/h1&gt;

&lt;div id="infoMessage"&gt;&lt;?php echo $message ?&gt;&lt;/div&gt;

&lt;?php echo form_open("auth/login") ?&gt;
&lt;?php echo lang('login_identity_label', 'identity') ?&gt;
&lt;?php echo form_input($identity) ?&gt;
&lt;?php echo lang('login_password_label', 'password') ?&gt;
&lt;?php echo form_input($password) ?&gt;
&lt;?php echo lang('login_remember_label', 'remember') ?&gt;
&lt;?php echo form_checkbox('remember', '1', FALSE, 'id="remember"') ?&gt;
&lt;br&gt;
&lt;?php echo form_submit('submit', lang('login_submit_btn')) ?&gt;
&lt;?php echo form_close() ?&gt;

&lt;a href="forgot_password"&gt;&lt;?php echo lang('login_forgot_password') ?&gt;&lt;/a&gt;

&lt;?php $this-&gt;load-&gt;view('footer.php') ?&gt;
</code></pre>
<p>Our pages are now valid HTML documents with easy headers and footers!</p>
<h2><a href="#part-6-edit-posts" aria-hidden="true" class="anchor" id="part-6-edit-posts"></a>Part 6: Edit Posts</h2>
<p>Nice job for making it this far!</p>
<p>In this part we'll make a page that will allow us to edit existing blog posts.</p>
<h3><a href="#creating-the-controller-function-1" aria-hidden="true" class="anchor" id="creating-the-controller-function-1"></a>Creating the controller function</h3>
<p>We'll make the edit page be on the URL <code>http://localhost/posts/edit/1</code>.</p>
<p>Create a function <code>edit</code> in the <code>Posts.php</code> controller, and have it take in the post ID. Also make it so that only logged-in people can access it:</p>
<pre><code>...
public function edit($post_id)
{
    if (!$this-&gt;ion_auth-&gt;logged_in())
    {
        redirect('auth/login');
    }
}
...
</code></pre>
<p>To edit a post, we'll need to fetch it first. The <code>view</code> function from the same controller does just that - so let's copy that over:</p>
<pre><code>...
public function edit($post_id)
{
    if (!$this-&gt;ion_auth-&gt;logged_in())
    {
        redirect('auth/login');
    }
    $post = $this-&gt;posts_model-&gt;get_post($post_id);
    $this-&gt;load-&gt;view('posts/edit', array('post' =&gt; $post));
}
...
</code></pre>
<p>For the page, we don't want to display <code>posts/view</code> - we want to use a new view that we'll make next called <code>edit</code>.</p>
<p>Edit the line that loads the view so that it uses a view <code>posts/edit</code> instead:</p>
<pre><code>...
$this-&gt;load-&gt;view('posts/edit', array('post' =&gt; $post));
...
</code></pre>
<h3><a href="#creating-the-view-2" aria-hidden="true" class="anchor" id="creating-the-view-2"></a>Creating the view</h3>
<p>The form is going to be very similar to our form create page, so we'll start by copying that view.</p>
<p>Create a new file <code>edit.php</code> inside <code>application/views/posts</code>, and copy the content over from <code>create.php</code> then edit the page title:</p>
<pre><code>&lt;?php $this-&gt;load-&gt;view('header.php') ?&gt;

&lt;h1&gt;Edit Post&lt;/h1&gt;
&lt;?php echo form_open() ?&gt;
    &lt;label&gt;Post Title&lt;/label&gt;&lt;br&gt;
    &lt;input type="text" class="form-control" name="title" value="&lt;?php echo set_value('title') ?&gt;"&gt;
    &lt;?php echo form_error('title'); ?&gt;

    &lt;label&gt;Post Content&lt;/label&gt;&lt;br&gt;
    &lt;textarea  name="content"&gt;&lt;?php echo set_value('content') ?&gt;&lt;/textarea&gt;
    &lt;?php echo form_error('content'); ?&gt;

    &lt;input type="submit" class="btn btn-primary" value="Post"&gt;
    &lt;a href="&lt;?php echo base_url("posts/view/{$post-&gt;post_id}") ?&gt;"&gt;
        &lt;button type="button" class="btn btn-default"&gt;Cancel&lt;/button&gt;
    &lt;/a&gt;
&lt;?php echo form_close() ?&gt;

&lt;?php $this-&gt;load-&gt;view('footer.php') ?&gt;
</code></pre>
<p>Now if we go to <code>http://localhost/posts/edit/1</code>, we'll see an empty posting form.</p>
<p>The controller supposedly has sent us the post data, so we'll double check that by doing a <code>var_dump</code> above the page title in the view:</p>
<pre><code>...
&lt;?php var_dump($post) ?&gt;
...
</code></pre>
<p>Refreshing the page, you should see your post dumped out.</p>
<p>Currently our form is blank because the value is determined by <code>set_value</code> - which gets the suubmitted form data. It's blank because we haven't submitted the form yet.</p>
<p>When the form hasn't been submitted yet, we want to load up the existing post's data.</p>
<p>We'll do that with a ternary statement which will look like this:</p>
<pre><code>echo set_value('title') ? set_value('title') : $post-&gt;title
</code></pre>
<p>This means "If <code>set_value</code> has something, then echo <code>set_value</code>'s data, otherwise load the data from the <code>$post</code>".</p>
<p>Go ahead and make those changes to the form view:</p>
<pre><code>&lt;?php $this-&gt;load-&gt;view('header.php') ?&gt;
&lt;h1&gt;Edit Post&lt;/h1&gt;
&lt;?php echo form_open() ?&gt;
    &lt;label&gt;Post Title&lt;/label&gt;&lt;br&gt;
    &lt;input type="text" class="form-control" name="title" value="&lt;?php echo set_value('title') ? set_value('title') : $post-&gt;title ?&gt;"&gt;
    &lt;?php echo form_error('title'); ?&gt;

    &lt;label&gt;Post Content&lt;/label&gt;&lt;br&gt;
    &lt;textarea  name="content"&gt;&lt;?php echo set_value('content') ? set_value('content') : $post-&gt;content ?&gt;&lt;/textarea&gt;
    &lt;?php echo form_error('content'); ?&gt;

    &lt;input type="submit" class="btn btn-primary" value="Post"&gt;
    &lt;a href="&lt;?php echo base_url("posts/view/{$post-&gt;post_id}") ?&gt;"&gt;
        &lt;button type="button" class="btn btn-default"&gt;Cancel&lt;/button&gt;
    &lt;/a&gt;
&lt;?php echo form_close() ?&gt;

&lt;?php $this-&gt;load-&gt;view('footer.php') ?&gt;
</code></pre>
<p>Now if you refresh the page, you'll see the post data prepopulated. Neat.</p>
<h3><a href="#processing-the-edit-form-data" aria-hidden="true" class="anchor" id="processing-the-edit-form-data"></a>Processing the edit form data</h3>
<p>Now that we have the form ready, we'll need to modify our <code>edit</code> function in the controller to take in the form and update the post.</p>
<p>It's going to look very similar to the <code>create</code> function code. Put in the form processing just above where the view is loaded:</p>
<pre><code>...
if($this-&gt;input-&gt;method() == 'post')
{
    $this-&gt;form_validation-&gt;set_rules('title', 'Title', 'required');
    $this-&gt;form_validation-&gt;set_rules('content', 'Content', 'required');

    if($this-&gt;form_validation-&gt;run() !== FALSE)
    {
        $data = array(
            'title'     =&gt; $this-&gt;input-&gt;post('title'),
            'content'   =&gt; $this-&gt;input-&gt;post('content')
        );

        // Update the post
        $this-&gt;posts_model-&gt;update($post_id, $data);
        redirect("posts/view/$post_id");
    }
}
...
</code></pre>
<p>It calls <code>$this-&gt;posts_model-&gt;update($post_id, $data)</code>, but that function doesn't exist yet. We'll create that now.</p>
<h3><a href="#updating-the-database" aria-hidden="true" class="anchor" id="updating-the-database"></a>Updating the database</h3>
<p>The model would now have to update the existing post in the database.</p>
<p>Create a new function <code>update</code> in our <code>Posts_model.php</code>. It should take in the <code>$post_id</code> and form <code>$data</code>:</p>
<pre><code>...
public function update($post_id, $data)
{

}
...
</code></pre>
<p>Now build a query which updates the row that matches the <code>$post_id</code>:</p>
<pre><code>...
public function update($post_id, $data)
{
    $this-&gt;db-&gt;where('post_id', $post_id);
    $this-&gt;db-&gt;update('posts', $data);
}
...
</code></pre>
<p>Now if you go to <code>http://localhost/posts/edit/1</code>, make a change you will see the updated post.</p>
<p>The edit function is complete!</p>
<h3><a href="#wsywig-editor" aria-hidden="true" class="anchor" id="wsywig-editor"></a>WSYWIG Editor</h3>
<p>When creating and editing our posts, we want to be able to do text formatting (bold, lists ...) without having to type in all the HTML code.</p>
<p>That's what WSYWIG editors are for - We'll use a Javascript one called TinyMCE.</p>
<p>Download TinyMCE by clicking the 'Download' button under 'Download TinyMCE Community' (here)[<a href="https://www.tinymce.com/download/">https://www.tinymce.com/download/</a>].</p>
<p>Open up the ZIP, go into the <code>tinymce</code> folder and extract the <code>js</code> folder in there to your CodeIgniter root.</p>
<p>We're set to load the JS - go the <code>footer.php</code> view and link the JS file just before the closing <code>&lt;/body</code> tag:</p>
<pre><code>...
&lt;script src="&lt;?php echo base_url('js/tinymce/tinymce.min.js') ?&gt;"&gt;&lt;/script&gt;
...
</code></pre>
<p>Before we start up TinyMCE, we need to indicate on our forms somehow which fields we want to have WSYWIG active.</p>
<p>We'll use a class name - go into <code>create.php</code> and edit the <code>textarea</code> tag to give it a class:</p>
<pre><code>...
&lt;textarea  name="content" class="tinymce"&gt;&lt;?php echo set_value('content') ?&gt;&lt;/textarea&gt;
...
</code></pre>
<p>Now we can call TinyMCE and tell it to make all elements with the class <code>tinymce</code> a WSYWIG editor.</p>
<p>Below where we loaded TinyMCE's scrpit in <code>footer.php</code>, put in the JS code to start it up:</p>
<pre><code>...
&lt;script&gt;
  tinymce.init({
    selector: '.tinymce'
  });
&lt;/script&gt;
...
</code></pre>
<p>Refresh the post creation form and you should see the WSYWIG editor.</p>
<p>By default there's a lot of features enabled - we'll configure it a bit so it looks simpler.</p>
<p>Edit that same script again:</p>
<pre><code>...
&lt;script&gt;
    tinymce.init({
        selector: '.tinymce',
        height : '450',
        plugins : 'link image lists',
        toolbar: 'undo redo | styleselect | bold italic underline strikethrough | link image | bullist numlist',
        menubar: false,
        statusbar: false,
        style_formats: [
            {title: 'Header', format: 'h2'},
            {title: 'Subheading', format: 'h3'},
            {title: 'Minor Heading', format: 'h4'}
        ],
        content_css : "&lt;?php echo base_url('css/style.css') ?&gt;"
    });
&lt;/script&gt;
...
</code></pre>
<p>Refresh the page to see the toolbar changes, and if you're happy with it, add the <code>tinymce</code> class to <code>edit.php</code>'s form too.</p>
<p>Our WSYWIG editor is complete!</p>
<h3><a href="#error-styling" aria-hidden="true" class="anchor" id="error-styling"></a>Error Styling</h3>
<p>At the moment, if you go to the post creation form and submit an empty post, it will give you some errors - in a very basic appearance.</p>
<p>In this section we will make the error messages red, with an additional notification that appears at the top to make clear any failures.</p>
<p>To make the error messages red we'll need to wrap all the errors with a certain class. There is a configuration for this in CodeIgniter.</p>
<p>Create a new file <code>form_validation.php</code> inside <code>application/config</code>. Place this in the file and save:</p>
<pre><code>...
&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['error_prefix'] = '&lt;div class="form-error"&gt;';
$config['error_suffix'] = '&lt;/div&gt;';
...
</code></pre>
<p>Now if you try to submit an empty form, the error messages will be in red.</p>
<p>We'll want the borders of the text fields to be in red too - again, we will wrap the inputs in a class.</p>
<p>Edit <code>create.php</code> so that each input is inside a div that will have the class <code>has-error</code> if there is an error for that field:</p>
<pre><code>&lt;?php $this-&gt;load-&gt;view('header.php') ?&gt;

&lt;h1&gt;Create Post&lt;/h1&gt;

&lt;?php echo form_open() ?&gt;

    &lt;div class="&lt;?php if(form_error('title')) echo 'has-error' ?&gt;"&gt;
        &lt;label&gt;Post Title&lt;/label&gt;&lt;br&gt;
        &lt;input type="text" class="form-control" name="title" value="&lt;?php echo set_value('title') ?&gt;"&gt;
        &lt;?php echo form_error('title'); ?&gt;
    &lt;/div&gt;

    &lt;div class="&lt;?php if(form_error('content')) echo 'has-error' ?&gt;"&gt;
        &lt;label&gt;Post Content&lt;/label&gt;&lt;br&gt;
        &lt;textarea  name="content" class="tinymce"&gt;&lt;?php echo set_value('content') ?&gt;&lt;/textarea&gt;
        &lt;?php echo form_error('content'); ?&gt;
    &lt;/div&gt;

    &lt;input type="submit" class="btn btn-primary" value="Post"&gt;
    &lt;a href="&lt;?php echo base_url("posts/all") ?&gt;"&gt;
        &lt;button type="button" class="btn btn-default"&gt;Cancel&lt;/button&gt;
    &lt;/a&gt;
&lt;?php echo form_close() ?&gt;

&lt;?php $this-&gt;load-&gt;view('footer.php') ?&gt;
</code></pre>
<p>We also snuck in a cancel button for the form which links back to the posts listing page.</p>
<p>Try creating an empty post again, you will see that the text borders are now also red. Great!</p>
<p>Next is the notification. We will do this through CodeIgniter's flashdata, which allows you to send temporary messages to the next page.</p>
<p>Edit the <code>create</code> function in <code>Posts.php</code> to set the flashdata if the form validation fails:</p>
<pre><code>...
if($this-&gt;form_validation-&gt;run() !== FALSE)
{
    // Create the post
    $this-&gt;posts_model-&gt;create($data);
}
else
{
    $this-&gt;session-&gt;set_flashdata('error', 'There are errors in the post.');
}
...
</code></pre>
<p>Now go to the view <code>create.php</code> and echo out the flash data below the page heading:</p>
<pre><code>...
&lt;?php if($this-&gt;session-&gt;flashdata('error') &amp;&amp; $this-&gt;input-&gt;method() == 'post'): ?&gt;
    &lt;div class="alert alert-error" role="alert"&gt;
        &lt;?php echo $this-&gt;session-&gt;flashdata('error') ?&gt;
    &lt;/div&gt;
&lt;?php endif ?&gt;
...
</code></pre>
<p>Now if you create an empty post you will see a nice red rectangle at the top with the general error.</p>
<p>We'll add in a link on the post view so we can get to editing posts easily.</p>
<p>Place this above where the footer is loaded in <code>view.php</code></p>
<pre><code>...
&lt;?php if($this-&gt;ion_auth-&gt;logged_in()): ?&gt;
    &lt;a href="&lt;?php echo base_url("posts/edit/{$post-&gt;post_id}") ?&gt;"&gt;
        &lt;button type="button" class="btn btn-default"&gt;Edit&lt;/button&gt;
    &lt;/a&gt;
&lt;?php endif ?&gt;
...
</code></pre>
<p>After doing the same modifications to the edit post function, the error styling is complete!</p>
<h2><a href="#part-7-pagination" aria-hidden="true" class="anchor" id="part-7-pagination"></a>Part 7: Pagination</h2>
<p>Currently, our post listing page lists all the posts - which means when the blog has 100 posts, that page is going to be very long!</p>
<p>We'll need to set a limit on how many posts are visible per page, and put pagination links on the bottom.</p>
<p>CodeIgniter does have a (pagination function)[<a href="https://www.codeigniter.com/userguide3/libraries/pagination.html">https://www.codeigniter.com/userguide3/libraries/pagination.html</a>], but it is a little clunky and not suitable for situations where there are many pages.</p>
<p>We'll be using our own.</p>
<h3><a href="#dummy-data" aria-hidden="true" class="anchor" id="dummy-data"></a>Dummy Data</h3>
<p>To see if our pagination link is working, let's insert 100 posts into our <code>posts</code> table in the database.</p>
<p>Copy the SQL from (here)[] and run it using your database manager software.</p>
<p>It should have inserted 100 records into the <code>posts</code> table.</p>
<p>Confirm it did by going to <code>http://localhost/posts/all</code> - you should see all the posts.</p>
<h3><a href="#settings" aria-hidden="true" class="anchor" id="settings"></a>Settings</h3>
<p>First we will set the limit of number of posts per page.</p>
<p>Open <code>application/config/constants.php</code>. These are constant variables that can be accessed from any of our models, controllers and views.
Place a new constant <code>PER_PAGE</code> to the bottom of the file and save:</p>
<pre><code>...
define('PER_PAGE', 10);
</code></pre>
<h3><a href="#editing-our-controllers" aria-hidden="true" class="anchor" id="editing-our-controllers"></a>Editing our controllers</h3>
<p>We will need a function to process the results so that it only returns the <code>PER_PAGE</code> quantity of posts.</p>
<p>Because we might want to access this pagination function outside of the posts pages, we'll put it somewhere more accessible - as a helper function.</p>
<p>To create this new helper, make a new file <code>pagination_helper.php</code> inside <code>application/helpers</code>, and put the functon in there:</p>
<pre><code>&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('paginate'))
{
    function paginate(&amp;$results)
    {
        $CI =&amp; get_instance();
        $info = array('total' =&gt; count($results), 'limit' =&gt; PER_PAGE);
        $page = $CI-&gt;input-&gt;get('page');
        $offset = ($page - 1) * PER_PAGE;
        $length = PER_PAGE;
        $pages = ceil(count($results) / $length);
        if($page)
        {
            $results = array_slice($results, $offset, $length);
        }
        $results = array_slice($results, 0, $length);

        return $info;
    }
}
</code></pre>
<p>This takes in a set of results, and slices it up to the appropriate quantity. It also returns information like how many pages the posts page should have.</p>
<p>Now we need to apply this to the <code>all</code> function:</p>
<pre><code>...
public function all()
{
    $this-&gt;load-&gt;helper('pagination');
    $posts = $this-&gt;posts_model-&gt;get_posts();
    $pagination = paginate($posts);
    $this-&gt;load-&gt;view('posts/all', array('posts' =&gt; $posts, 'pagination' =&gt; $pagination));
}
...
</code></pre>
<p>We pass through the <code>$posts</code> for the function to slice, and store the pagination information in <code>$pagination</code>. Remember that helper functions must also be loaded in first.</p>
<p>We also pass <code>$pagination</code> into the view, since they'll need that information to print the page numbers.</p>
<h3><a href="#editing-the-view" aria-hidden="true" class="anchor" id="editing-the-view"></a>Editing the view</h3>
<p>Now the pagination printing can have a lot of tedious logic behind it. Consider these:</p>
<p>If we have a small number of pages, we want to display ...
<code>&lt; 1 2 3 &gt;</code></p>
<p>If we have a lot of pages, we want to display ...
<code>&lt; 1 2 3 ... 10 &gt;</code></p>
<p>But if we're in the middle of those pages, we want to display ...
<code>&lt; 1 .. 4 5 6 ... 10 &gt;</code></p>
<p>You can imagine that's a lot of <code>if</code>s and <code>else</code>es - so we won't go through that here, instead we'll conveniently use an existing one.</p>
<p>Create a new view <code>pagination.php</code> inside <code>application/views</code>, and paste the view code (here)[] into it.</p>
<p>Now we will edit this pagination view into our post listing.</p>
<p>Edit <code>all.php</code> inside <code>application/views/posts</code> and load the pagination view above the footer:</p>
<pre><code>...
&lt;?php $this-&gt;load-&gt;view('pagination') ?&gt;
...
</code></pre>
<p>Now if you go to <code>http://localhost/posts/all</code>, the page won't be as long and there will be pagination links at the bottom!</p>
<h2><a href="#part-8-home-page" aria-hidden="true" class="anchor" id="part-8-home-page"></a>Part 8: Home page</h2>
<p>We have all the posts pages, but what about our home page, <code>http://localhost/</code>? It's still showing the CodeIgniter welcome message!</p>
<p>In this part we will create a home page that shows the recent posts, shows the previews of each post, and add a side bar to our site.</p>
<h3><a href="#creating-the-view-3" aria-hidden="true" class="anchor" id="creating-the-view-3"></a>Creating the view</h3>
<p>We said we wanted the home page to show a list of our posts - <code>all.php</code> currently does that, so we'll start by duplicating that view.</p>
<p>Create a new file <code>home.php</code> inside <code>application/views</code>, and copy in the contents of <code>application/views/posts/all.php</code>.</p>
<p>Remove the page title and new post button, add in a line for content and a line for linking to the posting:</p>
<pre><code>&lt;?php $this-&gt;load-&gt;view('header.php') ?&gt;

&lt;ul class="posts-list-home"&gt;
    &lt;?php foreach($posts as $post): ?&gt;
    &lt;li&gt;
        &lt;div class="post-title"&gt;&lt;?php echo anchor( base_url("posts/view/{$post-&gt;post_id}"), $post-&gt;title) ?&gt;&lt;/div&gt;
        &lt;div class="post-info"&gt;Posted &lt;?php echo date('j F Y \a\t H:ia', strtotime($post-&gt;publish_date)) ?&gt; by &lt;?php echo $post-&gt;author-&gt;first_name . ' ' . $post-&gt;author-&gt;last_name ?&gt;&lt;/div&gt;
        &lt;div class="post-content"&gt;&lt;?php echo $post-&gt;content ?&gt;&lt;/div&gt;
        &lt;?php echo anchor( base_url("posts/view/{$post-&gt;post_id}"), 'Read More') ?&gt;
    &lt;/li&gt;
    &lt;?php endforeach ?&gt;
&lt;/ul&gt;

&lt;?php $this-&gt;load-&gt;view('pagination') ?&gt;

&lt;?php $this-&gt;load-&gt;view('footer.php') ?&gt;
</code></pre>
<h3><a href="#editing-the-controller" aria-hidden="true" class="anchor" id="editing-the-controller"></a>Editing the controller</h3>
<p>The home controller is over at <code>Welcome.php</code> inside <code>application/controllers</code>.</p>
<p>Edit the controller so that it loads in the <code>posts_model</code> and passes a list of posts and pagination information to our new <code>home.php</code> view:</p>
<pre><code>&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this-&gt;load-&gt;model('posts_model');
    }

    public function index()
    {
        $this-&gt;load-&gt;helper('pagination');
        $posts = $this-&gt;posts_model-&gt;get_posts();
        $pagination = paginate($posts);
        $this-&gt;load-&gt;view('home', array('posts' =&gt; $posts, 'pagination' =&gt; $pagination));
    }
}
</code></pre>
<p>Now when we go to <code>http://localhost/</code>, we'll see a list of posts.</p>
<h3><a href="#blog-title" aria-hidden="true" class="anchor" id="blog-title"></a>Blog Title</h3>
<p>In the home page, we want the blog name to be the main header. We'll do a check for the page location and make the blog name <code>h1</code> if it's the home page.</p>
<p>Edit <code>header.php</code> in <code>application/views</code>:</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;minimalist-blog&lt;/title&gt;
    &lt;link rel="stylesheet" type="text/css" href="&lt;?php echo base_url('css/bootstrap-grid.css') ?&gt;"&gt;
    &lt;link rel="stylesheet" type="text/css" href="&lt;?php echo base_url('css/style.css') ?&gt;"&gt;
    &lt;link rel="stylesheet" type="text/css" href="&lt;?php echo base_url('css/blog.css') ?&gt;"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="container"&gt;
        &lt;div class="header row"&gt;
            &lt;div class="col-md-12"&gt;
                &lt;?php if(!$this-&gt;uri-&gt;segment(1)): ?&gt;
                    &lt;h1 class="site-title"&gt;&lt;a href="&lt;?php echo base_url() ?&gt;"&gt;minimalist-blog&lt;/a&gt;&lt;/h1&gt;
                &lt;?php else: ?&gt;
                    &lt;div class="site-title"&gt;&lt;a href="&lt;?php echo base_url() ?&gt;"&gt;minimalist-blog&lt;/a&gt;&lt;/div&gt;
                &lt;?php endif ?&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="main row"&gt;
            &lt;div class="col-md-12"&gt;
</code></pre>
<p>The blog titles are now also links to the home page.</p>
<h3><a href="#content-preview" aria-hidden="true" class="anchor" id="content-preview"></a>Content Preview</h3>
<p>Currently, we're showing the entire post for each post in the home page, which isn't ideal since it can make the page very long.</p>
<p>The listing should be changed so that it only shows the first 500 characters of the post.</p>
<p>There are two parts to this:</p>
<ul>
<li>Truncating the post content, and</li>
<li>Making sure the truncated post content is valid HTML</li>
</ul>
<p>If we don't do the second point, it's possible the string will truncate as <code>... &lt;a href="google.co</code> - which may cause the browser to try to wrap all the rest of the page inside this broken link tag.</p>
<p>For the first point, we will make another helper.</p>
<p>Create a file <code>post_helper</code> inside <code>application/helpers</code>, and put the content preview function in there:</p>
<pre><code>&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('preview'))
{
    function preview($content, $limit)
    {
        $CI =&amp; get_instance();

        if(strlen($content) &lt; $limit)
        {
            return $content;
        }

        $last_word_pos = strrpos(substr($content, 0, $limit), ' ');

        $truncated_content = substr($content, 0, $last_word_pos);

        $preview = close_tags($truncated_content);

        return $preview . ' ...';
    }
}
</code></pre>
<p>This function will cut the content close to 500 characters, and pass it to <code>close_tags</code> for it to validate the HTML.</p>
<p><code>close_tags</code> will be in our second helper, <code>html_helper</code> - but because this helper already exists within CodeIgniter, we will be extending it.</p>
<p>To extend to an existing CodeIgniter helper, simply make the file the same way but with <code>MY_</code> prepended to the file name.</p>
<p>Create a file <code>MY_html_helper.php</code> inside <code>application/helpers</code>, and place the <code>close_tags</code> function:</p>
<pre><code>&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('close_tags'))
{
    function close_tags($html)
    {
        preg_match_all('#&lt;(img|br|hr|input)*[^&gt;]*$#iU', $html, $result);
        if(!empty($result[1]))
        {
            $html .= "\"&gt;";
        }
        preg_match_all('#&lt;(?!meta|img|br|hr|input\b)\b([a-z]+)(?: .*)?(?&lt;![/|/ ])&gt;#iU', $html, $result);
        $openedtags = $result[1];
        preg_match_all('#&lt;/([a-z]+)&gt;#iU', $html, $result);
        $closedtags = $result[1];
        $len_opened = count($openedtags);
        if (count($closedtags) == $len_opened) {
            return $html;
        }
        $openedtags = array_reverse($openedtags);
        for ($i=0; $i &lt; $len_opened; $i++) {
            if (!in_array($openedtags[$i], $closedtags)) {
                $html .= '&lt;/'.$openedtags[$i].'&gt;';
            } else {
                unset($closedtags[array_search($openedtags[$i], $closedtags)]);
            }
        }
        return $html;
    }
}
</code></pre>
<p>Don't worry too much about what this function does, it uses a lot of regex to try and find open tags and attempts to close them.</p>
<p>Now we must call this from <code>home.php</code>. Before we can do that though, we need to load the helpers from the controller.</p>
<p>Edit <code>Welcome.php</code>'s <code>index</code> function and load the two helpers at the top of the function:</p>
<pre><code>...
    $this-&gt;load-&gt;helper('html');
    $this-&gt;load-&gt;helper('post');
...
</code></pre>
<p>Now inside he <code>home.php</code> view, replace where we echo out the <code>$post-&gt;content</code> with a call to the <code>preview</code> function:</p>
<pre><code>...
&lt;div class="post-content"&gt;&lt;?php echo preview($post-&gt;content, 500) ?&gt;&lt;/div&gt;
...
</code></pre>
<p>Refresh the home page to see the post previews!</p>

<div class="center"><b><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/3/') ?>">To Chapter 3! &raquo;</a></b></div>

<a href="<?php echo base_url('material') ?>" class="back-link">&laquo; Back to Material</a>

<div class="table-of-contents">
    <h2>Table of Contents</h2>
    <ul>
    <li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/') ?>">Chapter 1 &#8599;</a></li>
    <li>Chapter 2
        <ul>
            <li><a href="#part-5-template" aria-hidden="true" >Part 5: Template</a></li>
            <li><a href="#part-6-edit-posts" aria-hidden="true" >Part 6: Edit Posts</a></li>
            <li><a href="#part-7-pagination" aria-hidden="true" >Part 7: Pagination</a></li>
            <li><a href="#part-8-home-page" aria-hidden="true" >Part 8: Home page</a></li>
        </ul>
    </li>
    <li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/3/') ?>">Chapter 3 &#8599;</a></li>
    <li><a href="#top">&#8593;&#8593;&#8593; Top</a></li>
    </ul>
</div>
</section>
<?php $this->load->view('footer') ?>