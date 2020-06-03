<?php require_once 'header.php' ?>
<div role="main" class="main">

	<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1 class="mt-1">Pliklinikler <span>Bölümlerimiz hakkında daha fazla bilgi edinin</span></h1>
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
			<div class="col">

				<h2 class="font-weight-semibold mb-3">Sağlık Uzmanları</h2>

				<p class="lead font-weight-normal mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus sint soluta quos rem, nulla commodi consequuntur odio quae, libero incidunt modi ea minus, natus quo esse iure nam. Cumque, totam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora cum, dignissimos itaque illo qui, saepe minus pariatur debitis? Accusantium earum possimus id dolores ad, iste molestiae illo eius deleniti optio!</p>

				<?php 

				$pol = $db->read("polyclinics",[
					"columns_name" => "polyclinics_must",
					"columns_sort" => "ASC"
				]);

				while ($poli=$pol->fetch(PDO::FETCH_ASSOC)) { ?>

					<div class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="100">
						<div class="feature-box feature-box-style-2">
							<div class="feature-box-icon" style="min-width: 4.7rem;">
								<img width="100" src="nedmin/dimg/polyclinics/<?php echo $poli['polyclinics_file']; ?>" alt class="img-fluid" />
							</div>
							<div class="feature-box-info">
								<h4 class="font-weight-semibold mb-1"><?php echo $poli['polyclinics_title']; ?></h4>
								<p class="mb-0"><?php echo mb_substr($poli['polyclinics_content'], 0,380) ?></p>
								<p class="mb-0"><a href="poliklinikler/<?php echo $db->seo($poli['polyclinics_title']); ?>/<?php echo $poli['polyclinics_id'] ?>" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-3 font-weight-bold btn-md text-1">DAHA FAZLA GÖR...</a></p>
							</div>	
						</div>

						<hr class="solid my-5">
					</div>

				<?php } ?>

				</div>
			</div>

		</div>

		<?php require_once 'footer.php' ?>