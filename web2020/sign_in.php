<!DOCTYPE html>
<html lang= "en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="This web is FJU CSIE web project -- chatroom project">
		<meta name="author" content="CrazyFire, DogQ, Nicky, USER">
		<meta name="generator" content="Jekyll v4.0.1">

		<title>Sign in | ChatRoom</title>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<!-- bootstrap css include -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
	  
			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 3.5rem;
				}
			}
		</style>
		<!-- Custom styles for this template -->
		<link href="/css/sign_in.css" rel="stylesheet">
	</head>

	<body>
		<header>
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark fixed-top border-bottom shadow-sm">
				<nav class="navbar navbar-expand-md navbar-dark my-0 mr-md-auto font-weight-normal justify-content-between">
					<a class="navbar-brand text-white" href="/index.html">FJU ChatRoom</a>
				</nav>
				<a class="btn btn-outline-light my-2 my-md-0 mr-md-3" href="/sign_up.php">Sign up</a>
				<a class="btn btn-outline-light my-2 my-md-0 mr-md-3" href="/sign_in.php">Sign in</a>
			</div>
		</header>
		<form class="form-signin">
			<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</body>
</html>