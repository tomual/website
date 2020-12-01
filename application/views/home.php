<!DOCTYPE html>
<html>
<head>
	<title>tomual - personal site and laboratory</title>
	<style>
		body {
			background-color: #486B9F;
			margin: 0px;
			padding: 0px;
		}
		.cover {
			width: 334px;
			height: 246px;
			background-image: url(<?php echo base_url('img/covers/1.png') ?>);
			position: relative;
			top: -209px;
			left: 173px;
		}

		.main {
			background-image: url(<?php echo base_url('img/main.png') ?>);
			background-repeat: no-repeat;
			height: 312px;
			width: 530px;
			position: absolute;
			top: 50%;
			margin-top: -156px;
			left:50%;
			margin-left: -265px;
		}

		.menu {
			position: relative;
			left: 17px;
			top: 86px;
			height: 250px;
			width: 150px;
		}

		.menu a {
			background-repeat: no-repeat;
			display: block;
			height: 22px;
			width: 138px;
			margin-bottom: 8px;
		}

		.menu a:hover {
			background-position: 1px 1px;
		}

		.menu li {
			width: 0px;
			overflow: hidden;
		}

		ul {
			padding: 0;
			margin: 0;
		}
	</style>
</head>
<body>
	<div class="main">
		<div class="menu">
			<ul>
				<a href="<?php echo base_url('material') ?>" style="background-image: url('<?php echo base_url('img/btn material.png') ?>')"><li>material</li></a>
				<a href="<?php echo base_url('software') ?>" style="background-image: url('<?php echo base_url('img/btn software.png') ?>')"><li>software</li></a>
				<a href="<?php echo base_url('notes') ?>" style="background-image: url('<?php echo base_url('img/btn notes.png') ?>')"><li>notes</li></a>
				<a href="<?php echo base_url('blog') ?>" style="background-image: url('<?php echo base_url('img/btn blog.png') ?>')"><li>blog</li></a>
				<a href="<?php echo base_url('ezine') ?>" style="background-image: url('<?php echo base_url('img/btn ezine.png') ?>')"><li>ezine</li></a>
				<a href="<?php echo base_url('about') ?>" style="background-image: url('<?php echo base_url('img/btn about.png') ?>')"><li>about</li></a>
				<a href="<?php echo base_url('') ?>" disabled style="opacity: 0.5; background-image: url('<?php echo base_url('img/btn guestbook.png') ?>')"><li>guestbook</li></a>
			</ul>
		</div>
		<div class="cover">
			<div class="updates"></div>
		</div>
	</div>
</body>
</html>