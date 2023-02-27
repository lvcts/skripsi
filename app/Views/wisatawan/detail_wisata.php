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
						<img alt="" class="sp-thumbnail" src="<?= $user['link_panorama1']; ?>">
						<img alt="" class="sp-thumbnail" src="<?= $user['link_panorama2']; ?>">
						<img alt="" class="sp-thumbnail" src="<?= $user['link_panorama3'] ?>">
						<img alt="" class="sp-thumbnail" src="<?= $user['link_panorama4'] ?>">
					</div>
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
						<p><?= $user['alamat_wisata'] ?></p>
						<h4>Maps</h4>
						<div class="mapouter">
							<div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=<?= $user['nama_wisata'] ?><?= $user['alamat_wisata'] ?>&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co"></a><br>
								<style>
									.mapouter {
										position: relative;
										text-align: right;
										height: 100%;
										width: 100%;
									}
								</style><a href="https://embedgooglemap.2yu.co"></a>
								<style>
									.gmap_canvas {
										overflow: hidden;
										background: none !important;
										height: 100%;
										width: 100%;
									}
								</style>
							</div>
						</div>
					</div>
				</div>

				<hr>
			</div>

			<div class="col-lg-3 col-md-4">
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
									<form method="post" action="<?= base_url(); ?>/bookingproccess">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="hidden" name="wisata" value="<?= $user['nama_wisata']; ?>">
													<input name="nama_pemesan" id="nama_pemesan" type="text" placeholder="Nama Pemesan" class="form-control" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input name="email" id="email" type="email" placeholder="Email" class="form-control" required>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input name="nomor_telpon" id="nomor_telpon" type="text" placeholder="Nomor Telepon Pemesan" class="form-control" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for=" startDate">Kewarganegaraan</label>
													<select class="form-control" name="kewarganegaraan" id="kewarganegaraan" required>
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
												<input id="tanggal_kedatangan" name="tanggal_kedatangan" class="form-control" type="date" required>
											</div>
										</div>
										<br>

										<div class="form-group">
											<textarea name="informasi_tambahan" id="informasi_tambahan" class="form-control" style="height:100px" placeholder="Informasi Tambahan" required></textarea>
										</div>
										<input type="hidden" name="id" value="<?= $user['id']; ?>">
										<button type="submit" class="btn_1">Pesan</button>
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