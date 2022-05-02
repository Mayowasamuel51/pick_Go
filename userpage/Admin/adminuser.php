<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="\PickGo/fontawesome-free-6.0.0-beta3-web/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
	<style>
		body{
			background: #F6F7F8;
		}
	</style>
	
	<section class="columns">
		<div class="column card is-11-desktop mt-6 is-offset-0 ml-6">
			<h1 class="has-text-centered is-centered has-text-weight-bold is-size-3">PickGO</h1>
			<br>
			<header class="card-header-title ml-6">Search for A Customer</header>
			<form action="" method="get">
				<div class="is-flex ml-6 ">
						<p class="control has-icons-left has-icons-right">
								<input class="input ml-1 name" type="text" placeholder="Search for Customers "name="name">
								<span class="icon is-small is-left">
									<i class="fas fa-search"></i>
								</span>
								<span class="icon is-small is-right">
									<i class="fas fa-check"></i>
								</span>
						</p>
						<button class="button is-primary ml-5 " id="find">Search</button>
						<button class="button is-info ml-5 " id="show">Show All Data </button>
						<button class="button is-dark ml-5 " id="remove">Remove Display</button>
				</div>
				<div class="card-content" id="main">
					
				</div>
			</form>
		</div>
	</section>













<script src="jquery-3.6.0.min.js"></script>
<script src="remove.js"></script>
<script src="show.js"></script>
<script src="admin.js"></script>

</body>
</html>