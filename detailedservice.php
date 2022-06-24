<?php
	if (!isset($_SESSION))
    	session_start();
	if (empty($_SESSION['user_id'])) {
    	header("location:galeri.php");
    	exit();
	} else {
    	include_once $_SERVER['DOCUMENT_ROOT'].'/furnicare_new/database/user-dbop.php';
    	$objUser = new User();
    	$user_resource = $objUser->select_by_id($_SESSION['user_id']);
    	$user_data = mysqli_fetch_assoc($user_resource);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Furnicare</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
		rel="stylesheet">
	<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">

	<!-- Stylesheets -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style-detailedservice.css">

	<!-- Js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
	</script>

</head>

<body>
	<header>
		<nav id="header-nav" class="navbar fixed-top shadow-sm p-1 bg-body rounded">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="assets/Logo Furnicare.png" alt="..." width="150">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
					aria-label="Toggle navigation">
					<!-- 	<span class="navbar-toggler-icon"></span> -->
					<!-- we don't need to use this ^ otherwise the toggle button will always showed up -->
				</button>
				<div class="navbar-expand-lg" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-link mx-3" href="#">Services</a>
						<a class="nav-link mx-3" href="profile.php" target="_blank">Hi, <?php echo $user_data['full_name']?></a>
						<!-- Menu lists -->
					</div>
					<!-- Menu container -->
				</div>
				<!-- Navbar container -->
			</div>
			<!-- Navbar -->
		</nav>
		
	</header>

    <div class="container-fluid" id="services">
		<div class="container">
			<p id="span-header">Pick a professional</p>
			<div class="row" id="row-p2">
				<!-- Foto service -->
				<div class="col-4">
					<img class="img" src="assets/image 2.png" alt=" ">
				</div>
				<div class="content-service col-6">
					<div id="bg-white">
						<h2><u>Andrea Fernandez</u></h2>
						<h3><i>Woods specialist</i></h3>
						<p>Andrea is a professional wood craftman who has 10+ years in the field. Specialized in wood-made furnitures, your living room would look like a brand new after being handled by him.
                            Available now.</p>
						<p id="start-from">Rp. 199.000,-</p>
						<a href="#" target="_blank"><button type="button" class="btn btn-primary"
								id="services-button">Book Now</button></a>
					</div>
				</div>
			</div>
			<div class="row" id="row-p2">
				<!-- Foto service -->
				<div class="col-4">
					<img class="img" src="assets/image 2.png" alt=" ">
				</div>
				<div class="content-service col-6">
					<div id="bg-white">
						<h2><u>Andrea Fernandez</u></h2>
						<h3><i>Woods specialist</i></h3>
						<p>Andrea is a professional wood craftman who has 10+ years in the field. Specialized in wood-made furnitures, your living room would look like a brand new after being handled by him.
                            Available now.</p>
						<p id="start-from">Rp. 199.000,-</p>
						<a href="#" target="_blank"><button type="button" class="btn btn-primary"
								id="services-button">Book Now</button></a>
					</div>
				</div>
			</div>

			<div class="row" id="row-p2">
				<!-- Foto service -->
				<div class="col-4">
					<img class="img" src="assets/image 2.png" alt=" ">
				</div>
				<div class="content-service col-6">
					<div id="bg-white">
						<h2><u>Andrea Fernandez</u></h2>
						<h3><i>Woods specialist</i></h3>
						<p>Andrea is a professional wood craftman who has 10+ years in the field. Specialized in wood-made furnitures, your living room would look like a brand new after being handled by him.
                            Available now.</p>
						<p id="start-from">Rp. 199.000,-</p>
						<a href="#" target="_blank"><button type="button" class="btn btn-primary"
								id="services-button">Book Now</button></a>
					</div>
				</div>
			</div>
		</div>
</body>

</html>