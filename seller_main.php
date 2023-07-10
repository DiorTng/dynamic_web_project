<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grandeur Estates & Cars : Admin Main Page</title>
		<style type="text/css">
			.frame {
				display: none;
			}
			.der {
				display: grid;
				grid-template-columns: auto auto auto; 
			}
		</style>
		<script type="text/javascript">
			function revFrame(id) {
				for (var i=0 ; i<3 ; i++) {
					var div = document.getElementById(i);
					if (i==id) {
						div.style.display="block";
					} else {
						div.style.display="none";
					}
				}
			}
		</script>
	</head>
	<body>
        <?php
        if (!isset($_COOKIE['seller'])) {
            header("Location: login.php");
        }
        ?>
        <h1>Welcome Seller</h1>
		<div class="der"><span id="p" onclick="revFrame(0);"><h4>Your Products</h4></span><span id="b" onclick="revFrame(1);"><h4>Add a Product</h4></span><span id="s" onclick="revFrame(2);"><h4>Your Sales</h4></span></div>
		<div class="frame" id="0"><iframe src="" frameborder="0"></iframe></div>
		<div class="frame" id="1"><iframe src="" frameborder="0"></iframe></div>
		<div class="frame" id="2"><iframe src="seller_sales_frame.php" frameborder="0"></iframe></div>
	</body>
</html>