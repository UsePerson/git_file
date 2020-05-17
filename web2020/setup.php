<!DOCTYPE html>
<html lang= "en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="This web is FJU CSIE web project -- chatroom project">
		<meta name="author" content="CrazyFire, DogQ, Nicky, USER">
		<meta name="generator" content="Jekyll v4.0.1">

		<title>FJU ChatRoom</title>
		<!-- bootstrap css include -->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/c78a8bbd32.js" crossorigin="anonymous"></script>
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
		<link href="/css/setup.css" rel="stylesheet">
	</head>

	<body>
		<header>
			<div class="navbar navbar-expand-md navbar-dark fixed-top bg-dark d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm">
				<nav class="navbar navbar-expand-md navbar-dark my-0 mr-md-auto font-weight-normal justify-content-between">
					<a class="navbar-brand text-white" href="/mach.php">FJU ChatRoom</a>
				</nav>
				<a class="btn btn-outline-light my-2 my-md-0 mr-md-3" href="/setup.php">
					<i class="fas fa-users-cog"></i>
				</a>
			</div>
		</header>
		
		<main role="main" class="container marketing">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<div class="container">
					<div class="py-5 text-center">
						<h1>Setting</h1>
					</div>
				</div>
			</div>
			
			<div class="h3 my-2 my-md-0 mr-md-3 mb-3 font-weight-normal justify-content-between">
				<div class="col-md-8 order-md-1">
					<h4 class="mb-3">User Setting</h4>
					<form class="needs-validation" novalidate>
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="firstName">First name</label>
								<input type="text" class="form-control" id="firstName" placeholder="" value="" required>
								<div class="invalid-feedback">
									Valid first name is required.
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="lastName">Last name</label>
								<input type="text" class="form-control" id="lastName" placeholder="" value="" required>
								<div class="invalid-feedback">
									Valid last name is required.
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label for="username">Username</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">@</span>
								</div>
								<input type="text" class="form-control" id="username" placeholder="Username" required>
								<div class="invalid-feedback" style="width: 100%;">
									Your username is required.
								</div>
							</div>
						</div>

						<div class="mb-3">
							<label for="email">Email <span class="text-muted"></span></label>
							<input type="email" class="form-control" id="email" placeholder="you@example.com">
							<div class="invalid-feedback">
								Please enter a valid email address for updates.
							</div>
						</div>

						<div class="mb-3">
							<label for="password">Password <span class="text-muted"></span></label>
							<input type="password" class="form-control" id="Password" placeholder="Password">
							<div class="invalid-feedback">
								Please enter a valid Password for updates.
							</div>
						</div>

						<div class="mb-3">
							<label for="rpassword">Recheck Password <span class="text-muted"></span></label>
							<input type="rpassword" class="form-control" id="RPassword" placeholder="Password">
							<div class="invalid-feedback">
								Please enter a valid Password for recheck updates.
							</div>
						</div>

						<div class="row">
							<div class="col-md-5 mb-3">
								<label for="gender">Gender</label>
								<select class="custom-select d-block w-100" id="gender" required>
									<option value="">Choose...</option>
									<option>Man</option>
									<option>Woman</option>
									<option>Others</option>
								</select>
								<div class="invalid-feedback">
									Please select a valid gender.
								</div>
							</div>

							<div class="col-md-4 mb-3">
								<label for="age">Age <span class="text-muted"></span></label>
								<input type="age" class="form-control" id="Age" placeholder="age...">
								<div class="invalid-feedback">
									Please enter a valid Age for updates.
								</div>
							</div>
						</div>
						<button class="btn btn-primary btn-lg btn-block" type="submit">Continue to setup</button>
					</form>
				</div>
			</div>
		</main>

		

		<!-- bootstrap JS include -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>