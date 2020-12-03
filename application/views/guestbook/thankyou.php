<!DOCTYPE html>
<html>
<head>
	<title>tomual - personal site and laboratory</title>
	<style>
		@font-face
		{
			font-family: Volter;
			src: url('<?php echo base_url('Volter.ttf') ?>')
		}
		h1 {
			width: 0px;
			overflow: hidden;
		}
		body {
			background-color: #486B9F;
			color: #3C5884;
			margin: 0px;
			padding: 48px;
			padding-bottom: 0;
			font-family: Volter, sans-serif;
			font-size: 9px;
		}
		.guestbook-header {
			background-image: url('<?php echo base_url('img/guestbook top.png') ?>');
			background-repeat: no-repeat;
			width: 552px;
			padding-top: 48px;
			padding-left: 100px;
			padding-right: 48px;
			padding-bottom: 24px;
			box-sizing: border-box;
			color: #FFF;
		}
		.guestbook-mid {
			background-image: url('<?php echo base_url('img/guestbook mid.png') ?>');
			background-repeat: no-repeat;
			width: 522px;
			height: 26px;
			width: 100%;
		}
		.guestbook-main {
			background-image: url('<?php echo base_url('img/guestbook bg.png') ?>');
			background-repeat: repeat-y;
			width: 522px;
			padding-top: 18px;
			padding-left: 48px;
			height: 100vh
		}
		.entries-header {
			width: 450px;
			border-bottom: 1px solid #FFF;
		}
		hr {
			width: 24px;
			margin: 12px 0;
			border: 1px dashed#8da1bf;
		}
		a {
			color: #FFF;
		}
		.centered {
			text-align: center;
			width: 352px;
		}
	</style>
</head>
<body>
	<div>
		<a href="<?php echo base_url() ?>">Back to tomual.com</a>
		<div class="guestbook-header">
			<h1>Guestbook</h1>
			<div class="centered">
				<p>Thank you for your entry!</p>
				<p><a href="<?php echo base_url('guestbook') ?>">Back to guestbook</a></p>
			</div>
		</div>
	</div>
</body>
</html>