<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('notes') ?>"><img src="<?php echo base_url('img/header notes.png') ?>"></a>
    <img src="<?php echo base_url('img/footer.png') ?>" class="back-to-bg">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" class="back-to-text"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" class="section-top">
    <img src="<?php echo base_url('img/pick.png') ?>" class="top-text"> 


<h1>PHP Blog Walkthrough with CodeIgniter</h1>

<p>The following is a walkthrough on how to build a blog in CodeIgniter 3.1</p>
<p>It will have the following features:</p>
<ul>
<li>Posts - Create, modify, delete</li>
<li>Tags - Posts can have tags, view posts by tags</li>
<li>Comments - Readers can leave comments</li>
<li>Authentication - Blog owner has a user account</li>
<li>Draft - Post can be in draft status or published status</li>
</ul>

<h2>Table of Contents</h2>

<ul>
<li><a href="#installation" aria-hidden="true" >Installation</a></li>
<li><a href="#part-1-authentication-system" aria-hidden="true" >Part 1: Authentication 
<li><a href="#part-2-creating-posts" aria-hidden="true" >Part 2: Creating Posts</a></li>
<li><a href="#part-3-viewing-a-post" aria-hidden="true" >Part 3: Viewing a Post</a></li>
<li><a href="#part-4-list-of-posts" aria-hidden="true" >Part 4: List of Posts</a></li>
<li><a href="#part-5-template" aria-hidden="true" >Part 5: Template</a></li>
<li><a href="#part-6-edit-posts" aria-hidden="true" >Part 6: Edit Posts</a></li>
<li><a href="#part-7-pagination" aria-hidden="true" >Part 7: Pagination</a></li>
<li><a href="#part-8-home-page" aria-hidden="true" >Part 8: Home page</a></li>
<li><a href="#part-8-comments" aria-hidden="true" >Part 8: Comments</a></li>
<li><a href="#part-9-tags" aria-hidden="true" >Part 9: Tags</a></li>
<li><a href="#part-10-deleting-posts" aria-hidden="true" >Part 10: Deleting Posts</a></li>
<li><a href="#part-11-draft-posts" aria-hidden="true" >Part 11: Draft Posts</a></li>
<li><a href="#thats-it" aria-hidden="true" >That's it!</a></li>
</ul>

