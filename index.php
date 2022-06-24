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
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</head>

<body>
	<header>
		<nav id="header-nav" class="navbar fixed-top shadow-sm p-1 bg-body rounded">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="assets/Logo Furnicare.png" alt="..." width="150">
				</a>
    			</button>
    			<div class="navbar-expand-lg" id="navbarNavAltMarkup">
      				<div class="navbar-nav">
        				<a class="nav-link mx-3" href="#home">Home</a>
					    <a class="nav-link mx-3" href="#services">Services</a>
					    <li class="nav-item dropdown mx-3">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Other</a>
					        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					           	<li><a class="dropdown-item" href="about-us.php">About us</a></li>
					           	<li><a class="dropdown-item" href="galeri.php">Gallery</a></li>
					           	<li><a class="dropdown-item" href="#blog">Blog</a></li>
					        </ul>
				        </li>
				        <a href="./login.php" target="_blank"><button type="button" class="btn btn-primary" id="header-home">Get Started</button></a>

			      	<!-- Menu lists -->
			      	</div>
			    <!-- Menu container -->
			    </div>
			<!-- Navbar container -->
			</div>
		<!-- Navbar -->
		</nav>
	</header>

	<div class="container-fluid" id="home">
		<div class="row" id="row-p1">
			<div class="col-6">
				<img src="assets/livingroom_1.png" id="livingroom" alt="...">
			</div>
			<div class="col-5">
				<p class="caption-main">Professional <br>furniture <br>detailing and repair</p>
				<p class="caption-italic">Book a service now, get a 15% discount</p>
				<a href="./login.php" target="_blank"><button type="button" class="btn btn-primary" id="service-home">Book a service</button></a>
			</div>
		<!-- Row Service 1 -->
		</div>
	<!-- Container-fluid -->
	</div>
		
	<div class="container-fluid" id="services">
		<div class="container">
			<p id="span-header">Our Services</p>

			<div class="row" id="row-p2">
				<!-- Foto service -->
				<div class="col-4">
					<img class="img" src="assets/service-woods.png" alt=" ">
				</div>
					<div class="content-service col-6">
						<div id="bg-white">
							<h2><u>Woods</u></h2>
							<h3><i>Scratches, dents, missing peaces, <br>repaint, etc.</i></h3>
							<p>We use the safest environmentally friendly products to make your furniture look beautiful <br>again without inconveniencing you or your guests</p>
							<a href="./login.php" target="_blank"><button type="button" class="btn btn-primary" id="services-button">Contact Us</button></a>
						</div>
					</div>
			</div>

			<div class="row" id="row-p3">
				<!-- Foto service -->
				<div class="col-4">
					<img class="img" src="assets/service-leather.png" alt=" ">
				</div>
					<div class="content-service col-6">
						<div id="bg-white">
							<h2><u>Leather</u></h2>
							<h3><i>Scratches, dents, missing peaces, <br>repaint, etc.</i></h3>
							<p>We use the safest environmentally friendly products to make your furniture look beautiful <br>again without inconveniencing you or your guests</p>
							<a href="./login.php" target="_blank"><button type="button" class="btn btn-primary" id="services-button">Contact Us</button></a>
						</div>
					</div>
			</div>

			<div class="row" id="row-p4">
				<!-- Foto service -->
				<div class="col-4">
					<img class="img" src="assets/service-woods.png" alt=" ">
				</div>
					<div class="content-service col-6">
						<div id="bg-white">
							<h2><u>Woods</u></h2>
							<h3><i>Scratches, dents, missing peaces, <br>repaint, etc.</i></h3>
							<p>We use the safest environmentally friendly products to make your furniture look beautiful <br>again without inconveniencing you or your guests</p>
							<a href="./login.php" target="_blank"><button type="button" class="btn btn-primary" id="services-button">Contact Us</button></a>
						</div>
					</div>
			</div>
		<!-- Container -->
		</div>
	<!-- Container-fluid -->
	</div>

	</div>
	<h1 class="text-latestpost text-center" id="blog">Latest post</h1>
	<div class="row">
		<div class="background-content1 col-lg-6">
			<div class="blog-content">
				<img class="gambar-content" src="assets/blogimg.png" alt="">
				<h3 class="text-content">How to safely clean your leathered sofas from dust</h3>
				<div class="row">
					<div class="col-lg-6">
						<p>
							<span>
								<img src="assets/iconcal.png" alt="">
							</span>
							May 2022
						</p>
					</div>
					<div class="col-lg-6">
						<p>
							<span>
								<img src="assets/iconpaper.png" alt="">
							</span>
							Tips & tricks
						</p>
					</div>
				</div>
			</div>
		</div>
			<div class="background-content2 col-lg-6">
				<div class="blog-content">
					<img class="gambar-content" src="assets/blogimg.png" alt="">
					<h3 class="text-content">How to safely clean your leathered sofas from dust</h3>
					<div class="row">
						<div class="col-lg-6">
							<p>
								<span>
									<img src="assets/iconcal.png" alt="">
								</span>
								May 2022
							</p>
						</div>
						<div class="col-lg-6">
							<p>
								<span>
									<img src="assets/iconpaper.png" alt="">
								</span>
								Tips & tricks
							</p>
						</div>
					</div>

				</div>
			</div>
	</div>
</body>
</html>