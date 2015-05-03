<html>
	<head>
		<title>Home page</title>

		<!-- CSS -->
		<link rel="stylesheet" href="/public/css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

		<!-- JS -->
		<script src="public/js/script.js"></script>
	</head>
	<body>
		<main>
			<header>
				<div class="top">
					<h3 class="logo">Adwise</h3>
					<nav>
						<a href="#" class="active">Questions</a>
						<a href="#">Users</a>
						<a href="#">Login</a>
						<a href="#">Sign up</a>
					</nav>
					<div class="clear-float"></div>
				</div>
				<div class="search-bar">
					<form action="" action="get">
						<input type="text" class="search-bar-input" placeholder="Search...">
						<button type="submit">
							<img src="/public/img/search-icon.png" alt="">
						</button>
					</form>
				</div>
			</header>
			<?php echo $content; ?>
			<footer>
				
			</footer>
		</main>
	</body>
</html>