<h2><a href="#installation" aria-hidden="true" class="anchor" id="installation"></a>Installation</h2>
<h3><a href="#files" aria-hidden="true" class="anchor" id="files"></a>Files</h3>
<ol>
<li>Set up a LAMP environment on your operating system</li>
<li>Download <a href="https://codeigniter.com/">CodeIgniter</a></li>
<li>Open the downloaded ZIP and place in your LAMP <code>www</code> directory</li>
<li>Run your local webserver</li>
<li>Go to <a href="http://localhost/">localhost</a> on your browser - you should see <code>Welcome to CodeIgniter!</code></li>
</ol>
<h3><a href="#database" aria-hidden="true" class="anchor" id="database"></a>Database</h3>
<ol>
<li>Open up a database manager application</li>
<li>Create a new session
Log in with the MySQL credentials you set up with your LAMP installation
If you did not set one up, try:
Hostname: <code>localhost</code>
User: <code>root</code>
No Password</li>
<li>Create a database <code>minimalist-blog</code></li>
</ol>
<h3><a href="#codeigniter-configuration" aria-hidden="true" class="anchor" id="codeigniter-configuration"></a>CodeIgniter Configuration</h3>
<ol>
<li>
<p>Open where your CodeIgniter files are in file explorer</p>
</li>
<li>
<p>Basic configuration:</p>
<ul>
<li>Open <code>application/config/config.php</code></li>
<li>Look for the following existing options and replace the values:
<ul>
<li><code>$config['base_url'] = 'http://localhost/'</code> to set the base URL</li>
<li><code>$config['index_page'] = '';</code> to remove the word <code>index.php</code> from your URLs</li>
<li><code>$config['global_xss_filtering'] = TRUE;</code> to enable automatic XSS filtering</li>
<li><code>$config['csrf_protection'] = TRUE;</code> to enable CSRF tokens</li>
</ul>
</li>
</ul>
</li>
<li>
<p>Tell CodeIgniter about the database:</p>
<ul>
<li>Open <code>application/config/database.php</code>
<ul>
<li>Set <code>'hostname'</code>, <code>'username'</code> and <code>'password'</code> to match your database session</li>
<li>Set <code>'database'</code> to <code>'minimalist-blog'</code></li>
</ul>
</li>
</ul>
</li>
<li>
<p>Have some helpful functionality autoloaded:</p>
<ul>
<li>Open <code>application/config/autoload.php</code>
<ul>
<li>Set <code>$autoload['libraries']</code> to <code>array('ion_auth')</code></li>
<li>Set <code>$autoload['helper']</code> to <code>array('url', 'form')</code></li>
</ul>
</li>
</ul>
</li>
<li>
<p>Make the URLs look prettier by removing the <code>index.php</code>:</p>
<ul>
<li>Create a file called <code>.htaccess</code> in the root of your CodeIgniter folder (so that it is next to the <code>application</code> and <code>system</code> folders</li>
<li>Open it using a text editor and insert and save:
<pre><code>&lt;IfModule mod_rewrite.c&gt;
    RewriteEngine on

    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php/$1 [L]
&lt;/IfModule&gt;
</code></pre>
</li>
<li>Turn on Apache's <code>mod_rewrite</code> module (method will depend on operating system)</li>
<li>Going to <code>http://localhost/welcome</code> on your browser should show the welcome page</li>
</ul>
</li>
</ol>
<h2><a href="#part-1-authentication-system" aria-hidden="true" class="anchor" id="part-1-authentication-system"></a>Part 1: Authentication System</h2>
<p>We want to be able to be a user on this blog and have the ability to log in.</p>
<p>We will be using Ion Auth 2</p>
<ol>
<li>Download <a href="https://github.com/benedmunds/CodeIgniter-Ion-Auth/archive/2.zip">Ion Auth 2</a></li>
<li>Extract the files into the <code>application</code> folder of your CodeIgniter</li>
<li>Open your database application and have the <code>minimalist-blog</code> database selected</li>
<li>Open and run the Ion Auth SQL which is located at <code>application/sql/ion_auth.sql</code></li>
<li>Ion Auth has a default admin user - we should deactivate this user and create our own
<ul>
<li>Go to <code>http://localhost/auth/login</code> on your browser</li>
<li>Log in with Ion Auth's default admin user:
<ul>
<li>Username: <code>admin@admin.com</code></li>
<li>Password: <code>password</code></li>
</ul>
</li>
<li>Create a user:
<ul>
<li>Go to <code>http://localhost/minimalist-blog/auth</code></li>
<li>Click <code>Create New User</code></li>
<li>Fill in the fields and submit the form</li>
<li>Back on the user list page, click <code>Edit</code> for the user you just created</li>
<li>Select the <code>admin</code> group and save</li>
</ul>
</li>
<li>Log out by going to <code>http://localhost/minimalist-blog/auth/logout</code></li>
<li>Log in as the new user at <code>http://localhost/minimalist-blog/auth/login</code></li>
<li>Go to <code>http://localhost/minimalist-blog/auth</code></li>
<li>Click <code>Active</code> on the default admin user to deactivate the user</li>
</ul>
</li>
</ol>
<p>We now have our own user account, and the default admin account is disabled!</p>
<h2><a href="#part-2-creating-posts" aria-hidden="true" class="anchor" id="part-2-creating-posts"></a>Part 2: Creating Posts</h2>
<h3><a href="#creating-the-table" aria-hidden="true" class="anchor" id="creating-the-table"></a>Creating the table</h3>
<p>We will first need to create a <code>posts</code> table in our database.</p>
<p>To start with, a blog post will have the following:</p>
<ul>
<li>Post ID</li>
<li>Title</li>
<li>Author</li>
<li>Content</li>
<li>Publish Date</li>
</ul>
<p>Create this table by running the table SQL in your database manager:</p>
<pre><code>CREATE TABLE `posts` (
  `post_id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(50) NOT NULL,
  `author` INT(11) UNSIGNED NOT NULL,
  `content` TEXT NOT NULL,
  `publish_date` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `author` (`author`),
  CONSTRAINT `FK__users` FOREIGN KEY (`author`) REFERENCES `users` (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;
</code></pre>
<h3><a href="#creating-the-form" aria-hidden="true" class="anchor" id="creating-the-form"></a>Creating the form</h3>
<p>We will create form to create a new post with.</p>
<p>Create a folder called <code>posts</code> inside <code>application/views</code>.</p>
<p>Inside the <code>posts</code> folder, create a new file called <code>create.php</code>.</p>
<p>Save the following HTML form into <code>create.php</code>:</p>
<pre><code>&lt;?php echo form_open() ?&gt;
    &lt;label&gt;Post Title&lt;/label&gt;&lt;br&gt;
    &lt;input type="text" class="form-control" name="title"&gt;&lt;br&gt;

    &lt;label&gt;Post Content&lt;/label&gt;&lt;br&gt;
    &lt;textarea  name="content"&gt;&lt;/textarea&gt;

    &lt;input type="submit" class="btn btn-primary" value="Post"&gt;
&lt;?php echo form_close() ?&gt;
</code></pre>
<p>To be able to view this form, we will need to set up a controller function for it.</p>
<h3><a href="#creating-the-controller" aria-hidden="true" class="anchor" id="creating-the-controller"></a>Creating the controller</h3>
<p>We will display the form on a page at the URL <code>http://localhost/posts/create</code>.</p>
<p>To make this URL happen, we will make a new controller called <code>Posts</code> and a function called <code>create</code> inside that controller.</p>
<p>Create a file called <code>Posts.php</code> (not <code>posts.php</code>) inside <code>application/controllers</code> with the following base controller code:</p>
<pre><code>&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

}
</code></pre>
<p>Now we create a function called <code>create</code> which will display our form that we created.</p>
<p>Put the following inside the Post controller class:</p>
<pre><code>...

public function create() 
{
    $this-&gt;load-&gt;view('posts/create');
}

...
</code></pre>
<p>Now we can go to <code>http://localhost/posts/create</code> to see the form.</p>
<p>The form current does not do anything though - we want the view's form data to be passed into the controller.</p>
<h3><a href="#passing-the-form-data" aria-hidden="true" class="anchor" id="passing-the-form-data"></a>Passing the Form Data</h3>
<p>First we will edit the form view to pass the data to the correct place.</p>
<p>In <code>application/views/posts/create.php</code>, replace the first line,</p>
<pre><code>&lt;?php echo form_open() ?&gt;
</code></pre>
<p>with:</p>
<pre><code>&lt;?php echo form_open('posts/create') ?&gt;
</code></pre>
<p>This will tell the form to submit its data to our controller function.</p>
<p>Now in our controller function, we'll print out the data that we get to make sure the data is being received.</p>
<p>In our <code>Posts</code> controller, edit the <code>create</code> function:</p>
<pre><code>public function create() {

    if($this-&gt;input-&gt;method() == 'post')
    {
        var_dump($this-&gt;input-&gt;post());
    }

    $this-&gt;load-&gt;view('posts/create');
}
</code></pre>
<p>PHP's <code>var_dump</code> function will print out the contents of the posted form, only if the form has been posted.</p>
<p>Now if you go to <code>http://localhost/posts/create</code> and post the form, you may see something like this printed at the top of the page:</p>
<pre><code>array (size=2)
  'title' =&gt; string 'My First Post' (length=13)
  'content' =&gt; string 'Some content!' (length=13)
</code></pre>
<p>The form data has successfully been passed from the view to the controller!</p>
<h3><a href="#preparing-the-data" aria-hidden="true" class="anchor" id="preparing-the-data"></a>Preparing the data</h3>
<p>We have a working form which takes in the post title and post content, but to make a valid post we are still missing some information:</p>
<ul>
<li>Author - the user who submitted the post</li>
<li>Publish Date - the date the post was created</li>
</ul>
<p>We will define the two, and finally put all the information we have together inside one array in the <code>create</code> function:</p>
<pre><code>...
public function create() {

    if($this-&gt;input-&gt;method() == 'post')
    {
        // Get user ID of current user
        $author = $this-&gt;ion_auth-&gt;user()-&gt;row();
        $author = $author-&gt;id;

        // Get current date time
        $publish_date = date("Y-m-d H:i:s");

        // Put it all together
        $data = array(
            'title'     =&gt; $this-&gt;input-&gt;post('title'),
            'content'   =&gt; $this-&gt;input-&gt;post('content'),
            'author'    =&gt; $author,
            'publish_date' =&gt;$publish_date
        );

        // Print it out
        var_dump($data);
    }

    $this-&gt;load-&gt;view('posts/create');
}
...
</code></pre>
<p>We are printing out the final <code>$data</code> array after form submission, so go ahead and submit the form again (make sure you are still logged in).</p>
<p>You should see something like this at the top of the page after you submit the form:</p>
<pre><code>array (size=4)
  'title' =&gt; string 'My First Post' (length=13)
  'content' =&gt; string '123' (length=3)
  'author' =&gt; string '3' (length=1)
  'publish_date' =&gt; string '2017-10-22 21:54:43' (length=19)
</code></pre>
<p>We now have all the required information to make a blog post, and are ready to insert it into the database!</p>
<h3><a href="#creating-the-model" aria-hidden="true" class="anchor" id="creating-the-model"></a>Creating the model</h3>
<p>Now we need CodeIgniter to insert a row in the <code>posts</code> table.</p>
<p>Create a new file called <code>Posts_model.php</code> (not <code>posts_mode.php</code>) in <code>applications/model</code>.</p>
<p>The base model should look like this:</p>
<pre><code>&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

    public function __construct()
    {
        $this-&gt;load-&gt;database();
    }
}
</code></pre>
<p>Now create a function that inserts the row - it should take in an array of post data.</p>
<p>Insert the function under the <code>__construct()</code> function inside the model</p>
<pre><code>public function create($data)
{
    $this-&gt;db-&gt;insert('posts', $data);
}
</code></pre>
<p>We are now ready for the controller to call this function.</p>
<h3><a href="#putting-it-together" aria-hidden="true" class="anchor" id="putting-it-together"></a>Putting it together</h3>
<p>We now need the controller to pass the form data to the model function.</p>
<p>First, we need to load the model into the controller.</p>
<p>In the <code>Posts</code> controller, above the <code>create</code> function create a <code>__construct</code> function which loads the model:</p>
<pre><code>public function __construct()
{
    parent::__construct();
    $this-&gt;load-&gt;model('posts_model');
}
</code></pre>
<p>Now in the <code>create</code> function, replace the print lines -</p>
<pre><code>// Print it out
var_dump($data);
</code></pre>
<p>with this to send it to the model:</p>
<pre><code>// Create the post
$this-&gt;posts_model-&gt;create($data);
</code></pre>
<p>Go to the form page and submit a post (make sure you are logged in).
After submission, check the <code>posts</code> table with your database manager - you should see your new post!</p>
<h3><a href="#validation" aria-hidden="true" class="anchor" id="validation"></a>Validation</h3>
<p>There are a few conditions in which we don't want to create a post:</p>
<ul>
<li>When the title is empty</li>
<li>When the content is empty</li>
<li>When the user is not logged in</li>
</ul>
<p>We will use CodeIgniter's <code>form_validation</code> library to help us out in putting validation in our <code>Posts</code> controller.</p>
<p>First add a line into the <code>__construct</code> function to load the helper:</p>
<pre><code>...
$this-&gt;load-&gt;library('form_validation');
...
</code></pre>
<p>Next, add some validation rules to the <code>create</code> function inside where we've confirmed it's a post request:</p>
<pre><code>...
public function create() 
{
    if($this-&gt;input-&gt;method() == 'post')
    {
        $this-&gt;form_validation-&gt;set_rules('title', 'Title', 'required');
        $this-&gt;form_validation-&gt;set_rules('content', 'Content', 'required');
        ...

</code></pre>
<p>Now we will surround the call to the model function with a check to make sure there are no validation errors:</p>
<pre><code>...
if($this-&gt;form_validation-&gt;run() !== FALSE)
{
    // Create the post
    $this-&gt;posts_model-&gt;create($data);
}
...
</code></pre>
<p>This way, we are only passing information to the model if we're sure the title and contents have something in it.</p>
<p>If there are any validation errors, we want to display them on the form.</p>
<p>We will change the form view to show errors using <code>form_error</code> for each field.
We'll load up any submitted data using <code>set_value</code> - this way, if the user wrote a long post but forgot the title, they don't have to rewrite the post again!</p>
<pre><code>&lt;?php echo form_open() ?&gt;
    &lt;label&gt;Post Title&lt;/label&gt;&lt;br&gt;
    &lt;input type="text" class="form-control" name="title" value="&lt;?php echo set_value('title') ?&gt;"&gt;
    &lt;?php echo form_error('title'); ?&gt;

    &lt;label&gt;Post Content&lt;/label&gt;&lt;br&gt;
    &lt;textarea  name="content"&gt;&lt;?php echo set_value('content') ?&gt;&lt;/textarea&gt;
    &lt;?php echo form_error('content'); ?&gt;

    &lt;input type="submit" class="btn btn-primary" value="Post"&gt;
&lt;?php echo form_close() ?&gt;
</code></pre>
<p>Try it out - If you type nothing in the title but type some content, after submission you will get an error telling you that the title is required, while still keeping the content that you typed.</p>
<p>We also want to make sure the user is logged in - for this, we will make it so that users who are not logged in can't see the form at all.</p>
<p>At the start of the function we'll check if they are logged in and redirect them to the login page if they are not:</p>
<pre><code>...
public function create() 
{
    if (!$this-&gt;ion_auth-&gt;logged_in())
    {
        redirect('auth/login');
    }
    ...
</code></pre>
<p>Now if you log out (<code>http://localhost/auth/logout</code>) and visit the form, you will be taken to the login page.</p>
<p>You now have a working post creation form!</p>
<h2><a href="#part-3-viewing-a-post" aria-hidden="true" class="anchor" id="part-3-viewing-a-post"></a>Part 3: Viewing a Post</h2>
<h3><a href="#creating-the-view-function" aria-hidden="true" class="anchor" id="creating-the-view-function"></a>Creating the view function</h3>
<p>We want to be able to view the post that we just created.</p>
<p>We'll set this up at the URL <code>http://localhost/posts/view/{post_id}</code>.</p>
<p>To start, let's create that controller function.</p>
<p>Create a new function <code>view</code> in our <code>Posts</code> controller - it should take in a <code>$post_id</code>:</p>
<pre><code>...
public function view($post_id)
{
    echo $post_id;
}
...
</code></pre>
<p>We're also echoing out the <code>$post_id</code> - let's go to <code>http://localhost/posts/view/1</code> to see that <code>1</code> be printed on the page.</p>
<h3><a href="#getting-the-post-from-the-table" aria-hidden="true" class="anchor" id="getting-the-post-from-the-table"></a>Getting the post from the table</h3>
<p>Now that we have the <code>$post_id</code> that we want to load, we need to give it to the model, which will then ask the database.</p>
<p>In our <code>Posts_model</code> function, create a new function <code>get_post</code> - it should take in a <code>$post_id</code>.</p>
<pre><code>...
public function get_post($post_id)
{

}
...
</code></pre>
<p>Inside this function we'll ask the database to get the row where the <code>$post_id</code> is matching:</p>
<pre><code>...
$result = $this-&gt;db-&gt;get_where('posts', array('post_id' =&gt; $post_id));
return $result-&gt;first_row();
...
</code></pre>
<p>The model function is now ready for the controller to use.</p>
<p>Back in our <code>Posts</code> controller, replace the <code>echo</code> line with:</p>
<pre><code>...
$post = $this-&gt;posts_model-&gt;get_post($post_id);
var_dump($post);
...
</code></pre>
<p>The <code>var_dump</code> will print out the <code>$post</code> that we receive from the model.</p>
<p>Now if you go to <code>http://localhost/posts/view/1</code> again, you should see your post:</p>
<pre><code>object(stdClass)[27]
  public 'post_id' =&gt; string '1' (length=1)
  public 'title' =&gt; string 'My First Post' (length=13)
  public 'author' =&gt; string '3' (length=1)
  public 'content' =&gt; string '123' (length=3)
  public 'publish_date' =&gt; string '2017-10-22 22:19:02' (length=19)
</code></pre>
<h3><a href="#creating-the-view" aria-hidden="true" class="anchor" id="creating-the-view"></a>Creating the view</h3>
<p>We will now create the HTML page to display the post data in a prettier way.</p>
<p>Inside the folder <code>application/views/posts</code>, create a new file called <code>view.php</code>.</p>
<p>We'll do a quick draft of the HTML to start with, using dummy text:</p>
<pre><code>&lt;h1&gt;Fake Post Title&lt;/h1&gt;
&lt;div class="post-info"&gt;
    &lt;span class="author"&gt;Posted by Fake Author&lt;/span&gt; 
    &lt;span class="date"&gt;on January 1 1999 12:00PM&lt;/span&gt;
&lt;/div&gt;
&lt;div class="post-content"&gt;
    Here's where the post content is supposed to go!
&lt;/div&gt;
</code></pre>
<p>Now replace the <code>var_dump</code> line in our <code>view</code> function in the <code>Posts</code> controller:</p>
<pre><code>...
$this-&gt;load-&gt;view('posts/view');
...
</code></pre>
<p>Now if you revisit the URL on your browser, you should see the view with the placeholder text.</p>
<p>To load the post data, we'll need to first pass it to the view - edit that same line:</p>
<pre><code>...
$this-&gt;load-&gt;view('posts/view', array('post' =&gt; $post));
...
</code></pre>
<p>Next we can go to the view and replace our placeholder text with the <code>$post</code> properties:</p>
<pre><code>&lt;h1&gt;&lt;?php echo $post-&gt;title ?&gt;&lt;/h1&gt;
&lt;div class="post-info"&gt;
    &lt;span class="author"&gt;Posted by &lt;?php echo $post-&gt;author ?&gt;&lt;/span&gt; 
    &lt;span class="date"&gt;on &lt;?php echo date('j F Y \a\t H:ia', strtotime($post-&gt;publish_date)) ?&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;div class="post-content"&gt;
    &lt;?php echo $post-&gt;content ?&gt;
&lt;/div&gt;
</code></pre>
<p>Refreshing the page on the browser, we now see the real post data!</p>
<p>But there's one problem - the author of the post is disaplyed as a number (the user ID), instead of their name.</p>
<p>We'll need to ask the model to also get the user information when fetching post data.</p>
<p>Since the <code>author</code> property is the user ID, we can ask the <code>ion_auth</code> library to get the user data with it.</p>
<p>Edit the <code>get_post</code> function in the <code>Posts_model</code> to replace the post's <code>author</code> property with the user data:</p>
<pre><code>...
public function get_post($post_id)
{
    $result = $this-&gt;db-&gt;get_where('posts', array('post_id' =&gt; $post_id))-&gt;first_row();
    if($result)
    {
        $author = $this-&gt;ion_auth-&gt;user($result-&gt;author)-&gt;row();
        $result-&gt;author = $author;
    }
    return $result;
}
...
</code></pre>
<p>Now  back at our view, the <code>$post</code>'s <code>author</code> property holds all the user data so we can ask for the name:</p>
<pre><code>...
&lt;span class="author"&gt;Posted by &lt;?php echo $post-&gt;author-&gt;first_name . ' ' . $post-&gt;author-&gt;last_name ?&gt;&lt;/span&gt; 
...
</code></pre>
<p>Finally, we'll wrap this whole view with a check to catch any invalid posts:</p>
<pre><code>&lt;?php if($post): ?&gt;
    &lt;h1&gt;&lt;?php echo $post-&gt;title ?&gt;&lt;/h1&gt;
    &lt;div class="post-info"&gt;
        &lt;span class="author"&gt;Posted by &lt;?php echo $post-&gt;author-&gt;first_name . ' ' . $post-&gt;author-&gt;last_name ?&gt;&lt;/span&gt; 
        &lt;span class="date"&gt;on &lt;?php echo date('j F Y \a\t H:ia', strtotime($post-&gt;publish_date)) ?&gt;&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="post-content"&gt;
        &lt;?php echo $post-&gt;content ?&gt;
    &lt;/div&gt;
&lt;?php else: ?&gt;
    &lt;h1&gt;Post not found&lt;/h1&gt;
    &lt;p&gt;The post you were looking for could not be found.&lt;/p&gt;
&lt;?php endif ?&gt;
</code></pre>
<p>If we go to <code>http://localhost/posts/view/1</code>, we'll see the full post with the author name.
If we try to go to a post that doesn't exist, like <code>http://localhost/posts/view/123</code>, the page will tell you that it doesn't exist.</p>
<p>The view page is complete!</p>
<h2><a href="#part-4-list-of-posts" aria-hidden="true" class="anchor" id="part-4-list-of-posts"></a>Part 4: List of Posts</h2>
<p>We have a page to create posts, and we have a page to view a single post.</p>
<p>In this part, we'll be making a page that shows a list of posts.</p>
<h3><a href="#creating-the-controller-function" aria-hidden="true" class="anchor" id="creating-the-controller-function"></a>Creating the controller function</h3>
<p>We'll have the list at the URL <code>http://localhost/posts/all</code>.</p>
<p>For that, we will need to create a new function <code>all</code> in our <code>Posts</code> controller:</p>
<pre><code>...
public function all()
{
    $posts = array();
    var_dump($posts);
}
...
</code></pre>
<p>At the moment, we have a placeholder array where the posts should go, and a <code>var_dump</code> to print out this posts list (which is empty!)</p>
<p>We can confirm this by going to <code>http://localhost/posts/all</code> - you should see an empty array printed out.</p>
<p>We need <code>$posts</code> to hold an array of all our blog posts - we'll have to ask the model for that.</p>
<h3><a href="#creating-the-model-function" aria-hidden="true" class="anchor" id="creating-the-model-function"></a>Creating the model function</h3>
<p>Our model function will ask the database for all the published blog posts.</p>
<p>Create a new function <code>get_posts</code> inside <code>Posts_model</code>:</p>
<pre><code>...
public function get_posts()
{
    $this-&gt;db-&gt;order_by('publish_date', 'DESC');
    $result = $this-&gt;db-&gt;get('posts')-&gt;results();
    return $result;
}
...
</code></pre>
<p>This will return an array of all our posts - but before we go back to our controller to call this function, remember when we had to load the author for the post in the post view because <code>$post-&gt;author</code> was just showing the user ID?
We'll make that same change here for each of the posts.
Our <code>get_posts</code> would then look like this:</p>
<pre><code>...
public function get_posts()
{
    $results = $this-&gt;db-&gt;get('posts')-&gt;results();
    foreach ($results as $key =&gt; $result) {
        $author = $this-&gt;ion_auth-&gt;user($result-&gt;author)-&gt;row();
        $results[$key]-&gt;author = $author;
    }
    return $results;
}
...
</code></pre>
<p>Now we will go back to our controller and edit the <code>all</code> function to call <code>get_posts</code>:</p>
<pre><code>...
$posts = $this-&gt;posts_model-&gt;get_posts();
var_dump($posts);
...
</code></pre>
<p>Let's create a second post - head over to <code>http://localhost/posts/create</code> and create a blog post.</p>
<p>Once you've done that, go to <code>http://localhost/posts/all</code> - you should see two blog posts.</p>
<h3><a href="#creating-the-view-1" aria-hidden="true" class="anchor" id="creating-the-view-1"></a>Creating the view</h3>
<p>With the data prepared, we are ready to create the view.</p>
<p>We'll have it be a simple HTML list.</p>
<p>In the folder <code>application/views/posts</code>, create a new file called <code>all.php</code> and type in a placeholder list:</p>
<pre><code>&lt;ul class="posts-list"&gt;
    &lt;li&gt;
        &lt;div class="post-title"&gt;Post Title 1&lt;/div&gt;
        &lt;div class="post-info"&gt;Posted 1 Jan 1999 at 12:00AM by Mystery Author&lt;/div&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;div class="post-title"&gt;Post Title 2&lt;/div&gt;
        &lt;div class="post-info"&gt;Posted 1 Jan 1999 at 12:00AM by Mystery Author&lt;/div&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;div class="post-title"&gt;Post Title 3&lt;/div&gt;
        &lt;div class="post-info"&gt;Posted 1 Jan 1999 at 12:00AM by Mystery Author&lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;
</code></pre>
<p>Back in our <code>all</code> controller function, remove the <code>var_dump</code> line and load in the new view, remembering to pass the <code>$posts</code> variable:</p>
<pre><code>...
$this-&gt;load-&gt;view('posts/all', array('posts' =&gt; $posts);
...
</code></pre>
<p>Refreshing the page on the browser, we see a static list.</p>
<p>Change the view list to use the <code>$posts</code> array - we'll also make the titles link to the single view pages:</p>
<pre><code>&lt;ul class="posts-list"&gt;
    &lt;?php foreach($posts as $post): ?&gt;
    &lt;li&gt;
        &lt;div class="post-title"&gt;&lt;?php echo anchor( base_url("posts/view/{$post-&gt;post_id}"), $post-&gt;title) ?&gt;&lt;/div&gt;
        &lt;div class="post-info"&gt;Posted &lt;?php echo date('j F Y \a\t H:ia', strtotime($post-&gt;publish_date)) ?&gt; by &lt;?php echo $post-&gt;author-&gt;first_name . ' ' . $post-&gt;author-&gt;last_name ?&gt;&lt;/div&gt;
    &lt;/li&gt;
    &lt;?php endforeach ?&gt;
&lt;/ul&gt;
</code></pre>
<p>Let's also add in a button that links you to the post creation form, if you're logged in:</p>
<pre><code>&lt;?php $this-&gt;load-&gt;view('header.php') ?&gt;

&lt;h1&gt;Posts&lt;/h1&gt;

&lt;?php if($this-&gt;ion_auth-&gt;logged_in()): ?&gt;
    &lt;a href="&lt;?php echo base_url("posts/create") ?&gt;"&gt;
        &lt;button type="button"&gt;New Post&lt;/button&gt;
    &lt;/a&gt;
&lt;?php endif ?&gt;

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
<p>We now have a page that lists all the posts!</p>
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
<h2><a href="#part-8-comments" aria-hidden="true" class="anchor" id="part-8-comments"></a>Part 8: Comments</h2>
<p>In this part we'll be adding a new feature, comments - anonymous readers will be able to leave their name, email and comment for each post of the blog.</p>
<h3><a href="#creating-the-table-1" aria-hidden="true" class="anchor" id="creating-the-table-1"></a>Creating the table</h3>
<p>Each comment will have these properties:</p>
<ul>
<li>A comment ID</li>
<li>The post that it belongs to</li>
<li>Name</li>
<li>E-mail</li>
<li>Comment content</li>
<li>Date</li>
</ul>
<p>This translates to this MySQL table structure - run it on your database manager:</p>
<pre><code>CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  KEY `post_id` (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
</code></pre>
<h3><a href="#creating-the-model-1" aria-hidden="true" class="anchor" id="creating-the-model-1"></a>Creating the model</h3>
<p>Create a new file <code>Comments_model.php</code> in <code>applications/models</code>.</p>
<p>It will need a <code>create</code> function and a <code>get_comments</code> function, which we are alreadt familiar with with the posts model:</p>
<pre><code>&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments_model extends CI_Model {

    public function __construct()
    {
        $this-&gt;load-&gt;database();
    }

    public function create($data)
    {
        $this-&gt;db-&gt;insert('comments', $data);
    }

    public function get_comments($post_id)
    {
        $this-&gt;db-&gt;order_by('date', 'DESC');
        $this-&gt;db-&gt;where('post_id', $post_id);
        return $this-&gt;db-&gt;get('comments')-&gt;result();
    }
}
</code></pre>
<h3><a href="#creating-the-controller-1" aria-hidden="true" class="anchor" id="creating-the-controller-1"></a>Creating the controller</h3>
<p>The controller will take in comment form submissions.</p>
<p>Create a file <code>Comments.php</code> under <code>application/controllers</code>.</p>
<p>It will need a function <code>add</code> to add comments submitted through a post page:</p>
<pre><code>&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this-&gt;load-&gt;model('comments_model');
        $this-&gt;load-&gt;library('form_validation');
    }

    public function add($post_id)
    {
        if($this-&gt;input-&gt;method() == 'post')
        {
            // Validation here ...

            if($this-&gt;form_validation-&gt;run() !== FALSE)
            {
                $data = array();
                $this-&gt;comments_model-&gt;create($data);
                redirect("posts/view/$post_id#comments");
            }
        }

        $this-&gt;load-&gt;view('comments/error', array('post_id' =&gt; $post_id));
    }

}
</code></pre>
<p>The <code>add</code> function is not done yet, but consider the two outcomes when someone tries to add a comment:</p>
<ul>
<li>It succeeds form validation, creates a comment, and redirects them to the post page, or</li>
<li>It fails form validation, and the user is taken to a page where they are shown the errors</li>
</ul>
<p>Keeping those in mind, we will move onto the views.</p>
<h3><a href="#creating-the-view-4" aria-hidden="true" class="anchor" id="creating-the-view-4"></a>Creating the view</h3>
<p>We'll create a separate view for the comments form, then load that view into the post view.</p>
<p>Create a new view <code>comments.php</code> in <code>applications/views/comments</code> - you'll also need to create the new folder <code>comments</code>.</p>
<p>In this view, we will display both the comment form, and the full comments least below it.</p>
<p>First the form:</p>
<pre><code>&lt;?php echo form_open('comments/add') ?&gt;

    &lt;label&gt;Name&lt;/label&gt;&lt;br&gt;
    &lt;input type="text" class="form-control" name="name" value="&lt;?php echo set_value('name') ?&gt;"&gt;
    &lt;?php echo form_error('name'); ?&gt;

    &lt;label&gt;E-mail (optional)&lt;/label&gt;&lt;br&gt;
    &lt;input type="email" class="form-control" name="email" value="&lt;?php echo set_value('email') ?&gt;"&gt;

    &lt;label&gt;Comment&lt;/label&gt;&lt;br&gt;
    &lt;textarea  name="content"&gt;&lt;?php echo set_value('content') ?&gt;&lt;/textarea&gt;

    &lt;input type="submit" class="btn btn-primary" value="Comment"&gt;
&lt;?php echo form_close() ?&gt;
</code></pre>
<p>Then the validation:</p>
<pre><code>&lt;?php if($this-&gt;input-&gt;method() == 'post' &amp;&amp; $this-&gt;session-&gt;flashdata('error')): ?&gt;
    &lt;div class="alert alert-danger alert-dismissable"&gt;
        &lt;button type="button" class="close fa-times fa"&gt;&lt;/button&gt;
        &lt;?php echo $this-&gt;session-&gt;flashdata('error') ?&gt;
    &lt;/div&gt;
&lt;?php endif ?&gt;

&lt;?php echo form_open('comments/add') ?&gt;

    &lt;div class="&lt;?php if(form_error('name')) echo 'has-error' ?&gt;"&gt;
        &lt;label&gt;Name&lt;/label&gt;&lt;br&gt;
        &lt;input type="text" class="form-control" name="name" value="&lt;?php echo set_value('name') ?&gt;"&gt;
        &lt;?php echo form_error('name'); ?&gt;
    &lt;/div&gt;

    &lt;div class="&lt;?php if(form_error('email')) echo 'has-error' ?&gt;"&gt;
        &lt;label&gt;E-mail (optional)&lt;/label&gt;&lt;br&gt;
        &lt;input type="email" class="form-control" name="email" value="&lt;?php echo set_value('email') ?&gt;"&gt;
        &lt;?php echo form_error('email'); ?&gt;
    &lt;/div&gt;

    &lt;div class="&lt;?php if(form_error('content')) echo 'has-error' ?&gt;"&gt;
        &lt;label&gt;Comment&lt;/label&gt;&lt;br&gt;
        &lt;textarea  name="content"&gt;&lt;?php echo set_value('content') ?&gt;&lt;/textarea&gt;
        &lt;?php echo form_error('content'); ?&gt;
    &lt;/div&gt;

    &lt;input type="submit" class="btn btn-primary" value="Comment"&gt;
&lt;?php echo form_close() ?&gt;
</code></pre>
<p>Then the list of comments at the bottom:</p>
<pre><code>...
&lt;?php if(!empty($comments)): ?&gt;
    &lt;h2&gt;Comments&lt;span class="text-muted"&gt; (&lt;?php echo count($comments) ?&gt;)&lt;/h2&gt;
    &lt;?php foreach($comments as $comment): ?&gt;
        &lt;div class="comment"&gt;
            &lt;div class="name"&gt;&lt;?php echo $comment-&gt;name ?&gt;&lt;/div&gt;
            &lt;div class="content"&gt;&lt;?php echo $comment-&gt;content ?&gt;&lt;/div&gt;
            &lt;div class="date"&gt;&lt;?php echo date('d M Y H:ia', strtotime($comment-&gt;date)) ?&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;?php endforeach ?&gt;
&lt;?php endif ?&gt;
</code></pre>
<p>Now we need to show this in the posts view.</p>
<p>In <code>Posts.php</code>, load the <code>comments_model</code> in the <code>__construct</code> function:</p>
<pre><code>...
$this-&gt;load-&gt;model('comments_model');
...
</code></pre>
<p>In the <code>view</code> function, get the comments and pass them on to the view:</p>
<pre><code>...
public function view($post_id)
{
    $post = $this-&gt;posts_model-&gt;get_post($post_id);
    $comments = $this-&gt;comments_model-&gt;get_comments($post_id);
    $this-&gt;load-&gt;view('posts/view', array('post' =&gt; $post, 'comments' =&gt; $comments));
}
...
</code></pre>
<p>Now in the post view - <code>application/views/posts/view.php</code> - load the <code>comment.php</code> view above the footer:</p>
<pre><code>...
&lt;a name="comments"&gt;&lt;/a&gt;
&lt;h2&gt;Add Comment&lt;/h2&gt;
&lt;?php $this-&gt;load-&gt;view('comments/comments', array('post_id' =&gt; $post-&gt;post_id)) ?&gt;
...
</code></pre>
<p>Now if you look at a posting you should see a comments form at the bottom.</p>
<p>Won't be able to post comments yet though - we'll need to go back to the controller to process the submission.</p>
<h3><a href="#form-validation" aria-hidden="true" class="anchor" id="form-validation"></a>Form validation</h3>
<p>Back at the <code>add</code> function in the <code>Comments.php</code> controller, we'll need to make a few changes.</p>
<p>Adding in validation and setting the <code>$data</code> variable to pass to the model, we should end up with something like:</p>
<pre><code>...
public function add($post_id)
{
    if($this-&gt;input-&gt;method() == 'post')
    {
        $this-&gt;form_validation-&gt;set_rules('name', 'Name', 'required|max_length[50]');
        $this-&gt;form_validation-&gt;set_rules('email', 'Email', 'required|valid_email');
        $this-&gt;form_validation-&gt;set_rules('content', 'Message', 'required|max_length[1000]');

        if($this-&gt;form_validation-&gt;run() !== FALSE)
        {
            $data = array(
                'post_id'   =&gt; $post_id,
                'name'      =&gt; $this-&gt;input-&gt;post('name'),
                'email'     =&gt; $this-&gt;input-&gt;post('email'),
                'content'   =&gt; $this-&gt;input-&gt;post('content'),
            );
            $this-&gt;comments_model-&gt;create($data);
            redirect("posts/view/$post_id#comments");
        }
        else
        {
            $this-&gt;session-&gt;set_flashdata('error', 'There are errors in the comment.');
        }
    }

    $this-&gt;load-&gt;view('comments/error', array('post_id' =&gt; $post_id));
}
...
</code></pre>
<p>Now if you go to a post, fill in the name, email and comment and submit the form, you will see a new comment pop up!</p>
<p>All that's left to do is to set up the error view:</p>
<p>Create a view <code>error.php</code> inside <code>application/views/comments</code>:</p>
<pre><code>...
&lt;?php $this-&gt;load-&gt;view('header') ?&gt;
&lt;h1&gt;Add a Comment&lt;/h1&gt;
&lt;?php $this-&gt;load-&gt;view('comments/comments', array('post_id' =&gt; $post_id)) ?&gt;

&lt;?php $this-&gt;load-&gt;view('footer') ?&gt;
...
</code></pre>
<p>Now if you try to leave some fields blank, you will get an error - if you correct the errors, then the comment will be posted!</p>
<h3><a href="#recaptcha" aria-hidden="true" class="anchor" id="recaptcha"></a>reCAPTCHA</h3>
<p>You always want to have some kind of bot detection with forms online - we will be using Google's reCAPTCHA.</p>
<p>First, get your keys from their (website)[<a href="https://www.google.com/recaptcha/admin">https://www.google.com/recaptcha/admin</a>]. This will work even if you are only using <code>localhost</code>.</p>
<p>Select "reCAPTCHA V2" and Register - you can put in <code>localhost</code> in the domains list. You will then get two keys, a site key and a secret key. We'll need those soon.</p>
<p>Instead of writing a reCAPTCHA validator from scratch, we will be using someone else's. Download the reCAPTCHA library for CodeIgniter (here)[<a href="https://github.com/appleboy/CodeIgniter-reCAPTCHA">https://github.com/appleboy/CodeIgniter-reCAPTCHA</a>].</p>
<p>We only need two files from this ZIP:</p>
<ul>
<li>ZIP's <code>config/recaptcha.php</code> should be copied to your <code>application/config</code></li>
<li>ZIP's <code>libraries/Recaptcha.php</code> should be copied to your <code>application/libraries</code></li>
</ul>
<p>Edit your <code>application/config/recaptcha.php</code> so that the site key and secret key matches the keys you just received from Google.</p>
<p>Load the <code>recaptcha</code> library in the <code>__construct</code> function of both your <code>Posts.php</code> and <code>Comments.php</code> controllers:</p>
<pre><code>...
$this-&gt;load-&gt;library('recaptcha');
...
</code></pre>
<p>Put the reCAPTCHA HTML element in the <code>comments.php</code> form by calling <code>$this-&gt;recaptcha-&gt;getWidget()</code>, above the submit button:</p>
<pre><code>...
&lt;?php echo $this-&gt;recaptcha-&gt;getWidget() ?&gt;
...
</code></pre>
<p>Now if you view the comments form on your browser, you should see a reCAPTCHA widget (it should not have any errors on it).</p>
<p>To validate the reCAPTCHA, edit the <code>add</code> function of <code>Comments.php</code> to call <code>$this-&gt;recaptcha-&gt;verifyResponse($recaptcha)</code>:</p>
<pre><code>...
public function add($post_id)
{
    if($this-&gt;input-&gt;method() == 'post')
    {
        $recaptcha = $this-&gt;input-&gt;post('g-recaptcha-response');
        $response = $this-&gt;recaptcha-&gt;verifyResponse($recaptcha);
        if(isset($response['success']) &amp;&amp; $response['success'] !== TRUE)
        {
            $this-&gt;session-&gt;set_flashdata('error', 'Please complete the ReCAPTCHA.');
            $this-&gt;load-&gt;view('comments/error', array('post_id' =&gt; $post_id));
            return;
        }
        ...
</code></pre>
<p>Now if you submit the comment form without the reCAPTCHA, it should give you an error.</p>
<p>If you submit the comments form with all the fields and the reCAPTCHA completed, it should post a comment.</p>
<p>If you get PHP errors upon trying to submit a comment with the reCAPTCHA, look for information on turning on php_openssl, which is the PHP OpenSSL extention.</p>
<p>With the reCAPTCHA done, that completes the comment functionality!</p>
<h2><a href="#part-9-tags" aria-hidden="true" class="anchor" id="part-9-tags"></a>Part 9: Tags</h2>
<p>In this part we will create a tagging functioanlity, which will allow the user to categorize their posts.</p>
<h3><a href="#creating-the-table-2" aria-hidden="true" class="anchor" id="creating-the-table-2"></a>Creating the table</h3>
<p>Each tag will have an ID, a post ID that it's associated to, and the tag label.</p>
<p>Create the table by running the code below in your database manager:</p>
<pre><code>CREATE TABLE `tags` (
  `tag_id` INT(11) NOT NULL AUTO_INCREMENT,
  `post_id` INT(11) NULL DEFAULT NULL,
  `label` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`tag_id`),
  INDEX `pid` (`post_id`)
)
ENGINE=MyISAM;
</code></pre>
<h3><a href="#editing-the-forms" aria-hidden="true" class="anchor" id="editing-the-forms"></a>Editing the forms</h3>
<p>We will need to take in an extra field in our post forms.</p>
<p>In <code>create.php</code>, add the new field below the post content field:</p>
<pre><code>...
&lt;div class="&lt;?php if(form_error('tags')) echo 'has-error' ?&gt;"&gt;
    &lt;label&gt;Post Tags&lt;/label&gt;&lt;br&gt;
    &lt;input type="text" class="form-control" name="tags" value="&lt;?php echo set_value('tags') ?&gt;"&gt;
    &lt;?php echo form_error('tags'); ?&gt;
&lt;/div&gt;
...
</code></pre>
<p>And in <code>edit.php</code>:</p>
<pre><code>...
&lt;div class="&lt;?php if(form_error('tags')) echo 'has-error' ?&gt;"&gt;
    &lt;label&gt;Post Tags&lt;/label&gt;&lt;br&gt;
    &lt;input type="text" class="form-control" name="tags" value="&lt;?php echo set_value('tags') ? set_value('tags') : $post-&gt;tags ?&gt;"&gt;
    &lt;?php echo form_error('tags'); ?&gt;
&lt;/div&gt;
...
</code></pre>
<h3><a href="#fetching-the-tags" aria-hidden="true" class="anchor" id="fetching-the-tags"></a>Fetching the tags</h3>
<p>Our model now needs to return the tags associated with each fetched post - remember that one post may have many tags.</p>
<p>We'll need to come up with the right SQL query to get us that data.</p>
<p>In your <code>tags</code> table, create two tags for your posts by picking out a valid <code>post_id</code> (I used <code>10</code>) in your blog and giving them two tags.
And example of what the table may look like after you do this:</p>
<pre><code>-------------------------
tag_id | post_id | label
-------------------------
1      | 10      | test
2      | 10      | apple
-------------------------
</code></pre>
<p>We will now try to run a query that will fetch us all of the post information, as well as the post's tags.
Run this query and match the <code>post_id</code> with the post that you made the tags for:</p>
<pre><code>SELECT posts.`*`, GROUP_CONCAT(tags.label) AS 'tags'
FROM posts 
LEFT JOIN tags ON posts.post_id = tags.post_id
WHERE posts.post_id = 10
</code></pre>
<p>After running this test SQL you should see a row with all the post information, and a column at the end called <code>tags</code> with the value <code>test, apple</code>.</p>
<p>Now that we know what query to run, we'll translate those into CodeIgniter's query builder and modify the <code>get_post</code> function of the <code>Post_model</code> to use the new query:</p>
<pre><code>...
public function get_post($post_id)
{
    $this-&gt;db-&gt;select('posts.*, GROUP_CONCAT(tags.label) AS tags');
    $this-&gt;db-&gt;join('tags', 'posts.post_id = tags.post_id', 'left');
    $this-&gt;db-&gt;where('posts.post_id', $post_id);
    $result = $this-&gt;db-&gt;get('posts')-&gt;first_row();
    if($result)
    {
        $author = $this-&gt;ion_auth-&gt;user($result-&gt;author)-&gt;row();
        $result-&gt;author = $author;
    }
    return $result;
}
...
</code></pre>
<p>Now if we go to edit that post we gave the two tags to at <code>http://localhost/posts/edit/10</code>, you will see an extra field with the two tags.</p>
<h3><a href="#assigning-the-tags" aria-hidden="true" class="anchor" id="assigning-the-tags"></a>Assigning the tags</h3>
<p>We want to be able to put new tags (or take away tags) using this field on the form.</p>
<p>The field is comma separated, so we would want to split the tags by the commas and create a new row in <code>tags</code> for each tag.</p>
<p>In the <code>edit</code> function <code>Posts.php</code> controller, edit the <code>$data</code> variable to also store the tags as an array:</p>
<pre><code>...
$data = array(
    'title'     =&gt; $this-&gt;input-&gt;post('title'),
    'content'   =&gt; $this-&gt;input-&gt;post('content'),
    'tags'      =&gt; explode( ',', $this-&gt;input-&gt;post('tags'))
);
...
</code></pre>
<p>Now in our <code>update</code> function in <code>Posts_model.php</code>, we will extract the tags array and pass it on to another model function to process:</p>
<pre><code>...
public function update($post_id, $data)
{
    $tags = $data['tags'];
    unset($data['tags']);
    $this-&gt;db-&gt;where('post_id', $post_id);
    $this-&gt;db-&gt;update('posts', $data);
    $this-&gt;set_tags($post_id, $tags);
}
...
</code></pre>
<p>The new function in the model, <code>set_tags</code>, will first delete all the tags of the post, and then insert the new set of tags.
The function will do some cleaning of the tag, to make sure it will be URL-friendly.</p>
<pre><code>public function set_tags($post_id, $tags)
{
    $this-&gt;db-&gt;delete('tags', array('post_id' =&gt; $post_id));
    foreach ($tags as $tag) {
        $tag = trim($tag);
        $tag = str_replace(' ', '-', $tag);
        $tag = preg_replace('/[^A-Za-z0-9\-]/', '', $tag);
        $data = array(
            'post_id' =&gt; $post_id,
            'label' =&gt; $tag
        );
        $query = $this-&gt;db-&gt;get_where('tags', $data);
        if(!$query-&gt;num_rows())
        {
            $this-&gt;db-&gt;insert('tags', $data);
        }            
    }
}
</code></pre>
<p>Now if you edit the post to add or remove tags, the changes will be applied.</p>
<p>We need to make similar changes to the post creation feature.</p>
<p>In the controller, edit the <code>create</code> function so that the data passes the tags:</p>
<pre><code>...
$data = array(
    'title'     =&gt; $this-&gt;input-&gt;post('title'),
    'content'   =&gt; $this-&gt;input-&gt;post('content'),
    'author'    =&gt; $author,
    'publish_date' =&gt; $publish_date,
    'tags'      =&gt; explode( ',', $this-&gt;input-&gt;post('tags'))
);
...
</code></pre>
<p>We also need to call <code>set_tags</code> from the <code>create</code> function in <code>Posts_model.php</code>:</p>
<pre><code>...
public function create($data)
{
    $tags = $data['tags'];
    unset($data['tags']);
    $this-&gt;db-&gt;insert('posts', $data);
    $post_id = $this-&gt;db-&gt;insert_id();
    $this-&gt;set_tags($post_id, $tags);
}
...
</code></pre>
<p>Now if you create a post with tags, the tags will be applied.</p>
<p>You will notice that if you have spaces in your tags, they will show as hypens in the text input. There are also spaces missing after the commas.</p>
<p>We will fix this by editing the <code>$post-&gt;tags</code> property in the <code>edit</code> function in the controller.
Make the modification towards the end of the function, before loading the view:</p>
<pre><code>    ...
    $post-&gt;tags = str_replace('-', ' ', $post-&gt;tags);
    $post-&gt;tags = str_replace(',', ', ', $post-&gt;tags);
    $this-&gt;load-&gt;view('posts/edit', array('post' =&gt; $post));
}
...
</code></pre>
<p>The tags input box will now show the spaces and have better space formatting.</p>
<p>We will now show the tags on the posts page and home page.</p>
<p>On the posts view <code>view.php</code>, print out the tags just before the edit button:</p>
<pre><code>...
&lt;?php if($tags = array_filter(explode(',', $post-&gt;tags))): ?&gt;
    &lt;div class="post-tags"&gt;
        Tagged 
        &lt;?php foreach($tags as $tag): ?&gt;
            &lt;?php echo anchor( base_url("posts/tagged/$tag"), str_replace('-', ' ', $tag)) ?&gt;&lt;?php if(end($tags) !== $tag) echo ', ' ?&gt;
        &lt;?php endforeach ?&gt;
    &lt;/div&gt;
&lt;?php endif ?&gt;
...
</code></pre>
<p>For the home page, edit the <code>Posts_model</code> to fetch the tags with the posts over at the <code>get_posts</code> function:</p>
<pre><code>...
public function get_posts()
{
    $this-&gt;db-&gt;select('posts.*, GROUP_CONCAT(tags.label) AS tags');
    $this-&gt;db-&gt;order_by('publish_date', 'DESC');
    $this-&gt;db-&gt;order_by('post_id', 'DESC');
    $this-&gt;db-&gt;group_by('post_id');
    $this-&gt;db-&gt;join('tags', 'posts.post_id = tags.post_id', 'left');
    $results = $this-&gt;db-&gt;get('posts')-&gt;result();
    foreach ($results as $key =&gt; $result) {
        $author = $this-&gt;ion_auth-&gt;user($result-&gt;author)-&gt;row();
        $results[$key]-&gt;author = $author;
    }
    return $results;
}
...
</code></pre>
<p>Now print out each of their tags below the content in the view <code>home.php</code>, just above the "Read More" link:</p>
<pre><code>...
&lt;?php if($tags = array_filter(explode(',', $post-&gt;tags))): ?&gt;
    &lt;div class="post-tags"&gt;
        Tagged 
        &lt;?php foreach($tags as $tag): ?&gt;
            &lt;?php echo anchor( base_url("posts/tagged/$tag"), str_replace('-', ' ', $tag)) ?&gt;&lt;?php if(end($tags) !== $tag) echo ', ' ?&gt;
        &lt;?php endforeach ?&gt; &amp;middot; 
    &lt;/div&gt;
&lt;?php endif ?&gt;
&lt;?php echo anchor( base_url("posts/view/{$post-&gt;post_id}"), 'Read More') ?&gt;
...
</code></pre>
<p>Go to the home page and you will see each of the tags are now listed - and link to <code>http://localhost/posts/tagged/{tag_name}</code>, which is a controller function that doesn't exist yet.</p>
<p>We'll make that function now - it will show a list of posts under that tag.</p>
<p>First, create a new controller function <code>tagged</code> in <code>Posts.php</code> which will pass the <code>$tag</code> to the model and the view:</p>
<pre><code>...
public function tagged($tag)
{
    $this-&gt;load-&gt;helper('pagination');
    $this-&gt;load-&gt;helper('html');
    $this-&gt;load-&gt;helper('post');

    $posts = $this-&gt;posts_model-&gt;get_by_tag($tag);
    $pagination = paginate($posts);
    $this-&gt;load-&gt;view('posts/tagged', array('posts' =&gt; $posts, 'pagination' =&gt; $pagination, 'tag' =&gt; $tag));
}
...
</code></pre>
<p>The function calls <code>get_by_tag</code>, which is a function we will create in our <code>Posts_model.php</code>.</p>
<p>It will get a list of posts with the passed in <code>$tag</code>:</p>
<pre><code>...
public function get_by_tag($tag)
{
    $this-&gt;db-&gt;select('posts.*, GROUP_CONCAT(tags.label) AS tags');
    $this-&gt;db-&gt;order_by('publish_date', 'DESC');
    $this-&gt;db-&gt;order_by('post_id', 'DESC');
    $this-&gt;db-&gt;group_by('post_id');
    $this-&gt;db-&gt;where('tags.label', $tag);
    $this-&gt;db-&gt;join('tags', 'posts.post_id = tags.post_id', 'left');
    $results = $this-&gt;db-&gt;get('posts')-&gt;result();
    foreach ($results as $key =&gt; $result) {
        $author = $this-&gt;ion_auth-&gt;user($result-&gt;author)-&gt;row();
        $results[$key]-&gt;author = $author;
    }
    return $results;
}
...
</code></pre>
<p>Now we may create a view <code>tagged.php</code> in <code>application/views/posts</code> that displays the list of posts:</p>
<pre><code>...
&lt;?php $this-&gt;load-&gt;view('header.php') ?&gt;

&lt;h1&gt;&lt;?php echo ucfirst($tag) ?&gt;&lt;/h1&gt;
&lt;div class="sub"&gt;Posts tagged with &lt;?php echo ucfirst($tag) ?&gt;&lt;/div&gt;

&lt;ul class="posts-list"&gt;
    &lt;?php foreach($posts as $post): ?&gt;
    &lt;li&gt;
        &lt;div class="post-title"&gt;&lt;?php echo anchor( base_url("posts/view/{$post-&gt;post_id}"), $post-&gt;title) ?&gt;&lt;/div&gt;
        &lt;div class="post-info"&gt;Posted &lt;?php echo date('j F Y \a\t H:ia', strtotime($post-&gt;publish_date)) ?&gt; by &lt;?php echo $post-&gt;author-&gt;first_name . ' ' . $post-&gt;author-&gt;last_name ?&gt;&lt;/div&gt;
        &lt;div class="post-content"&gt;&lt;?php echo preview($post-&gt;content, 500) ?&gt;&lt;/div&gt;

        &lt;?php if($tags = array_filter(explode(',', $post-&gt;tags))): ?&gt;
            &lt;div class="post-tags"&gt;
                Tagged 
                &lt;?php foreach($tags as $tag): ?&gt;
                    &lt;?php echo anchor( base_url("posts/tagged/$tag"), str_replace('-', ' ', $tag)) ?&gt;&lt;?php if(end($tags) !== $tag) echo ', ' ?&gt;
                &lt;?php endforeach ?&gt; &amp;middot; 
            &lt;/div&gt;
        &lt;?php endif ?&gt;
        &lt;?php echo anchor( base_url("posts/view/{$post-&gt;post_id}"), 'Read More') ?&gt;
    &lt;/li&gt;
    &lt;?php endforeach ?&gt;
&lt;/ul&gt;

&lt;?php $this-&gt;load-&gt;view('pagination') ?&gt;

&lt;?php $this-&gt;load-&gt;view('footer.php') ?&gt;
...
</code></pre>
<p>Now if you go to the home page and click on a tag that a post has, it will take you to a page with all the posts with that tag!</p>
<h2><a href="#part-10-deleting-posts" aria-hidden="true" class="anchor" id="part-10-deleting-posts"></a>Part 10: Deleting Posts</h2>
<p>This short part will allow us to delete posts from the edit forms.</p>
<h3><a href="#editing-the-form" aria-hidden="true" class="anchor" id="editing-the-form"></a>Editing the form</h3>
<p>In <code>edit.php</code>, add a function for the delete action next to the post button:</p>
<pre><code>...
&lt;input type="submit" class="btn btn-danger" name="delete" onclick="return confirm('Are you sure you want to delete this post?');" value="Delete"&gt;
...
</code></pre>
<h3><a href="#editing-the-controller-1" aria-hidden="true" class="anchor" id="editing-the-controller-1"></a>Editing the controller</h3>
<p>Inside the <code>edit</code> function in the <code>Posts.php</code> controller, check if the delete button was pressed and make a call to the model for deletion.
Place it above the form validation:</p>
<pre><code>...
if( $this-&gt;input-&gt;post('delete') )
{
    $this-&gt;posts_model-&gt;delete($post_id);
    redirect('/');
}
...
</code></pre>
<h3><a href="#editing-the-model" aria-hidden="true" class="anchor" id="editing-the-model"></a>Editing the model</h3>
<p>Add a new function <code>delete</code> to <code>Posts_model.php</code>:</p>
<pre><code>...
public function delete($post_id)
{
    $this-&gt;db-&gt;where('post_id', $post_id);
    $this-&gt;db-&gt;delete('posts');
}
...
</code></pre>
<p>Now if you edit a post and delete it, the post will be removed!</p>
<h2><a href="#part-11-draft-posts" aria-hidden="true" class="anchor" id="part-11-draft-posts"></a>Part 11: Draft Posts</h2>
<p>For the final part we will be allowing users to save their posts as "Draft" - Posts set to draft will not be visible to the public.</p>
<p>In our tables, we'll interpret a post with <code>NULL</code> <code>publish_date</code> to be a draft post.</p>
<h3><a href="#editing-the-forms-1" aria-hidden="true" class="anchor" id="editing-the-forms-1"></a>Editing the forms</h3>
<p>In our post form, we want a second button that says "Save as Draft" next to our "Post" button.</p>
<p>Add the button into <code>create.php</code> and <code>edit.php</code> in <code>application/views/posts</code>:</p>
<pre><code>...
&lt;input type="submit" class="btn btn-primary" name="draft" value="Save as Draft"&gt;
...
</code></pre>
<h3><a href="#editing-the-controller-2" aria-hidden="true" class="anchor" id="editing-the-controller-2"></a>Editing the controller</h3>
<p>Now in our controller all posts saved with the draft button should not have a publish date.</p>
<p>Edit the <code>create</code> function in <code>Posts.php</code>, where the <code>$publish_date</code> is set:</p>
<pre><code>...
if( $this-&gt;input-&gt;post('draft') )
{
    $publish_date = null;
}
else
{
    $publish_date = date("Y-m-d H:i:s");
}  
...
</code></pre>
<p>Modify the <code>edit</code> function just above where it call's the movel'd <code>update</code> function to pass in a <code>null</code> <code>publish_date</code> if the user selects to save as draft:</p>
<pre><code>...
if( $this-&gt;input-&gt;post('draft') )
{
    $data['publish_date'] = null;
}
else
{
    $data['publish_date'] = $post-&gt;publish_date ? $post-&gt;publish_date : date("Y-m-d H:i:s");
}
...
</code></pre>
<p>We must also change the <code>view</code> function so that it does not show the post if it is in draft - we will make it so that we can see it if we are logged in:</p>
<pre><code>...
public function view($post_id)
{
    $post = $this-&gt;posts_model-&gt;get_post($post_id);
    if(!$post-&gt;publish_date &amp;&amp; !$this-&gt;ion_auth-&gt;logged_in())
    {
        $post = null;
        $comments = null;
    }
    else
    {
        $comments = $this-&gt;comments_model-&gt;get_comments($post_id);
    }
    
    $this-&gt;load-&gt;view('posts/view', array('post' =&gt; $post, 'comments' =&gt; $comments));
}
...
</code></pre>
<p>Now if you create or edit a post and save it as a draft, the <code>publish_date</code> will be <code>NULL</code>, and will appear as the last posts on public lists.</p>
<h3><a href="#editing-the-model-1" aria-hidden="true" class="anchor" id="editing-the-model-1"></a>Editing the model</h3>
<p>Instead of appearing last on the post listings, we want draft posting to not appear at all.</p>
<p>Edit the <code>get_posts</code> function to add a where clause, excluding posts with a <code>publish_date</code> of <code>NULL</code>:</p>
<pre><code>...
$this-&gt;db-&gt;where('posts.publish_date IS NOT NULL');
...
</code></pre>
<p>While we're here, we'll create a new function called <code>get_drafts</code> which will get a list of draft posts:</p>
<pre><code>...
public function get_drafts()
{
    $this-&gt;db-&gt;order_by('publish_date', 'DESC');
    $this-&gt;db-&gt;order_by('post_id', 'DESC');
    $this-&gt;db-&gt;where('posts.publish_date IS NULL');
    $results = $this-&gt;db-&gt;get('posts')-&gt;result();
    foreach ($results as $key =&gt; $result) {
        $author = $this-&gt;ion_auth-&gt;user($result-&gt;author)-&gt;row();
        $results[$key]-&gt;author = $author;
    }
    return $results;
}
...
</code></pre>
<p>Now the public post listings will not show any draft posts.</p>
<h3><a href="#draft-posts-listing" aria-hidden="true" class="anchor" id="draft-posts-listing"></a>Draft posts listing</h3>
<p>We will need some way to view the draft postings, so we will create a page for <code>http://localhost/posts/drafts</code>.</p>
<p>The page will show a list of all the draft posts with an option to edit them.</p>
<p>In the <code>Posts.php</code> controller, create a function <code>drafts</code> which will show the draft posts to logged in users:</p>
<pre><code>public function drafts()
{
    if (!$this-&gt;ion_auth-&gt;logged_in())
    {
        redirect('auth/login');
    }
    $this-&gt;load-&gt;helper('pagination');
    $posts = $this-&gt;posts_model-&gt;get_drafts();
    $pagination = paginate($posts);
    $this-&gt;load-&gt;view('posts/drafts', array('posts' =&gt; $posts, 'pagination' =&gt; $pagination));
}
</code></pre>
<p>Create a view <code>drafts.php</code> in <code>application/views/posts</code> to display this list:</p>
<pre><code>&lt;?php $this-&gt;load-&gt;view('header.php') ?&gt;

&lt;h1&gt;Draft Posts&lt;/h1&gt;

&lt;a href="&lt;?php echo base_url("posts/create") ?&gt;"&gt;
    &lt;button type="button"&gt;New Post&lt;/button&gt;
&lt;/a&gt;

&lt;ul class="posts-list"&gt;
    &lt;?php foreach($posts as $post): ?&gt;
    &lt;li&gt;
        &lt;div class="post-title"&gt;&lt;?php echo anchor( base_url("posts/view/{$post-&gt;post_id}"), $post-&gt;title) ?&gt;&lt;/div&gt;
        &lt;div class="post-content"&gt;&lt;?php echo preview($post-&gt;content, 200) ?&gt;&lt;/div&gt;
        &lt;?php echo anchor( base_url("posts/edit/{$post-&gt;post_id}"), 'Edit') ?&gt;
    &lt;/li&gt;
    &lt;?php endforeach ?&gt;
&lt;/ul&gt;

&lt;?php $this-&gt;load-&gt;view('pagination') ?&gt;

&lt;?php $this-&gt;load-&gt;view('footer.php') ?&gt;
</code></pre>
<p>Now go to <code>http://localhost/posts/drafts</code>, where you will see a list of draft posts!</p>
<h2><a href="#thats-it" aria-hidden="true" class="anchor" id="thats-it"></a>That's it!</h2>
<p>That concludes the walkthrough of writing a blog on CodeIgniter.</p>
<p>Please feel free to contact me for feedback or questions.</p>

<a href="<?php echo base_url('material') ?>" class="back-link">&laquo; Back to Material</a>

</section>
<?php $this->load->view('footer') ?>