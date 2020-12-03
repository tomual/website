<?php $this->load->view('header')?>
<nav id="side">
    <a href="<?php echo base_url('blog') ?>"><img src="<?php echo base_url('img/header blog.png') ?>"></a>
    <nav id="guide">
        <br>
        <h1><a href="<?php echo base_url('blog/archive') ?>">Archive</a></h1>
    </nav>
    <img src="<?php echo base_url('img/footer.png') ?>" class="back-to-bg">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" class="back-to-text"></a>
</nav>
<section class="blog">
    <img src="<?php echo base_url('img/sectiontop.png') ?>" class="section-top">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;">
    <div class="post">
    <?php if ($post): ?>
        <h1><?php echo $post->title ?></h1>
        <div class="post-info">
            <span class="date"><?php echo date('j F, Y \a\t g:ia', strtotime($post->created)) ?></span>
        </div>
        <div class="post-content">
            <?php echo $post->content ?>
        </div>
    <?php else: ?>
        <h1>Post not found</h1>
        <p>The post you were looking for could not be found.</p>
    <?php endif?>
    </div>
    <a href="<?php echo base_url('blog') ?>" class="back-link">&laquo; Back to posts</a>
</section>
<?php $this->load->view('footer')?>