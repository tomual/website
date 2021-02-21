<?php $this->load->view('header') ?>

<h1>Blog</h1>
<p>Blog posts about my programming adventures and other matters.</p>
<a href="<?php echo base_url('blog/archive') ?>">View archive</a>
<br><br>
<div class="posts">
    <?php foreach ($posts as $post) : ?>
        <div class="post">
            <h2 class="post-title"><?php echo anchor(post_url($post), $post->title) ?></h2>
            <div class="post-info"><?php echo date('j F, Y @ g:ia', strtotime($post->created)) ?></div>
            <div class="post-content"><?php echo preview($post->content, 200) ?></div>
            <?php if (strlen($post->content) > 200) : ?>
                <?php echo anchor(post_url($post), "Read more") ?>
            <?php endif?>
            <br><br>
        </div>
    <?php endforeach?>
</div>
<?php $this->load->view('pagination')?>
<?php $this->load->view('footer') ?>
