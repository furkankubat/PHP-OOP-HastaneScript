<?php require_once 'header.php' ?>

<div role="main" class="main">

	<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1 class="mt-1">İletişim <span>Daha fazla bilgi için bize bir mesaj gönderin veya bizi arayın...</span></h1>
				</div>
				<div class="col-lg-6">
					<ul class="breadcrumb">
						<li><a href="index.php">Anasayfa</a></li>
						<li class="active">İletişim</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="row mt-5">
			<div class="col-lg-4">
				<div class="feature-box feature-box-style-2">
					<div class="feature-box-icon pt-0">
						<i class="icon-location-pin icons"></i>
					</div>
					<div class="feature-box-info">
						<h4 class="mb-2">Addres</h4>
						<?php echo $settings['adres']; ?>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box feature-box-style-2">
					<div class="feature-box-icon pt-0">
						<i class="icon-phone icons"></i>
					</div>
					<div class="feature-box-info">
						<h4 class="mb-2">Telefon</h4>
						<?php echo $settings['phone']; ?>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature-box feature-box-style-2">
					<div class="feature-box-icon pt-0">
						<i class="icon-envelope icons"></i>
					</div>
					<div class="feature-box-info">
						<h4 class="mb-2">Email</h4>
						<p class="text-4">
							<a href="mailto:mail@example.com" class="text-decoration-none"><?php echo $settings['email']; ?></a><br>
							
						</p>
					</div>
				</div>
			</div>
		</div>

		<hr class="solid">

		<div class="row pt-4 mb-4">
			<div class="col-lg-6">
				<div id="googlemaps" class="google-map m-0 mb-5"></div>
			</div>
			
			<div class="col-lg-6">

				<h4 class="font-weight-semibold mb-4">Bize Mesaj Gönderin</h4>

				<form id="gonder" action="mail/gonder.php" method="POST">
					<div class="form-row">
						<div class="form-group col">
							<input type="text" placeholder="Adınız" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="isim" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input type="email" placeholder="E-Posta" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input type="text" placeholder="Konu" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<textarea maxlength="5000" placeholder="Mesajınız" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input name="gonder" type="submit" value="Mesaj Gönder" class="btn btn-primary btn-lg mb-5" data-loading-text="Loading...">
						</div>
					</div>
				</form>

			</div>
		</div>

	</div>

	<?php require_once 'footer.php'; ?>