<?php $this->load->view('header') ?>

<section class="blog">
    <h1>Blog</h1>
    <p>Mumble mumble</p>

    <div class="archive">
        <h2>Recent</h2>
        <?php foreach($posts as $post): ?>   
            <?php echo anchor( post_url($post), $post->title) ?>
            <div class="post-info"><?php echo date('j F Y \a\t h:ia', strtotime($post->publish_date)) ?></div>
        <?php endforeach ?>
    </div>

    <div class="posts">
        <?php foreach($posts as $post): ?>
            <div class="post">
                <h2 class="post-title"><?php echo anchor( post_url($post), $post->title) ?></h2>
                <div class="post-info"><?php echo date('j F Y \a\t h:ia', strtotime($post->publish_date)) ?></div>
                <div class="post-content"><?php echo preview($post->content, 2000) ?></div>
                <br>
                <?php echo anchor( post_url($post), "Read more") ?>
            </div>
        <?php endforeach ?>
    </div>
</section>

<?php $this->load->view('pagination') ?>

<?php $this->load->view('footer') ?>