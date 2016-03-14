<?php
	// Start from getting the hader which contains some settings we need
	require_once 'includes/header.php';

	// Redirect visitor to the login page if he is trying to access
	// this page without being logged in
	if (!isset($_SESSION['admin_session']) )
	{
		$commons->redirectTo(SITE_PATH.'index.php');
	}

	// Get the product ID
	$productId = isset($_GET['id']) && intval($_GET['id']) > 0 ? intval($_GET['id']) : 0;

	if ($productId > 0) {
		// require the admins class which containes most functions applied to admins
		require_once ROOT."../includes/classes/admin-class.php";

		$admins 	= new Admins($dbh);
		$productDetails = $admins->getAProduct($productId);
	}
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
					
				<?php if (isset($productDetails) && sizeof($productDetails) > 0) : $product = $productDetails[0]; ?>
					<!-- We will use a simple table to display the product -->
					<h1><?= htmlentities(strip_tags($product->product_name)) ?></h1>
					<hr>
					<table width="100%" border="0">

						<tr>
							<td>Price</td>
							<td>: <strong><?= htmlentities(strip_tags($product->product_price)) ?></strong> </td>
						</tr>
						<tr>
							<td>Expiry date</td>
							<td>: <strong><?= htmlentities(strip_tags($product->product_expires_on)) ?></strong> </td>
						</tr>

						<tr>
							<td colspan="2">
							<br>
								<?= htmlentities(strip_tags(nl2br($product->product_description))) ?>
							</td>
						</tr>

					</table>
						<br>
						<hr>
						<br>
					<ul class="btns">
						<li><a href="edit-product.php?id=<?= $product->id ?>" class="btn-1a">Edit</a></li>
						<li><a href="delete-product.php?id=<?= $product->id ?>" class="btn-1a" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></li>

					</ul>

				<?php else: ?>
				<h3>No product is select.</h3>
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
