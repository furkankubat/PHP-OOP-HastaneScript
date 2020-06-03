
<footer id="footer" class="m-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 mb-2">
				<h4 class="mb-4">Adres</h4>
				<p>
					<?php echo $settings['adres']; ?>
				</p>
			</div>
			<div class="col-lg-3">
				<h4 class="mb-4">Çalışma Saatleri</h4>
				<p>
					<?php echo $settings['work_hours']; ?>
				</p>
				
				
			</div>
			<div class="col-lg-3">
				<div class="contact-details">
					<h4 class="mb-4">Acil Durumlar</h4>
					<a class="text-decoration-none" href="tel:1234567890">
						<strong class="font-weight-light"><?php echo $settings['acil']; ?></strong>
					</a>
				</div>
			</div>
			<div class="col-lg-2 ml-lg-auto">
				<h4 class="mb-4">Sosyal Medya</h4>
				<ul class="social-icons">
					<li class="social-icons-facebook">
						<a href="<?php echo $settings['facebook'] ?>" target="_blank" title="Facebook">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li class="social-icons-twitter">
						<a href="<?php echo $settings['twitter'] ?>" target="_blank" title="Twitter">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li class="social-icons-linkedin">
						<a href="<?php echo $settings['linkedin'] ?>" target="_blank" title="Linkedin">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright pt-3 pb-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center m-0">
					<p><?php echo $settings['copyright']; ?></p>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>

<!-- Vendor -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="js/views/view.contact.js"></script>

<!-- Demo -->
<script src="js/demos/demo-medical.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>




		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
	-->


</body>
</html>
