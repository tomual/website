<?php $this->load->view('header') ?>
<h1>Archive</h1>
<p>Archive of blog posts</p>
<?php foreach ($archive as $year => $months) : ?>
    <h2><?php echo $year ?></h2><br>
    <ul class="archive">
    <?php foreach ($months as $month => $posts) : ?>
        <li><b><?php echo $month ?></b>
        <ul>
            <?php foreach ($posts as $post) : ?>
            <a href="<?php echo base_url("blog/view/{$post->id}") ?>"><li><?php echo $post->title ?></li></a>
            <?php endforeach?>
        </ul>
        </li>
    <?php endforeach?>
    </ul>
<?php endforeach?>

<a href="<?php echo base_url('blog') ?>" class="back-link">&laquo; Back to posts</a>
<?php $this->load->view('footer') ?>
