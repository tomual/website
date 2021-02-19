<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>tomacoin</title>
<style type="text/css">

body {
	padding: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-left: 50px;
	margin-bottom: 0px;
	font-family: Verdana;
	letter-spacing: 1px;
	font-size: 10px;
	background-repeat:repeat;
}

button {
	font-size: 10px;
}

section {
	background: #FFF;
	padding: 15px;
	text-align: center;
	margin: auto;
	margin-top: 100px;
	width: 180px;
	height: 180px;
	border: dotted 1px #555;
}
</style>
</head>

<body onload="init()" style="">

<section>

<?php
$images = scandir(getcwd(), 1);
sort($images);
?>

<script>

var imgs = <?php echo json_encode($images); ?>;

var max = imgs.length - 2;
var current = 2;

function init()
{
	document.body.style.backgroundImage = "url(" + imgs[current] + ")";
	imgname.innerHTML = imgs[current];
	imgshow.innerHTML = "<img src='" + imgs[current] + "' />";
}

function next()
{
	if (current < max) {
		current++;
		document.body.style.backgroundImage = "url(" + imgs[current] + ")";
		imgname.innerHTML = imgs[current];
		imgshow.innerHTML = "<img src='" + imgs[current] + "' />";
	}
}

function prev()
{
	if (current > 2) {
		current--;
		document.body.style.backgroundImage = "url(" + imgs[current] + ")";
		imgshow.innerHTML = "<img src='" + imgs[current] + "' />";
		imgname.innerHTML = imgs[current];
	}
}

</script>
<button type="button" onclick="prev()">Previous</button>
<button type="button" onclick="next()">Next</button>
<p id="imgname"></p>
<span id="imgshow"></span>
<br /><br />


</section>
</body>
</html>
