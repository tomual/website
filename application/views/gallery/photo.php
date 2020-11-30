<?php $this->load->view('header') ?>

<a href="<?php echo base_url('gallery') ?>" class="back-link">&laquo; Back to Gallery</a>

<h1>Photo</h1>
<p>Photos taken with a Pentax Q10 or Google Pixel</p>

<ul>
	<li><a href="<?php echo base_url('gallery/photo/cat') ?>">cat</a></li>
	<li><a href="<?php echo base_url('gallery/photo/swimming') ?>">swimming</a></li>
	<li><a href="<?php echo base_url('gallery/photo/warm') ?>">warm</a></li>
	<!-- <li><a href="<?php echo base_url('gallery/photo/jp') ?>">jp</a></li> -->
	<!-- <li><a href="<?php echo base_url('gallery/photo/kansa') ?>">kansa</a></li> -->
</ul>

<?php $this->load->view('footer') ?>