<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="assets/ico/favicon.ico">

		<title>Terry Johnson&rsquo;s Portfolio</title>

		<!-- Bootstrap core CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

			<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="style.css" rel="stylesheet">
	</head>
	<body>

		<?php
		$card_array = array(
								array(
											"img" => "insuregy.jpg",
											"title" => "Insuregy",
											"protocol-host" => "https://www.",
											"description" => "Design and development of WordPress content management system; site administration",
											"domain" => "insuregy.com"
								),

								array(
											"img" => "retailgroupny.jpg",
											"title" => "Retail Group of New York",
											"protocol-host" => "https://www.",
											"description" => "Design and development of WordPress content management system; site administration",
											"domain" => "retailgroupny.com"
								),

								array(
											"img" => "unitedrestaurantsny.jpg",
											"title" => "United Restaurants of New York",
											"protocol-host" => "https://www.",
											"description" => "Design and development of WordPress content management system; site administration",
											"domain" => "unitedrestaurantsny.com"
								),

								array(
											"img" => "wholesalegroupny.jpg",
											"title" => "Wholesale Group of New York",
											"protocol-host" => "https://www.",
											"description" => "Design and development of WordPress content management system; site administration",
											"domain" => "wholesalegroupny.com"
								),

								array(
											"img" => "homefront.jpg",
											"title" => "HomeFront",
											"protocol-host" => "http://www.",
											"description" => "Design and development of Drupal content management system; site administration",
											"domain" =>"homefrontprogram.org"
								)
		);

		$card_array_dv = array(
								array(
											"img" => "data-visualization-python.jpg",
											"title" => "Internet Users (per 100 People)",
											"modal" => true,
											"description" => "Created choropleth map using Python and Jupyter Notebook",
											"data_target" => "#map"
								),

								array(
											"img" => "data-visualization-friedlander-group.jpg",
											"title" => "Client Locations in New York State",
											"url" => "https://friedlandergroup.com/for-clients/map-of-client-locations-in-new-york-state/",
											"description" => "Created interactive and zoomable point map for friedlandergroup.com using Tableau",
											"external_link" => true

								),

								array(
											"img" => "data-visualization-homefront.jpg",
											"title" => "Communities Served",
											"url" => "http://www.homefrontprogram.org/communities-served",
											"description" => "Created interactive and zoomable polygon map for homefrontprogram.org using Tableau",
											"external_link" => true
								)
		);
		?>


		<header>
			<div class="collapse bg-dark" id="navbarHeader">
				<!--<div class="container">
					<div class="row">
						<div class="col-sm-8 col-md-7 py-4">
							<h4 class="text-white">About</h4>
							<p class="text-muted">I am a freelance web developer and site administrator.</p>
						</div>
						<div class="col-sm-4 offset-md-1 py-4">
							<h4 class="text-white">Contact</h4>
							<ul class="list-unstyled">
								<li><a href="#" class="text-white">Follow on Twitter</a></li>
								<li><a href="#" class="text-white">Like on Facebook</a></li>
								<li><a href="#" class="text-white">Email me</a></li>
							</ul>
						</div>
					</div>
				</div>-->
			</div>
			<div class="navbar navbar-dark bg-dark box-shadow">
				<div class="container d-flex justify-content-between">
					<a href="#" class="navbar-brand d-flex align-items-center">
						Terry Johnson&rsquo;s Portfolio
					</a>
					<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>-->
				</div>
			</div>
			<div class="container">
				<p class="lead tagline">I am a freelance web developer and site administrator</p>
			</div>

		</header>

		<main role="main">

			<section class="jumbotron text-center">
				<div class="container">
					<h1 class="jumbotron-heading">My Work</h1>
				</div>
			</section>

			<div class="container">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-websites" role="tab" aria-controls="pills-websites" aria-selected="true">Websites</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-data-visualizations" role="tab" aria-controls="pills-data-visualizations" aria-selected="false">Data Visualizations</a>
					</li>
				</ul>

				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-websites" role="tabpanel" aria-labelledby="pills-websites-tab">
						<p class="lead">Here are some websites I have built:</p>
						<div class="row">
							<?php for($n=0; $n<sizeof($card_array); $n++): ?>
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
									<div id="card<?php echo $n+1; ?>" class="card mb-4 box-shadow">
										<img class="card-img-top" src="assets/img/<?php echo $card_array[$n]["img"]; ?>" alt="Home page of <?php echo $card_array[$n]["domain"]; ?>">
										<div class="card-body">
											<h5 class="card-title"><?php echo $card_array[$n]["title"]; ?></h5>
											<p class="card-text">Services provided: <?php echo $card_array[$n]["description"]; ?></p>
											<a class="card-link" href="<?php echo $card_array[$n]["protocol-host"] . $card_array[$n]["domain"]; ?>">Visit <?php echo $card_array[$n]["domain"]; ?> <span class="fas fa-external-link-alt"></span></a>
										</div>
									</div>
								</div>
							<?php endfor; ?>
						</div>
					</div>

					<div class="tab-pane fade" id="pills-data-visualizations" role="tabpanel" aria-labelledby="pills-data-visualizations-tab">
						<div class="row">
							<?php for($x=0; $x<sizeof($card_array_dv); $x++): ?>
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
									<div class="data-viz-card card mb-4 box-shadow">
										<img class="card-img-top" src="assets/img/<?php echo $card_array_dv[$x]["img"]; ?>" alt="">
										<div class="card-body">
											<h5 class="card-title"><?php echo $card_array_dv[$x]["title"]; ?></h5>
											<p class="card-text"><?php echo $card_array_dv[$x]["description"]; ?></p>

											<?php if($card_array_dv[$x]["modal"]==true): ?>
												<a class="card-link" href="#" data-toggle="modal" data-target="<?php echo $card_array_dv[$x]["data_target"]; ?>">Open interactive map</a>

											<?php else: ?>
												<a class="card-link" href="<?php echo $card_array_dv[$x]["url"]; ?>">See interactive map<?php if($card_array_dv[$x]["external_link"]==true): ?> <span class="fas fa-external-link-alt"></span><?php endif; ?></a>
											<?php endif; ?>
										</div>
									</div>
								</div>
							<?php endfor; ?>
							<!--<div class="col-md-4">
								<div id="card2" class="card mb-4 box-shadow">
									<img class="card-img-top" src="assets/img/retailgroupny.jpg" alt="Home page of www.retailgroupny.com">
									<div class="card-body">
										<h5 class="card-title">Retail Group of New York</h5>
										<p class="card-text">Services provided: Design and development of WordPress content management system; site administration</p>
										<a class="card-link" href="https://www.retailgroupny.com">Visit www.retailgroupny.com <span class="fas fa-external-link-alt"></span></a>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div id="card3" class="card mb-4 box-shadow">
									<img class="card-img-top" src="assets/img/unitedrestaurantsny.jpg" alt="Home page of www.unitedrestaurantsny.com">
									<div class="card-body">
										<h5 class="card-title">United Restaurants of New York</h5>
										<p class="card-text">Services provided: Design and development of WordPress content management system; site administration</p>
										<a class="card-link" href="https://www.unitedrestaurantsny.com">Visit www.unitedrestaurantsny.com <span class="fas fa-external-link-alt"></span></a>
									</div>
								</div>
							</div>-->
						</div>
					</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="map" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-xl" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Internet Users (per 100 People)</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<div class="modal-body">
								<iframe width="1024" height="640" src="assets/plot_data.html"></iframe>
							</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer class="text-muted">
			<div class="container">
				<p class="float-right">
					<!--<a href="#">Back to top</a>-->
				</p>
			</div>
		</footer>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="assets/js/vendor/holder.min.js"></script>
	</body>
</html>