<?php require_once 'header.php'; ?>
<div role="main" class="main">

	<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1 class="mt-1">Doktorlar <span>Doktorlarımız hakkında daha fazla bilgi edinin</span></h1>
				</div>
				<div class="col-lg-6">
					<ul class="breadcrumb">
						<li><a href="index.php">Anasayfa</a></li>
						<li class="active">Doktorlar</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="team">
		<div class="container">

			<div class="row mt-5 mb-5">
				<div class="col">

					<h2 class="font-weight-semibold mb-3">Uzmanlarımızla Tanışın</h2>

					<p class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt velit eveniet iure nesciunt? Ex hic quisquam, sit repellat aliquid molestiae tempora earum delectus dolorem voluptatibus, aspernatur nam, nesciunt neque expedita!</p>

					<div id="porfolioAjaxBoxMedical" class="ajax-box ajax-box-init mb-4">

						<div class="bounce-loader">
							<div class="bounce1"></div>
							<div class="bounce2"></div>
							<div class="bounce3"></div>
						</div>

						<div class="ajax-box-content" id="porfolioAjaxBoxContentMedical"></div>

					</div>
					<div class="row portfolio-list sort-destination" >
						<?php 

						$doc = $db->read('doctors',[
							'columns_name' => 'doctors_must',
							'columns_sort' => 'ASC'
						]);

						while ($doct=$doc->fetch(PDO::FETCH_ASSOC)) { ?>


							<div class="col-md-6 col-lg-3 isotope-item cardiology">
								<div class="portfolio-item">
									<a href="doktorlar/<?php echo $db->seo($doct['doctors_namesurname']); ?>/<?php echo $doct['doctors_id'] ?>" class="text-decoration-none">
										<span class="thumb-info thumb-info-no-zoom thumb-info-hide-wrapper-bg">
											<span class="thumb-info-wrapper m-0">
												<img src="nedmin/dimg/doctors/<?php echo $doct['doctors_file'] ?>" class="img-fluid" alt="">
											</span>
											<span class="thumb-info-caption p-4">
												<span class="custom-thumb-info-title">
													<span class="custom-thumb-info-type font-weight-light text-4"><?php echo $doct['doctors_episode']; ?></span>
													<span class="custom-thumb-info-inner font-weight-semibold text-5"><?php echo $doct['doctors_namesurname']; ?></span>
													<i class="icon-arrow-right-circle icons font-weight-semibold text-5 "></i>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
						<?php } ?>






					</div>
					

				</div>
			</div>

		</div>
	</section>

	<?php require_once 'footer.php' ?>