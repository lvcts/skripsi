<?= $this->extend('wisatawan/template/layout'); ?>
<?= $this->section('content'); ?>
<?php foreach ($getdatabyid as $user) { ?>
	<br><br><br>
	<div class="container margin_60">
		<div class="row">
			<div class="col-lg-9 col-md-8" id="single_tour_desc">
				<div id="Img_carousel" class="slider-pro">
					<div class="sp-slides">

						<div class="sp-slide">
							<div alt="" class="sp-image" id="sp-image1">
							</div>
						</div>
						<div class="sp-slide">
							<div alt="" class="sp-image" id="sp-image2">
							</div>
						</div>

						<div class="sp-slide">
							<div alt="" class="sp-image" id="sp-image3">
							</div>
							<!-- <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
							</p> -->
						</div>

					</div>
					<div class="sp-thumbnails">
						<!-- <img alt="" class="sp-thumbnail" src="img/room_photo/1_thumb.jpg"> -->
						<img alt="" class="sp-thumbnail" src="<?= $user['link_panorama1']; ?>">
						<img alt="" class="sp-thumbnail" src="<?= $user['link_panorama2']; ?>">
						<img alt="" class="sp-thumbnail" src="<?= $user['link_panorama3'] ?>">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3">
						<h3>Deskripsi</h3>
					</div>
					<div class="col-md-9">
						<p>
							<?= $user['deskripsi'] ?>
						</p>
						<h4>Alamat</h4>
						<p><?= $user['alamat_wisata'] ?></p>
						<div class="mapouter" style="width:100%; height:230px;">
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
					</div><!-- End col-md-9  -->
				</div><!-- End row  -->

				<hr>
			</div>

			<div class="col-lg-3 col-md-4">
				<div class="box_style_1" id="general_facilities">
					<h3>Fasilitas</h3>
					<ul>
						<li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
						<li><i class="icon_set_2_icon-103"></i>Loundry service</li>
						<li><i class="icon_set_2_icon-110"></i>Swimming pool</li>
						<li><i class="icon_set_1_icon-58"></i>Restaurant</li>
						<li><i class="icon_set_1_icon-27"></i>Parking</li>
					</ul>
					<p>His <strong>civibus tacimates</strong> ex, an quo nominavi qualisque. In erant dissentiunt vel, dicit legimus docendi an nam. Te congue perfecto eos, aliquid corrumpit ea est, eam petentium repudiandae ad.</p>
				</div>
				<div class="box_style_1" id="general_facilities">
					<h3>Informasi Tiket</h3>
					<p>His <strong>civibus tacimates</strong> ex, an quo nominavi qualisque. In erant dissentiunt vel, dicit legimus docendi an nam. Te congue perfecto eos, aliquid corrumpit ea est, eam petentium repudiandae ad.</p>
				</div>
				<div class=" box_style_2">
					<a href="<?= 'https://api.whatsapp.com/send?phone=', $user['contact'] ?>"><i class="icon_set_1_icon-90"></i></a>
					<h4>Butuh bantuan?Hubungi Kami</h4>
				</div>
			</div>
		</div>
	</div>
	<!-- End Container -->
	<div id="toTop"></div><!-- Back to top button -->
	<!-- Common scripts -->
	<script src="https://cdn.jsdelivr.net/npm/three/build/three.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/autorotate-plugin/index.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/gallery-plugin/index.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/resolution-plugin/index.js"></script>


	<!-- Specific scripts -->
	<script type="text/javascript">
		const viewer = new PhotoSphereViewer.Viewer({
			container: document.querySelector('#sp-image1'),
			panorama: '<?= $user['link_panorama1']; ?>',
			defaultZoomLvl: 80,
			touchmoveTwoFingers: true,
			plugins: [
				[PhotoSphereViewer.AutorotatePlugin, {
					autostartDelay: 1000,
					autorotatePitch: '1deg',
				}],
			],


		});
		const viewer1 = new PhotoSphereViewer.Viewer({
			container: document.querySelector('#sp-image2'),
			panorama: '<?= $user['link_panorama2']; ?>',
			defaultZoomLvl: 80,
			touchmoveTwoFingers: true,
			plugins: [
				[PhotoSphereViewer.AutorotatePlugin, {
					autostartDelay: 1000,
					autorotatePitch: '1deg',
				}],
			],
		});
		const viewer3 = new PhotoSphereViewer.Viewer({

			container: document.querySelector('#sp-image3'),
			panorama: '<?= $user['link_panorama3']; ?>',
			defaultZoomLvl: 80,
			touchmoveTwoFingers: true,
			plugins: [
				[PhotoSphereViewer.AutorotatePlugin, {
					autostartDelay: 1000,
					autorotatePitch: '1deg',
				}],
			],
		});
	</script>
<?php } ?>
<?= $this->endSection('content'); ?>