<?php
	require "../boot.php";

	//query: SELECT * FROM product ORDER BY id DESC LIMIT 3
	//resultaat
	//fetch
	
	$database = db();

	// query: SELECT * FROM product WHERE slug = :slug

	$product = $database->prepare('SELECT * FROM products WHERE slug = :slug');
	try {
		$product->execute([
			'slug' => $_GET['slug']
		]);
		$product->setFetchMode(PDO::FETCH_ASSOC);
		$product = $product->fetch();

		if(! $product) {
			header('Location: '.asset('404.php'));
		}
	}
	catch(Exeption $e) {
		http_response_code(500);
		dd($e->getMessage());
	}

	//dd($product);


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
					<a href="index.php"><img src="<?php echo asset('images/logo2.png'); ?>" alt="Pc Parts" style="border: 0;" class="logo" /></a>
				</div>
				<div id="headerright">
					<img src="<?php echo asset('images/logorechts.png'); ?>" alt="logo" class="logo" />
				</div>
			</div>
			<div id="navigation">
				<?php require 'partials/navigation.php'; ?>
			</div>
			<div id="content">
				<div id="contentcontainer">
					<h1>Productdetails</h1>
					<div class="productview">
						<div class="productphoto2">
							<img src="<?php echo asset('images/'.$product['image']); ?>" alt="Product" />
						</div>
						<div class="producttitle">
							<a href="index.php?product="><?php echo $product['title']; ?></a>
						</div>
						<div class="productdescription">
							<p><?php echo $product['short_desc']; ?></p>
							<p><?php echo $product['description']; ?></p>
						</div>
						<div class="productprice"><?php echo $product['price']; ?></div>
					</div>
					<br /><button type="button" class="add-to-cart" style="font-size: 1.5em;" data-url="<?php echo asset('cart/add.php?id='.$product['id']); ?>">Nu bestellen!</button>				</div>
			</div>
			<div id="footer">
				
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="<?php echo asset('js/bucket.js'); ?>"></script>
</body>
</html>