<?= $this->extend('wisatawan/template/layout'); ?>
<?= $this->section('content'); ?>

<section class="sub_header" id="bg_room">
    <div class="sub_header_content">
        <!-- <div class="animated fadeInDown">
                <h1>All rooms</h1>
                <p>
                    Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
                </p>
            </div> -->
    </div>
</section><!-- End Section -->

<!-- <div id="position">
    <div class="container">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li>Page active</li>
        </ul>
    </div>
</div> -->
<!-- End Position -->

<div class="container margin_60">
    <div class="row">
        <div class="col-lg-9 col-md-8">
            <?php foreach ($getdata as $user) : ?>
                <div class="strip_all_rooms_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="img_list">
                                <a href="room_details.html"><img src="<?php if ($user['foto'] == "") {
                                                                            echo "img/room_list_1.jpg";
                                                                        } else {
                                                                            echo $user['foto'];
                                                                        } ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="rooms_list_desc">
                                <h3><?= $user['nama_wisata'] ?></h3>
                                <p>
                                    <?= $user['deskripsi'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="price_list">
                                <div>
                                    <p>
                                        <a href="<?= base_url('/detail-wisata/' . $user['id_wisata']) ?>" class="btn_1">Details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End strip -->
            <?php endforeach ?>
        </div><!-- End col-lg-9 -->
    </div><!-- End row -->
</div><!-- End Container -->

<?= $this->endSection('content'); ?>