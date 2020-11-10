<?php
	require "../boot.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pc Parts</title>
	<meta charset="utf-8">
	<meta name="keywords" content="webshop, pc, parts, gpu, cpu, case, moederbord">
	<meta name="author" content="Fabian">
	<link rel="stylesheet" type="text/css" href="<?php echo asset('styles/style.css'); ?>">
</head>
<body id="pcparts">
	<div id="siteline">
		<div id="container">
			<div id="header">
				<div id="headerleft">
					<a href="index.php"><img src="images/logo2.png" class="logo" alt="Pc Parts" style="border: 0;" /></a>
				</div>
				<div id="headerright">
					<img src="images/logorechts.png" alt="logo" class="logo" />
				</div>
			</div>
			<div id="navigation">
				<?php require 'partials/navigation.php'; ?>
			</div>
			<div id="content">
				<div id="contentcontainer">
					<h1>Pc Parts</h1><p></p><br />
					<div>De beste onderdelen voor een gaming pc.</div>				
				</div>
			</div>
			<div id="footer">
				<!-- <aside class="bucket" id="bucket">
					<?php include "partials/bucket.php"; ?>
				</aside> -->
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="<?php echo asset('js/bucket.js'); ?>"></script>
</body>
</html>