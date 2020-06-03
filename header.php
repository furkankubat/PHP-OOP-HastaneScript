<?php require_once 'ozel-cekim.php'; ?>
<!DOCTYPE html>
<html>
<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	

	<title><?php echo $settings['title']; ?></title>	

	<meta name="keywords" content="<?php echo $settings['keywords'] ?>" />
	<meta name="description" content="<?php echo $settings['description'] ?>">
	<meta name="author" content="<?php echo $settings['author'] ?>">
	
	<base href="http://localhost/medikal/index.php">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.min.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

	<!-- Demo CSS -->
	<link rel="stylesheet" href="css/demos/demo-medical.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="css/skins/skin-medical.css"> 

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.min.js"></script>

</head>


<body>

	<div class="body">
		<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 40, 'stickySetTop': '-40px', 'stickyChangeLogo': false}">
			<div class="header-body">
				<div class="header-top header-top header-top-style-3 header-top-custom">
					<div class="container">
						<div class="header-row">
							<div class="header-column justify-content-end">
								<div class="header-row">
									<nav class="header-nav-top float-right">
										<ul class="nav nav-pills">
											<li class="d-none d-sm-block">
												<span class="ws-nowrap"><i class="icon-location-pin icons"></i> <?php echo $settings['il']; ?></span>
											</li>
											<li class="d-none d-sm-block">
												<span class="ws-nowrap"><i class="icon-envelope-open icons"></i> <a class="text-decoration-none" href="mailto:mail@example.com"><?php echo $settings['email']; ?></a></span>
											</li>
											<li>
												<span class="ws-nowrap"><i class="icon-call-out icons"></i></i> <?php echo $settings['phone']; ?></span>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-row">
								<div class="header-logo">
									<a href="index.php">
										<img alt="Porto" width="143" height="40" src="nedmin/dimg/settings/<?php echo $settings['logo'] ?>">
									</a>
								</div>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-row">
								<div class="header-nav">
									<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
										<nav class="collapse">
											<ul class="nav nav-pills" id="mainNav">
												<li class="dropdown-full-color dropdown-secondary">
													<a class="nav-link active" href="index.php">
														ANASAYFA
													</a>
												</li>
												<li class="dropdown-full-color dropdown-secondary">
													<a class="nav-link" href="about.php">
														HAKKIMIZDA
													</a>
												</li>

												<li class="dropdown-full-color dropdown-secondary">
													<a class="nav-link" href="polyclinics.php">
														POLİKLİNİKLER
													</a>
												</li>
												
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="doctors.php">
															DOKTORLAR
														</a>
													</li>
													
													
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="contact.php">
															İLETİŞİM
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fa fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
