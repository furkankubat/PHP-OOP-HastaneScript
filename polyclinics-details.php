<?php 

require_once 'header.php'; 
$sql=$db->wread("polyclinics","polyclinics_id",$_GET['polyclinics_id']);
$row=$sql->fetch(PDO::FETCH_ASSOC);



?>
<div role="main" class="main">

	<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1 class="mt-1">Poliklinikler <span>Bölümlerimiz hakkında daha fazla bilgi edinin</span></h1>
				</div>
				<div class="col-lg-6">
					<ul class="breadcrumb">
						<li><a href="index.php">Anasayfa</a></li>
						<li class="active">Poliklinikler</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="row mt-5 mb-5">
			<div class="col-lg-3">

				<aside class="sidebar">
					<h4 class="font-weight-semibold mb-4">Poliklinikler</h4>

					<ul class="nav nav-list flex-column narrow mb-5">
						<li class="nav-item"><a class="nav-link active" href="demo-medical-departments-detail.html">Cardiology</a></li>
						<li class="nav-item"><a class="nav-link" href="demo-medical-departments-detail.html">Gastroenterology</a></li>
						<li class="nav-item"><a class="nav-link" href="demo-medical-departments-detail.html">Pulmonology</a></li>
						<li class="nav-item"><a class="nav-link" href="demo-medical-departments-detail.html">Dental</a></li>
						<li class="nav-item"><a class="nav-link" href="demo-medical-departments-detail.html">Gynecology</a></li>
						<li class="nav-item"><a class="nav-link" href="demo-medical-departments-detail.html">Hepatology</a></li>
					</ul>
				</aside>

			</div>

		
				<div class="col-lg-9">

					<div class="feature-box feature-box-style-2 mb-4">
						<div class="feature-box-icon d-none d-sm-block">
							<img width="50" src="nedmin/dimg/polyclinics/<?php echo $row['polyclinics_file'] ?>" alt="<?php echo $row['polyclinics_title'] ?>" class="img-fluid" />
						</div>
						<div class="feature-box-info pl-0 pl-sm-3">
							<h2 class="font-weight-semibold mb-3"><?php echo $row['polyclinics_title']; ?></h2>
							<p class="lead font-weight-normal"><?php echo mb_substr($row['polyclinics_content'], 0,535) ?></p>

							<img width="200" src="nedmin/dimg/polyclinics/<?php echo $row['polyclinics_file'] ?>" style="max-width: 260px;" alt="" class="float-right ml-sm-4 mb-4 img-fluid box-shadow-custom" /> 

							
						</div>

					</div>

				</div>

			

			</div>

		</div>

		<?php require_once 'footer.php' ?>