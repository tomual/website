<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('material') ?>"><img src="<?php echo base_url('img/header material.png') ?>"></a>
    <nav id="guide">
        <br>
        <h1><a href="<?php echo base_url('material') ?>">MATERIAL</a></h1>
        <a href="<?php echo base_url('material') ?>">
        </a>
        <ul>
            <a href="<?php echo base_url('material') ?>">
            </a>
            <li><a href="<?php echo base_url('material') ?>"></a><a href="background">Backgrounds</a></li>
            <li><a href="bullet">Bullets</a></li>
            <li><a href="emoticon">Emoticons</a></li>
            <li><a href="sign">Sign</a></li>
        </ul>
    </nav>
    <img src="<?php echo base_url('img/footer.png') ?>" class="back-to-bg">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" class="back-to-text"></a>
</nav>

<h1><?php echo ucfirst($tag) ?></h1>
<div class="sub">Posts tagged with <?php echo ucfirst($tag) ?></div>

<ul class="posts-list">
    <?php foreach($posts as $post): ?>
    <li>
        <div class="post-title"><?php echo anchor( base_url("posts/view/{$post->post_id}"), $post->title) ?></div>
        <div class="post-info">Posted <?php echo date('j F Y \a\t H:ia', strtotime($post->publish_date)) ?> by <?php echo $post->author->first_name . ' ' . $post->author->last_name ?></div>
        <div class="post-content"><?php echo preview($post->content, 500) ?></div>

        <?php if($tags = array_filter(explode(',', $post->tags))): ?>
            <div class="post-tags">
                Tagged 
                <?php foreach($tags as $tag): ?>
                    <?php echo anchor( base_url("posts/tagged/$tag"), str_replace('-', ' ', $tag)) ?><?php if(end($tags) !== $tag) echo ', ' ?>
                <?php endforeach ?> &middot; 
            </div>
        <?php endif ?>
        <?php echo anchor( base_url("posts/view/{$post->post_id}"), 'Read More') ?>
    </li>
    <?php endforeach ?>
</ul>

<?php $this->load->view('pagination') ?>

<?php $this->load->view('footer') ?>