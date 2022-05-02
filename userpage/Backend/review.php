<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
	<style>
			body{
				background: #1481BA;
			}
	</style>


	<?php 
	include 'functions.php';
	if (isset($_POST['btn'])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$deliverytype = $_POST['deliverytype'];
		$deliveryfood = $_POST['deliveryfood'];
		$wishes = $_POST['wishes'];
		$time = time();
		$date = date("y-m-d",$time);
		$enterdata = new Controller();



		if ($deliveryfood === 'pizza') {
			$pizza_price = 9000;
			$enterdata->insertCustomer($name,$phone,$address,$deliverytype,$pizza_price,$deliveryfood,$date,$wishes);
			echo "
				<div class='card is-half column is-offset-3'>
					<header class='is-size-4 has-text-weight-bold ml-6 is-centered card-header-title'>
						Your Order Has been Seen</header>
						<h1 class='has-text-weight-bold has-text-centered'>Review Orders</h1>
						<div class='card-content'>
						<p class='is-size-4'>Your Name</p>
						".$name."
						<p class='is-size-4'>Your Address</p>
						".$address."
						<p class='is-size-4'>Your Phone</p>
						".$phone."
						<p class='is-size-4'>Delivery Type</p>
						".$deliverytype."
						<p class='is-size-4'>Delivery Food</p>
						".$deliveryfood."
						<p class='is-size-4'>Your Total Price</p>
						".$pizza_price."
						<p class='is-size-4'>Your Wishes</p>
						".$wishes."
						</div>
						<a href='\PickGo/userpage/orderpage.html'>Back Home </a>
				</di>";
		}
		elseif($deliveryfood === 'cake') {
			$cake_price = 2000;
			$enterdata->insertCustomer($name,$phone,$address,$deliverytype,$cake_price,$deliveryfood,$date,$wishes);
			echo "
				<div class='card is-half column is-offset-3'>
					<header class='is-size-4 has-text-weight-bold ml-6 is-centered card-header-title'>
						Your Order Has been Seen</header>
						<h1 class='has-text-weight-bold has-text-centered'>Review Orders</h1>
						<div class='card-content'>
						<p class='is-size-4'>Your Name</p>
						".$name."
						<p class='is-size-4'>Your Address</p>
						".$address."
						<p class='is-size-4'>Your Phone</p>
						".$phone."
						<p class='is-size-4'>Delivery Type</p>
						".$deliverytype."
						<p class='is-size-4'>Delivery Food</p>
						".$deliveryfood."
						<p class='is-size-4'>Your Total Price</p>
						".$cake_price."
						<p class='is-size-4'>Your Wishes</p>
						".$wishes."
						</div>
						<a href='\PickGo/userpage/orderpage.html'>Back Home </a>
				</di>";
		}
		elseif($deliveryfood === 'pepper') {
			$pepper_price = 4000;
			$enterdata->insertCustomer($name,$phone,$address,$deliverytype,$pepper_price,$deliveryfood,$date,$wishes);
			echo "
				<div class='card is-half column is-offset-3'>
					<header class='is-size-4 has-text-weight-bold ml-6 is-centered card-header-title'>
						Your Order Has been Seen</header>
						<h1 class='has-text-weight-bold has-text-centered'>Review Orders</h1>
						<div class='card-content'>
						<p class='is-size-4'>Your Name</p>
						".$name."
						<p class='is-size-4'>Your Address</p>
						".$address."
						<p class='is-size-4'>Your Phone</p>
						".$phone."
						<p class='is-size-4'>Delivery Type</p>
						".$deliverytype."
						<p class='is-size-4'>Delivery Food</p>
						".$deliveryfood."
						<p class='is-size-4'>Your Total Price</p>
						".$pepper_price."
						<p class='is-size-4'>Your Wishes</p>
						".$wishes."
						</div>
						<a href='\PickGo/userpage/orderpage.html'>Back Home </a>
				</di>";
		}

	}

	 ?>
	
</body>
</html>