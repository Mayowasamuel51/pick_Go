<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>

<?php

	include $_SERVER['DOCUMENT_ROOT'].'\PickGo/userpage/Backend/functions.php';
	$all_customer = new Controller();
	echo $all_customer->allCustomers();

?>




	
</body>
</html>