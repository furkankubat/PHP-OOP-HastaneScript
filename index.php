
<?php 
require_once 'header.php'; 
?>

<div role="main" class="main">

	<div class="slider-container rev_slider_wrapper" style="height: 650px;">
		<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'bullets': {'enable': true, 'direction': 'vertical', 'h_align': 'right', 'v_align': 'center', 'space': 5}, 'arrows': {'enable': false}}}">
			<?php 

			$sql = $db->read("sliders",[
				"columns_name" => "sliders_must",
				"columns_sort" => "ASC"
			]);
			$say=0;
			while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {$say++; ?>
				

				<ul>
					<li data-transition="fade" class="<?php echo $say==1 ? 'active' : '' ?>">
						<img src="nedmin/dimg/sliders/<?php echo $row['sliders_file'] ?>"  
						alt=""
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat"
						class="rev-slidebg">

						<div class="tp-caption main-label"
						data-x="left" data-hoffset="25"
						data-y="center" data-voffset="-5"
						data-start="1500"
						data-whitespace="nowrap"						 
						data-transform_in="y:[100%];s:500;"
						data-transform_out="opacity:0;s:500;"
						style="z-index: 5; font-size: 1.5em; text-transform: uppercase;"
						data-mask_in="x:0px;y:0px;">20 Yıl Seninle İlgileniyor</div>

						<div class="tp-caption main-label"
						data-x="left" data-hoffset="25"
						data-y="center" data-voffset="-55"
						data-start="500"
						style="z-index: 5; text-transform: uppercase; font-size: 52px;"
						data-transform_in="y:[-300%];opacity:0;s:500;">Uzmanlar</div>

						<div class="tp-caption bottom-label"
						data-x="left" data-hoffset="25"
						data-y="center" data-voffset="40"
						data-start="2000"
						style="z-index: 5; border-bottom: 1px solid #fff; padding-bottom: 3px;"
						data-transform_in="y:[100%];opacity:0;s:500;" style="font-size: 1.2em;">Bursa'dayız</div>
					</li>


					<li data-transition="fade">
						<img src="nedmin/dimg/sliders/<?php echo $row['sliders_file'] ?>"  
						alt=""
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat"
						class="rev-slidebg">

						<div class="tp-caption main-label"
						data-x="left" data-hoffset="25"
						data-y="center" data-voffset="-5"
						data-start="1500"
						data-whitespace="nowrap"						 
						data-transform_in="y:[100%];s:500;"
						data-transform_out="opacity:0;s:500;"
						style="z-index: 5; font-size: 1.5em; text-transform: uppercase;"
						data-mask_in="x:0px;y:0px;">Tıbbi randevu almak için şimdi bizimle konuşun</div>

						<div class="tp-caption main-label"
						data-x="left" data-hoffset="25"
						data-y="center" data-voffset="-55"
						data-start="500"
						style="z-index: 5; text-transform: uppercase; font-size: 52px;"
						data-transform_in="y:[-300%];opacity:0;s:500;">Tıbbi Randevu</div>

						<div class="tp-caption bottom-label"
						data-x="left" data-hoffset="25"
						data-y="center" data-voffset="40"
						data-start="2000"
						style="z-index: 5; padding-bottom: 3px;"
						data-transform_in="y:[100%];opacity:0;s:500;" style="font-size: 1.2em;"><a href="">Çevrimiçi veya Telefon Üzerinden</a></div>
					</li>
				</ul>
			<?php } ?>


		</div>
	</div>


	<section class="section section-no-border">
		<div class="container">
			<div class="row pt-3">
				<div class="col">
					<h2 class="font-weight-semibold mb-0">Poliklinikler</h2>
				</div>
			</div>
			<div class="row mt-4">

				<?php 

				$pol = $db->read("polyclinics",[
					"columns_name" => "polyclinics_must",
					"columns_sort" => "ASC"
				]);

				while ($poli=$pol->fetch(PDO::FETCH_ASSOC)) { ?>

					<div class="col-lg-4">
						<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
							<div class="feature-box-icon" style="min-width: 4.7rem;">
								<img width="50" src="nedmin/dimg/polyclinics/<?php echo $poli['polyclinics_file'] ?>" alt class="img-fluid" />
							</div>
							<div class="feature-box-info">
								<h4 class="font-weight-semibold"><a href="poliklinikler/<?php echo $db->seo($poli['polyclinics_title']); ?>/<?php echo $poli['polyclinics_id'] ?>" class="text-decoration-none"><?php echo $poli['polyclinics_title']; ?></a></h4>
								<p><?php echo mb_substr($poli['polyclinics_content'], 0,80) ?></p>
							</div>	
						</div>
					</div>

				<?php } ?>


			</div>
			<div class="row mt-2 pb-4">
				<div class="col-lg-12 text-center">
					<a class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 font-weight-bold" href="demo-medical-departments.html">Daha Fazla Göster</a>
				</div>
			</div>
		</div>
	</section>
	<section class="team pb-2">
		<div class="container">
			<div class="row pt-4">
				<div class="col">
					<h2 class="font-weight-semibold mb-0">Doktorlar</h2>
					<p class="lead font-weight-normal">Uzmanlarımız</p>

					<div id="porfolioAjaxBoxMedical" class="ajax-box ajax-box-init mb-4">

						<div class="bounce-loader">
							<div class="bounce1"></div>
							<div class="bounce2"></div>
							<div class="bounce3"></div>
						</div>

						<div class="ajax-box-content" id="porfolioAjaxBoxContentMedical"></div>

					</div>

				</div>
			</div>
			<div class="row pb-4">
				<div class="owl-carousel owl-theme nav-bottom rounded-nav pl-1 pr-1" >
					
					<?php 

					$doc = $db->read('doctors',[
						'columns_name' => 'doctors_must',
						'columns_sort' => 'ASC'
					]);
					
					while ($doct=$doc->fetch(PDO::FETCH_ASSOC)) { ?>

						<div class="pr-3 pl-3">
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
						
					<?php	} ?>

				</div>
			</div>
		</div>
	</section>






	<section class="section-secondary">
		<div class="container">
			<div class="row pt-5 pb-5">
				<div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false, 'dots': false}">
					<?php 

					$doc = $db->read('doctors',[
						'columns_name' => 'doctors_must',
						'columns_sort' => 'ASC'
					]);
					
					while ($doct=$doc->fetch(PDO::FETCH_ASSOC)) { ?>


					<div class="row justify-content-center">
						<div class="col-lg-8 pt-4 mt-3">
							<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
								<div class="testimonial-quote">“</div>
								<blockquote>
									<p class="font-weight-light"><?php echo mb_substr($doct['doctors_promise'], 0,500); ?></p>
								</blockquote>
								<div class="testimonial-author">
									<p class="text-uppercase">
										<strong><?php echo $doct['doctors_namesurname']; ?></strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					
					<?php } ?>


				</div>
			</div>
		</div>
	</section>

	
	<?php require_once 'footer.php' ?>