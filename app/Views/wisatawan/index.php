<?= $this->extend('wisatawan/template/layout'); ?>
<?= $this->section('content'); ?>

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
<!-- <div class="layer"></div> -->
<!-- Mobile menu overlay mask -->
<!-- Slider -->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            </li>
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            </li>
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                <!-- MAIN IMAGE -->
                <img src="img/slides_bg/dummy.png" alt="slidebg1" data-lazyload="img/slides_bg/slide1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
            </li>
        </ul>

    </div>
    <div id="general_decor"></div>
</div>
<!-- End Slider -->

<div class="container margin_60 padd_bottom_20">
    <div class="main_title">
        <span></span>
        <h2>Temukan wisata favorit anda disini!</h2>
        <p>
            Dengan teknologi 3D Panoramic View
        </p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box_home">
                <a href="<?= route_to('listWisata'); ?>"><i class="icon_set_1_icon-37"></i></a>
                <h3>Temukan Wisata Favorit</h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box_home">
                <a href="<?= route_to('listWisata'); ?>"><i class="icon_set_1_icon-18"></i></a>
                <h3>List Wisata Populer</h3>
            </div>
        </div>
    </div><!-- End row -->
</div><!-- End container -->

<div class="bg_gray add_bottom_60">
    <div class="container">

    </div>
</div><!-- End container -->



<?= $this->endSection('content'); ?>