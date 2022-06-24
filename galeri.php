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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
	<header>
		<nav id="header-nav" class="navbar fixed-top shadow-sm p-1 bg-body rounded">
			<div class="container">
				<a class="navbar-brand" href="service.html">
					<img src="assets/Logo Furnicare.png" alt="..." width="150">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      			<!-- 	<span class="navbar-toggler-icon"></span> -->
      			<!-- we don't need to use this ^ otherwise the toggle button will always showed up -->
    			</button>
    			<div class="navbar-expand-lg" id="navbarNavAltMarkup">
      				<div class="navbar-nav">
        				<a class="nav-link active mx-3" href="index.php">Home</a>
					    <a class="nav-link mx-3" href="index.php#services">Services</a>
					    <li class="nav-item dropdown mx-3">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Other</a>
					        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					           	<li><a class="dropdown-item" href="about-us.php">About us</a></li>
					           	<li><a class="dropdown-item" href="#">Gallery</a></li>
					           	<li><a class="dropdown-item" href="blog.php">Blog</a></li>
					        </ul>
				        </li>
				        <a href="./login.html"><button type="button" class="btn btn-primary" id="header-home">Get Started</button></a>

			      	<!-- Menu lists -->
			      	</div>
			    <!-- Menu container -->
			    </div>
			<!-- Navbar container -->
			</div>
		<!-- Navbar -->
		</nav>
	</header>

    <div class= "font1" >
        <h1>
        Gallery
        </h1>
    </div>
	<!-- Gallery -->
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="assets/galeri1.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
  
      <img
        src="assets/galeri2.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Wintry Mountain Landscape"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="assets/galeri3.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Mountains in the Clouds"
      />
  
      <img
        src="assets/galeri4.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="assets/galeri5.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Waves at Sea"
      />
  
      <img
        src="assets/galeri7.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Yosemite National Park"
      />
    </div>
  </div>
  <!-- Gallery -->
</body>