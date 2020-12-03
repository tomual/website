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
        <h1>Blog</h1>
        <p>Posts about projects or general web development</p>
        <hr>
        <div class="posts">
            <?php foreach ($posts as $post): ?>
                <div class="post">
                    <h2 class="post-title"><?php echo anchor(post_url($post), $post->title) ?></h2>
                    <div class="post-info"><?php echo date('j F, Y @ g:ia', strtotime($post->created)) ?></div>
                    <div class="post-content"><?php echo preview($post->content, 200) ?></div>
                    <?php if (strlen($post->content) > 200): ?>
                        <?php echo anchor(post_url($post), "Read more") ?>
                    <?php endif?>
                    <br><br>
                </div>
            <?php endforeach?>
        </div>
    <?php $this->load->view('pagination')?>
</section>
<?php $this->load->view('footer')?>