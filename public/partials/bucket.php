<h1>Winkelmandje</h1>
<?php foreach($_SESSION['cart']['products'] as $cartProduct) { ?>
<div class="product">
	<div class="producttitle">
		<h2><?php echo $cartProduct['title']; ?></h2>
	</div>
	<div class="quantity">
		<?php echo $cartProduct['quantity']; ?>
		<button type="button" class="add-to-cart" data-url="<?php echo asset('cart/add.php?id='.$cartProduct['id']); ?>">+</button>
		<button type="button" class="remove-from-cart" data-url="<?php echo asset('cart/remove.php?id='.$cartProduct['id']); ?>">-</button>
	</div>
	<div class="productprice">
		€<?php echo $cartProduct['price']; ?>
	</div>
</div><br />
<?php } ?>
<div class="product">
	<div class="producttitle">
		<span>Totaalprijs</span>
	</div>
	<div class="productprice">€<?php echo $_SESSION['cart']['total']; ?></div>
</div><br /><a href="order.php" style="font-size: 1.5em;">Bestelling plaatsen</a>				