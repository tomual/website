<?php $this->load->view('header') ?>

    <section class="blog">
        <h1>Blog</h1>
        <p>Posts about projects or general web development</p>
        <a href="<?php echo base_url('blog/archive') ?>">Archive</a>
        <br><br>
        <hr>


        <div class="posts">
            <?php foreach ($posts as $post): ?>
                <div class="post">
                    <h2 class="post-title"><?php echo anchor(post_url($post), $post->title) ?></h2>
                    <?php if($this->session->userdata('logged_in')): ?>
                        <a href="<?php echo base_url("blog/gogogo/$post->id") ?>">Edit</a>
                    <?php endif ?>
                    <div class="post-info"><?php echo date('j F, Y @ g:ia', strtotime($post->created)) ?></div>
                    <div class="post-content"><?php echo preview($post->content, 200) ?></div>
                    <?php if (strlen($post->content) > 200): ?>
                        <?php echo anchor(post_url($post), "Read more") ?>
                    <?php endif ?>
                    <br><br>
                </div>
            <?php endforeach ?>
        </div>
    </section>

    <?php $this->load->view('pagination') ?>
<?php $this->load->view('footer') ?>