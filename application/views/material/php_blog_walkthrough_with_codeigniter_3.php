<?php $this->load->view('header') ?>
<a id="top"></a>
<a href="<?php echo base_url('material') ?>" class="back-link">&laquo; Back to Material</a>

<h1>PHP Blog Walkthrough with CodeIgniter</h1>

<div><b><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/2/') ?>">&laquo; Back to Chapter 2</a></b></div>
<br>
<h2>Table of Contents</h2>

<ul>
  <li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/') ?>">Chapter 1</a></li>
  <li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/2/') ?>">Chapter 2</a></li>
  <li>Chapter 3
      <ul>
          <li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/3/') ?>#part-9-comments" aria-hidden="true" >Part 9: Comments</a></li>
          <li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/3/') ?>#part-10-tags" aria-hidden="true" >Part 10: Tags</a></li>
          <li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/3/') ?>#part-11-deleting-posts" aria-hidden="true" >Part 11: Deleting Posts</a></li>
          <li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/3/') ?>#part-12-draft-posts" aria-hidden="true" >Part 12: Draft Posts</a></li>
      </ul>
  </li>
</ul>

<h2><a href="#part-9-comments" aria-hidden="true" class="anchor" id="part-9-comments"></a>Part 9: Comments</h2>
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
<h2><a href="#part-10-tags" aria-hidden="true" class="anchor" id="part-10-tags"></a>Part 10: Tags</h2>
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
<h2><a href="#part-11-deleting-posts" aria-hidden="true" class="anchor" id="part-11-deleting-posts"></a>Part 11: Deleting Posts</h2>
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
<h2><a href="#part-12-draft-posts" aria-hidden="true" class="anchor" id="part-12-draft-posts"></a>Part 12: Draft Posts</h2>
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
<p>Please feel free to <a href="<?php echo base_url('contact') ?>">contact me</a> for feedback or questions.</p>

<a href="<?php echo base_url('material') ?>" class="back-link">&laquo; Back to Material</a>

<div class="table-of-contents">
  <h2>Table of Contents</h2>
  <ul>
    <li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/') ?>">Chapter 1 &#8599;</a></li>
    <li><a href="<?php echo base_url('material/php-blog-walkthrough-with-codeigniter/2/') ?>">Chapter 2 &#8599;</a></li>
    <li>Chapter 3
        <ul>
            <li><a href="#part-9-comments" aria-hidden="true" >Part 9: Comments</a></li>
            <li><a href="#part-10-tags" aria-hidden="true" >Part 10: Tags</a></li>
            <li><a href="#part-11-deleting-posts" aria-hidden="true" >Part 11: Deleting Posts</a></li>
            <li><a href="#part-12-draft-posts" aria-hidden="true" >Part 12: Draft Posts</a></li>
        </ul>
    </li>
    <li><a href="#top">&#8593;&#8593;&#8593; Top</a></li>
  </ul>
</div>
<?php $this->load->view('footer') ?>