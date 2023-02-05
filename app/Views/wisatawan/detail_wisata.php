<?= $this->extend('wisatawan/template/layout'); ?>
<?= $this->section('content'); ?>
<?php foreach ($getdatabyid as $user) { ?>
	<!-- <div id="preloader">
	    <div class="sk-spinner sk-spinner-wave">
	        <div class="sk-rect1"></div>
	        <div class="sk-rect2"></div>
	        <div class="sk-rect3"></div>
	        <div class="sk-rect4"></div>
	        <div class="sk-rect5"></div>
	    </div>
	</div> -->
	<!-- End Preload -->
	<!-- 
	<div class="layer"></div> -->
	<!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
	<!-- <section class="sub_header" id="bg_room">
		<div class="sub_header_content"> -->
	<!-- <div class="animated fadeInDown">
			<h1>Double Room</h1>
			<p>
				Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
			</p>
		</div> -->
	<!-- </div>
	</section> -->
	<!-- End Section -->
	<br><br><br>
	<div class="container margin_60">
		<div class="row">
			<div class="col-lg-9 col-md-8" id="single_tour_desc">
				<div id="Img_carousel" class="slider-pro">
					<div class="sp-slides">

						<div class="sp-slide">
							<div alt="" class="sp-image" id="sp-image1">
							</div>
							<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
								<?= $user['deskripsi_pano1'] ?>
							</p>
						</div>
						<div class="sp-slide">
							<div alt="" class="sp-image" id="sp-image2">
							</div>
							<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
								<?= $user['deskripsi_pano2'] ?>
							</p>
						</div>

						<div class="sp-slide">
							<div alt="" class="sp-image" id="sp-image3">
							</div>
							<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
								<?= $user['deskripsi_pano3'] ?>
							</p>
						</div>

						<div class="sp-slide">
							<div alt="" class="sp-image" id="sp-image4">
							</div>
							<p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
								<?= $user['deskripsi_pano4'] ?>
							</p>
						</div>

					</div>
					<div class="sp-thumbnails">
						<!-- <img alt="" class="sp-thumbnail" src="img/room_photo/1_thumb.jpg"> -->
						<img alt="" class="sp-thumbnail" src="<?= $user['link_panorama1']; ?>">
						<img alt="" class="sp-thumbnail" src="<?= $user['link_panorama2']; ?>">
						<img alt="" class="sp-thumbnail" src="<?= $user['link_panorama3'] ?>">
						<img alt="" class="sp-thumbnail" src="<?= $user['link_panorama4'] ?>">
					</div>
				</div>
				<div id="single_room_feat">
					<!-- <ul>
	                    <li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
	                    <li><i class="icon_set_2_icon-104"></i>King size bed</li>
	                    <li><i class="icon_set_1_icon-59"></i>Breakfast inclueded</li>
	                    <li><i class="icon_set_2_icon-111"></i>Bathtub</li>
	                    <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
	                    <li><i class="icon_set_2_icon-106"></i>Safe box</li>
	                </ul> -->
				</div>
				<br>
				<div class="row">
					<div class="col-md-3">
						<h3>Description</h3>
					</div>
					<div class="col-md-9">
						<p>
							<?= $user['deskripsi'] ?>
						</p>
						<h4>Alamat</h4>
						<p><?= $user['alamat'] ?></p>
					</div><!-- End col-md-9  -->
				</div><!-- End row  -->

				<hr>
			</div>

			<div class="col-lg-3 col-md-4">
				<!-- <div class="box_style_1" id="general_facilities">
					<h3>General facilities</h3>
					<ul>
						<li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
						<li><i class="icon_set_2_icon-103"></i>Loundry service</li>
						<li><i class="icon_set_2_icon-110"></i>Swimming pool</li>
						<li><i class="icon_set_1_icon-58"></i>Restaurant</li>
						<li><i class="icon_set_1_icon-27"></i>Parking</li>
					</ul>
					<p>His <strong>civibus tacimates</strong> ex, an quo nominavi qualisque. In erant dissentiunt vel, dicit legimus docendi an nam. Te congue perfecto eos, aliquid corrumpit ea est, eam petentium repudiandae ad.</p>
				</div> -->
				<div class=" box_style_2">
					<i class="icon_set_1_icon-90"></i>
					<h4>Need help? Call us</h4>
					<a href="<?= 'https://api.whatsapp.com/send?phone=', $user['contact'] ?>" class="phone"><?= $user['contact']; ?></a>
				</div>
				<div class="box_style_2">
					<h3>Order</h3>
					<a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">Order Now!!</a>
					<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myReviewLabel">Informasi Pemesanan</h4>
								</div>
								<div class="modal-body">
									<div id="message-review">
									</div>
									<form method="post" action="assets/review.php" name="review" id="review">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input name="name_review" id="name_review" type="text" placeholder="Nama Pemesan" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input name="email" id="email" type="email" placeholder="Email" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input name="nomor_telp" id="nomor_telp" type="text" placeholder="Nomor Telepon Pemesan" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for=" startDate">Kewarganegaraan</label>
													<select class="form-control" name="room_type_review" id="room_type_review">
														<option value="WNI">WNI</option>
														<option value="WNA">WNA</option>
													</select>
												</div>
											</div>
										</div>

										<hr>
										<div class="row">
											<div class="col-md-6">
												<label for=" startDate">Tanggal Kedatangan</label>
												<input id="startDate" class="form-control" type="date" />
												<!-- <span id="startDateSelected"></span> -->
											</div>
											<!-- <div class="col-md-6">
												<div class="form-group">
													<label>Position</label>
													<select class="form-control" name="position_review" id="position_review">
														<option value="">Please review</option>
														<option value="Low">Low</option>
														<option value="Sufficient">Sufficient</option>
														<option value="Good">Good</option>
														<option value="Excellent">Excellent</option>
														<option value="Superb">Super</option>
														<option value="Not rated">I don't know</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Comfort</label>
													<select class="form-control" name="comfort_review" id="comfort_review">
														<option value="">Please review</option>
														<option value="Low">Low</option>
														<option value="Sufficient">Sufficient</option>
														<option value="Good">Good</option>
														<option value="Excellent">Excellent</option>
														<option value="Superb">Super</option>
														<option value="Not rated">I don't know</option>
													</select>
												</div>
											</div> -->
										</div>

										<!-- <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Price</label>
													<select class="form-control" name="price_review" id="price_review">
														<option value="">Please review</option>
														<option value="Low">Low</option>
														<option value="Sufficient">Sufficient</option>
														<option value="Good">Good</option>
														<option value="Excellent">Excellent</option>
														<option value="Superb">Super</option>
														<option value="Not rated">I don't know</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Quality</label>
													<select class="form-control" name="quality_review" id="quality_review">
														<option value="">Please review</option>
														<option value="Low">Low</option>
														<option value="Sufficient">Sufficient</option>
														<option value="Good">Good</option>
														<option value="Excellent">Excellent</option>
														<option value="Superb">Super</option>
														<option value="Not rated">I don't know</option>
													</select>
												</div>
											</div>
										</div> -->
										<br>

										<div class="form-group">
											<textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Informasi Tambahan"></textarea>
										</div>
										<!-- <div class="form-group">
											<input type="text" id="verify_review" class=" form-control" placeholder="Are you human? 3 + 1 =">
										</div> -->
										<input type="submit" value="Pesan" class="btn_1" id="submit-review">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Container -->
	<div id="toTop"></div><!-- Back to top button -->
	<!-- Common scripts -->
	<script src=<?php echo base_url("js/jquery-1.11.2.min.js"); ?>></script>
	<script src=<?php echo base_url("js/common_scripts_min.js"); ?>></script>
	<script src=<?php echo base_url("js/functions.js"); ?>></script>
	<script src=<?php echo base_url("assets/validate.js"); ?>></script>
	<script src=<?php echo base_url("js/three.min.js"); ?>></script>
	<script src=<?php echo base_url("js/photo-sphere-viewer.js"); ?>></script>


	<!-- Specific scripts -->
	<script src=<?php echo base_url("js/jquery.sliderPro.min.js"); ?>></script>
	<script type="text/javascript">
		$(document).ready(function($) {
			$('#Img_carousel').sliderPro({
				width: 960,
				height: 500,
				fade: true,
				arrows: true,
				buttons: false,
				fullScreen: false,
				smallSize: 500,
				startSlide: 0,
				mediumSize: 1000,
				largeSize: 3000,
				thumbnailArrows: true,
				autoplay: false
			});
		});
		var div = document.getElementById('sp-image1');
		var PSV = new PhotoSphereViewer({
			panorama: '<?= $user['link_panorama1'] ?>',
			container: div,
			time_anim: 1000,
			anim_speed: '1.3rpm',
			navbar: true,
			navbar_style: {
				backgroundColor: 'rgba(58, 67, 77, 0.7)'
			},
			long_offset: 3.17 / 1800,
			lat_offset: 3.17 / 1440,
		});
		var div = document.getElementById('sp-image2');
		var PSV = new PhotoSphereViewer({
			panorama: '<?= $user['link_panorama2']; ?>',
			container: div,
			time_anim: 1000, // start animasi (ganti false dengan 1000 untuk pake animasi
			anim_speed: '1.3rpm', // kecepatan puteran animasi
			navbar: true,
			navbar_style: {
				backgroundColor: 'rgba(58, 67, 77, 0.7)'
			},
			long_offset: 3.17 / 1800, // kecepatan mouse (geser kanan)
			lat_offset: 3.17 / 1440, // kecepatan mouse (geser kiri)
		});
		var div = document.getElementById('sp-image3');
		var PSV = new PhotoSphereViewer({
			panorama: '<?= $user['link_panorama3']; ?>',
			container: div,
			time_anim: 1000, // start animasi (ganti false dengan 1000 untuk pake animasi
			anim_speed: '1.3rpm', // kecepatan puteran animasi
			navbar: true,
			navbar_style: {
				backgroundColor: 'rgba(58, 67, 77, 0.7)'
			},
			long_offset: 3.17 / 1800, // kecepatan mouse (geser kanan)
			lat_offset: 3.17 / 1440, // kecepatan mouse (geser kiri)
		});
		var div = document.getElementById('sp-image4');
		var PSV = new PhotoSphereViewer({
			panorama: '<?= $user['link_panorama4']; ?>',
			container: div,
			time_anim: 1000, // start animasi (ganti false dengan 1000 untuk pake animasi
			anim_speed: '1.3rpm', // kecepatan puteran animasi
			navbar: true,
			navbar_style: {
				backgroundColor: 'rgba(58, 67, 77, 0.7)'
			},
			long_offset: 3.17 / 1800, // kecepatan mouse (geser kanan)
			lat_offset: 3.17 / 1440, // kecepatan mouse (geser kiri)
		});
	</script>
<?php } ?>
<?= $this->endSection('content'); ?>