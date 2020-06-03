<?php 
require_once 'header.php';

$sql=$db->wread("doctors","doctors_id",$_GET['doctors_id']);
$row=$sql->fetch(PDO::FETCH_ASSOC);
	

?>
<hr class="solid">

<div class="row mt-5 mb-5 pt-1">
	<div class="col-lg-4">

		<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
			<div>
				<span class="img-thumbnail d-block no-borders">
					<img alt="" class="img-fluid" src="nedmin/dimg/doctors/<?php echo $row['doctors_file'] ?>">
				</span>
			</div>
			
		</div>

	</div>

	<div class="col-lg-8">

		<h3 class="font-weight-bold mt-2"><?php echo $row['doctors_namesurname'] ?></h3>

		<p><?php echo $row['doctors_promise']; ?></p>

		<a href="#" class="btn btn-primary btn-icon mb-3"><i class="icon-calendar icons"></i>Doctor Timetable</a>

	</div>
</div>


<?php require_once 'footer.php' ?>