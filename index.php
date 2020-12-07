<?php
include "Tree.php";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tree</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="tree">
	<ul class="main">
		<li class="main_parent">
		<?php $tree = new Tree; ?>
		</li>
	</ul>
</div>
</body>
</html>