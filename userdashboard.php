<?php
session_start();
include_once 'php/dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="FAITH Examination Scheduling System">
	<meta name="author" content="Bitsparks">
	<title>FAITH Examination Scheduling System</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >

	<!--CSS > Bootstrap Core tags-->
  <link rel = "stylesheet" type = "text/css" href = "theme/css/bootstrap.min.css">

  <!--CSS > Theme Core tag-->
  <link rel = "stylesheet" type = "text/css" href="theme/css/theme/theme.css">
  <link href="theme/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body id="page-top" class="index">

	<!-- Navigation -->
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="#page-top">
					<img style="max-width:150px; margin-top: -20px;" src="admin/images/faithlogo.png">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li class="page-scroll">
						<a href="#aboutuser">About</a>
					</li>
					<li class="page-scroll">
						<a href="#viewSched">View Your Schedule</a>
					</li>
					<li class="page-scroll">
						<a href="#changepass">Change Password</a>
					</li>
					<li class="page-scroll">
						<a href="php/logout.php">Logout</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<!-- Header -->
  <header style = "background-image: url('admin/images/background.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<img class="img-responsive" src="admin/images/faithlogo.png" alt="">
					<div class="intro-text">
						<span class="name">USER PAGE: Under Maintenance</span>
						<hr class="star-light">
						<span class="skills">Powered by Bitspraks - College of Computing and Information Technology - 2017</span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="aboutuser">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>About</h2>
					<hr class="star-light">
				</div>
			</div>
			<div class="row">
				<div class = "col col-md-6">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class ="col col-md-6">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
	</section>


	<section class="success" id="viewSched">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>View your Schedule</h2>
					<hr class="star-primary">
				</div>
			</div>
			<div class="row">

			</div>
		</div>
	</section>

	<!-- About Section -->
	<section id="changepass">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Change Password</h2>
					<hr class="star-light">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-2">
					<p>Hi! My name is Joshua Pasia. This website shows some of my creations in the field of graphic design and system development over the past few years. It also contains some of the arts and system that I have created since I started learning in IT development</p>
				</div>
				<div class="col-lg-4">
					<p>A Website Portfolio is an essential tool to getting more business and building your professional brand. In today's digital world, a portfolio is arguably more important than a resume, no matter what industry you work in.</p>
				</div>
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<!--<a href="#" class="btn btn-lg btn-outline">
					<i class="fa fa-download"></i>
				</a>-->
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer class="text-center" id = "footer">
	<div class="footer-above">
		<div class="container">
			<div class="row">
				<div class="footer-col col-md-4">
					<h3>Location</h3>
					<p>2 President Laurel Highway
						<br>Tanauan City, Batangas</p>
					</div>
					<div class="footer-col col-md-4">
						<h3>Contact Accounts</h3>
						<ul class="list-inline">
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-spotify"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="footer-col col-md-4">
						<h3>About Bitsparks: System Design Inc.</h3>
						<p>Lorem ipsum dolor sit amet, ut vix quidam eleifend. Duo ne ridens mediocritatem. Lorem mundi nullam in sed, mei nusquam consequuntur an.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-below">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						Copyright &copy; FAITH: Bitsparks 2017
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
		<a class="btn btn-primary" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>

	<!--script tags-->
	<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type = "text/javascript" src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type = "text/javascript" src = "theme/js/index.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script type = "text/javascript" src = "theme/js/theme.js"></script>

</body>

</html>
