<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Seller Main Page</title>
		<style type="text/css" src="Style/styleUserMain.css"></style>
		<script type="text/javascript" src="js/frameRev.js"></script>
	</head>
	<body>
        <?php
        if (!isset($_COOKIE['seller'])) {
            header("Location: login.php");
        }
        ?>
        <h1>Welcome Seller</h1>
		<div class="der"><span id="p" onclick="revFrame(0)"><h4>Your Products</h4></span><span id="b" onclick="revFrame(1)"><h4>Add a Product</h4></span><span id="s" onclick="revFrame(2)"><h4>Your Sales</h4></span></div>
		<div class="frame" id="0"><iframe src="" frameborder="0"></iframe></div>
		<div class="frame" id="1"><iframe src="seller_product_frame.php" frameborder="0"></iframe></div>
		<div class="frame" id="2"><iframe src="seller_sales_frame.php" frameborder="0"></iframe></div>
	</body>
</html>