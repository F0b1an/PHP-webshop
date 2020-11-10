<?php
	require "../boot.php";

	//query: SELECT * FROM products ORDER BY id DESC LIMIT 3
	//resultaat
	//fetch
	
	$database = db();
	// haalt producten uit database met categorie gpu
	$products = $database->prepare('SELECT * FROM products WHERE category = "cpu" ORDER BY id DESC');
	try {
		$products->execute([]);
		$products->setFetchMode(PDO::FETCH_ASSOC);
		$products = $products->fetchALL();
	}
	catch(Exeption $e) {
		http_response_code(500);
		dd($e->getMessage());
	}

	//dd($products);


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
					<a href="index.php"><img src="images/logo2.png" alt="Pc Parts" style="border: 0;" class="logo" /></a>
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
					<h1>CPUs</h1>
					<?php foreach($products as $product) { ?>
					<div class="product">
						<div class="productphoto">
							<img src="images/<?php echo $product['image']; ?>" alt="cpu" class="foto" />
						</div>
						<div class="producttitle">
							<a href="product/<?php echo $product['slug']; ?>"><?php echo $product['title']; ?></a> - <button type="button" class="add-to-cart" data-url="<?php echo asset('cart/add.php?id='.$product['id']); ?>">Bestel!</button>
						</div>
						<div class="productdescription"><?php echo $product['short_desc']; ?></div>
						<div class="productprice"><?php echo $product['price']; ?></div></div><br />
						<?php } ?><br />				</div>
			</div>
			<div id="footer">
				
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="<?php echo asset('js/bucket.js'); ?>"></script>
</body>
</html>