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
        				<a class="nav-link active mx-3" aria-current="page" href="#">Home</a>
					    <a class="nav-link mx-3" href="#">Services</a>
					    <li class="nav-item dropdown mx-3">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Other</a>
					        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					           	<li><a class="dropdown-item" href="#">About us</a></li>
					           	<li><a class="dropdown-item" href="#">Gallery</a></li>
					           	<li><a class="dropdown-item" href="#">Blog</a></li>
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
    <main id="main">
        <section>
          <div class="container" data-aos="fade-up">
            <div class="row">
              <div class="col-lg-12 text-center mb-5">
                <h1 class="page-title">About us</h1>
              </div>
            </div>
    
            <div class="row mb-5">
    
              <div class="d-md-flex post-entry-2 half">
                <a href="#" class="me-4 thumbnail">
                  <img src="assets/galeri3.jpg" alt="" class="img-fluid">
                </a>
                <div class="ps-md-5 mt-4 mt-md-0">
                  <div class="post-meta mt-4">About us</div>
                  <h2 class="mb-4 display-4">Company History</h2>
    
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                  <p>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
                </div>
              </div>
    
              <div class="d-md-flex post-entry-2 half mt-5">
                <a href="#" class="me-4 thumbnail order-2">
                  <img src="assets/galeri4.jpg" alt="" class="img-fluid">
                </a>
                <div class="pe-md-5 mt-4 mt-md-0">
                  <div class="post-meta mt-4">Mission &amp; Vision</div>
                  <h2 class="mb-4 display-4">Mission &amp; Vision</h2>
    
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
                  <p>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p>
                </div>
              </div>
    
            </div>
    
          </div>
        </section>
    
        <section class="mb-5 bg-light py-5">
          <div class="container" data-aos="fade-up">
            <div class="row justify-content-between align-items-lg-center">
              <div class="col-lg-5 mb-4 mb-lg-0">
                <h2 class="display-4 mb-4">Latest News</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rem eaque vel est asperiores iste pariatur placeat molestias, rerum provident ea maiores debitis eum earum esse quas architecto! Minima, voluptatum! Minus tempora distinctio quo sint est blanditiis voluptate eos. Commodi dolore nesciunt culpa adipisci nemo expedita suscipit autem dolorum rerum?</p>
                <p>At magni dolore ullam odio sapiente ipsam, numquam eius minus animi inventore alias quam fugit corrupti error iste laboriosam dolorum culpa doloremque eligendi repellat iusto vel impedit odit cum. Sequi atque molestias nesciunt rem eum pariatur quibusdam deleniti saepe eius maiores porro quam, praesentium ipsa deserunt laboriosam adipisci. Optio, animi!</p>
                <p><a href="#" class="more">View All Blog Posts</a></p>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-6">
                    <img src="assets/img/post-portrait-3.jpg" alt="" class="img-fluid mb-4">
                  </div>
                  <div class="col-6 mt-4">
                    <img src="assets/img/post-portrait-4.jpg" alt="" class="img-fluid mb-4">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</body>
</html>