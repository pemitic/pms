<?php
	// Start from getting the hader which contains some settings we need
	require_once 'includes/header.php';

	// Redirect visitor to the login page if he is trying to access
	// this page without being logged in
	if (!isset($_SESSION['admin_session']) )
	{
		$commons->redirectTo(SITE_PATH.'index.php');
	}

	// require the admins class which containes most functions applied to admins
	require_once ROOT."../includes/classes/admin-class.php";

	// This could be a counstant
	$numberOfProductsToFetch = 25;
	
	$admins 	= new Admins($dbh);
	$products = $admins->fetchProducts($numberOfProductsToFetch);
?>
<html>
	<head>
		<title>Products Management System | Admin Panel</title>
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="public/css/CreativeButtons/css/component.css">
		<link rel="stylesheet" href="public/css/style.css">
	</head>

	<body>
		<main class="container">
			<a href="http://phpocean.com/tutorials/back-end/make-your-first-crud-with-php-case-of-a-product-management-system/34" class="btn btn-4 btn-4d icon-arrow-left">Return to tutorial</a>
			<div class="admin-pannel">
				
				<div class="dashboard">
					<h3>List Products</h3>
					<hr>
				<?php if (isset($products) && sizeof($products) > 0) :?>
					<?php foreach ($products as $product) :?>
						<li><a href="view-product-details.php?id=<?= $product->id ?>" title="Click to view product"><?= htmlspecialchars(strip_tags($product->product_name)) ?></a></li>
					<?php endforeach ?>
				<?php else: ?>
				<h3>No product is added yet.</h3>
				<?php endif ?>
				</div>
				<aside class="admin-menu">
					<p>Connected as, <?= strip_tags($_SESSION['admin_session']) ?></p>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="add-admin.php">Add Admin</a></li>
						<li><a href="add-product.php">Add Product</a></li>
						<li><a href="list-products.php">List Products</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</aside>

				<div style="clear:both"> </div>
			</div>

			<footer>
				<?= date("Y") ?> &copy; phpocean.com - Project by <a href="http://zooboole.me" target="_blank">zooboole</a> - Credit to <a href="http://tympanus.net/codrops/2013/06/13/creative-button-styles/" target="_blank">tympanus.net</a>
			</footer>
		</main>
	</body>
</html>
