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
	<h1>Archive</h1>
	<p>Archive of blog posts</p>
	<?php foreach ($archive as $year => $months): ?>
		<h2><?php echo $year ?></h2><br>
		<ul class="archive">
		<?php foreach ($months as $month => $posts): ?>
			<li><b><?php echo $month ?></b>
			<ul>
				<?php foreach ($posts as $post): ?>
				<a href="<?php echo base_url("blog/view/{$post->id}") ?>"><li><?php echo $post->title ?></li></a>
				<?php endforeach?>
			</ul>
			</li>
		<?php endforeach?>
		</ul>
	<?php endforeach?>

	<a href="<?php echo base_url('blog') ?>" class="back-link">&laquo; Back to posts</a>
</section>
<?php $this->load->view('footer')?>