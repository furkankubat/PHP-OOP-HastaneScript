<?php require_once 'header.php' ?>

<div role="main" class="main">

	<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1>Hakkımızda <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></h1>
				</div>
				<div class="col-lg-6">
					<ul class="breadcrumb pb-0">
						<li><a href="index.php">Anasayfa</a></li>
						<li class="active">Hakkımızda</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="row mt-5">
			<div class="col-lg-8">
				<h2 class="font-weight-semibold mb-3">Hakkımızda</h2>
				<?php echo $abouts['hakkimizda']; ?>
			</div>
			<!-- <div class="col-lg-4">

				<div class="owl-carousel owl-theme nav-inside mt-2" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
					<?php 
					$sql = $db->read("abouts",[
						"columns_name" => "abouts_must",
						"columns_sort" => "ASC"
					]);

					while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>

						<div>
							<?php 
							if (isset($row['abouts_file']) == true) { ?>
								<img src="nedmin/dimg/abouts/<?php echo $row['abouts_file'] ?>" alt="" class="img-fluid box-shadow-custom" />
							<?php } ?>
						
						</div>

						<?php } ?>

					</div>


				</div> -->
			</div>

			<div class="row mb-5">
				<div class="col">
					<div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
						<section class="toggle">
							<label>Ödeme Seçenekleri</label>
							<div class="toggle-content">
								<?php echo $abouts['ödeme']; ?>
							</div>
						</section>
						<section class="toggle">
							<label>Randevular</label>
							<div class="toggle-content">
								<?php echo $abouts['randevu']; ?>
							</div>
						</section>
						<section class="toggle">
							<label>Kabul Edilen Sigorta Planları</label>
							<div class="toggle-content">
								<?php echo $abouts['sigorta']; ?>
							</div>
						</section>
						<section class="toggle">
							<label>Politikalar</label>
							<div class="toggle-content">
								<?php echo $abouts['politika']; ?>
							</div>
						</section>
					</div>
				</div>
			</div>

		</div>

		<section class="call-to-action call-to-action-default call-to-action-big content-align-center mb-0 mt-3">
			<div class="container">
				<div class="row">
					<div class="col-sm-9 col-lg-9">
						<div class="call-to-action-content">
							<h3>"Sağlık, hayatta sahip olduğunuz en önemli şeydir!"</h3>
							<p class="mb-0">Randevu almak için hemen bizimle iletişime geçin.</p>
						</div>
					</div>
					<div class="col-sm-3 col-lg-3">
						<div class="call-to-action-btn">
							<a href="contact.php" target="_blank" class="btn btn-lg btn-primary">Bize Ulaşın</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php require_once 'footer.php' ?>