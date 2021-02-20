<?php $this->load->view('header') ?>
<h1><?php echo $post->title ?></h1>
<div class="post-info">
    <span class="date"><?php echo date('j F, Y \a\t g:ia', strtotime($post->created)) ?></span>
</div>
<div class="post-content">
    <?php echo $post->content ?>
</div>

<a href="<?php echo base_url('blog') ?>" class="back-link">&laquo; Back to posts</a>
<?php $this->load->view('footer') ?>
