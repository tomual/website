<?php $this->load->view('header') ?>

<div class="post">
<?php if( $post ): ?>
    <h1><?php echo $post->title ?></h1>
    <div class="post-info">
        <span class="date"><?php echo date('j F Y \a\t H:ia', strtotime($post->publish_date)) ?></span>
    </div>
    <div class="post-content">
        <?php echo $post->content ?>
    </div>
<?php else: ?>
    <h1>Post not found</h1>
    <p>The post you were looking for could not be found.</p>
<?php endif ?>
</div>

<a href="<?php echo base_url('blog') ?>" class="back-link">&laquo; Back to posts</a>

<?php $this->load->view('footer') ?>