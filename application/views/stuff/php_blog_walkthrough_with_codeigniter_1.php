<?php $this->load->view('header') ?>
<a id="top"></a>
<a href="<?php echo base_url('stuff') ?>" class="back-link">&laquo; Back to Stuff</a>

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
<li>Chapter 1
    <ul>
        <li><a href="#installation" aria-hidden="true" >Installation</a></li>
        <li><a href="#part-1-authentication-system" aria-hidden="true" >Part 1: Authentication 
        <li><a href="#part-2-creating-posts" aria-hidden="true" >Part 2: Creating Posts</a></li>
        <li><a href="#part-3-viewing-a-post" aria-hidden="true" >Part 3: Viewing a Post</a></li>
        <li><a href="#part-4-list-of-posts" aria-hidden="true" >Part 4: List of Posts</a></li>
    </ul>
</li>
<li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/2/') ?>">Chapter 2</a>
    <ul>
        <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/2/') ?>#part-5-template" aria-hidden="true" >Part 5: Template</a></li>
        <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/2/') ?>#part-6-edit-posts" aria-hidden="true" >Part 6: Edit Posts</a></li>
        <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/2/') ?>#part-7-pagination" aria-hidden="true" >Part 7: Pagination</a></li>
        <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/2/') ?>#part-8-home-page" aria-hidden="true" >Part 8: Home page</a></li>
        <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/2/') ?>#part-8-comments" aria-hidden="true" >Part 8: Comments</a></li>
    </ul>
</li>
<li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/3/') ?>">Chapter 3</a>
    <ul>
        <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/3/') ?>#part-9-tags" aria-hidden="true" >Part 9: Tags</a></li>
        <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/3/') ?>#part-10-deleting-posts" aria-hidden="true" >Part 10: Deleting Posts</a></li>
        <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/3/') ?>#part-11-draft-posts" aria-hidden="true" >Part 11: Draft Posts</a></li>
        <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/3/') ?>#thats-it" aria-hidden="true" >That's it!</a></li>
    </ul>
</li>
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

<div class="center"><b><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/2/') ?>">To Chapter 2! &raquo;</a></b></div>

<a href="<?php echo base_url('stuff') ?>" class="back-link">&laquo; Back to Stuff</a>

<div class="table-of-contents">
    <h2>Table of Contents</h2>
    <ul>
    <li>Chapter 1
        <ul>
            <li><a href="#installation" aria-hidden="true" >Installation</a></li>
            <li><a href="#part-1-authentication-system" aria-hidden="true" >Part 1: Authentication 
            <li><a href="#part-2-creating-posts" aria-hidden="true" >Part 2: Creating Posts</a></li>
            <li><a href="#part-3-viewing-a-post" aria-hidden="true" >Part 3: Viewing a Post</a></li>
            <li><a href="#part-4-list-of-posts" aria-hidden="true" >Part 4: List of Posts</a></li>
        </ul>
    </li>
    <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/2/') ?>">Chapter 2 &#8599;</a></li>
    <li><a href="<?php echo base_url('stuff/php-blog-walkthrough-with-codeigniter/3/') ?>">Chapter 3 &#8599;</a></li>
    <li><a href="#top">&#8593;&#8593;&#8593; Top</a></li>
    </ul>
</div>

<?php $this->load->view('footer') ?>