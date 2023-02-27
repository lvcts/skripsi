<?= $this->extend('pengelola/template/layout'); ?>
<?= $this->section('content'); ?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description d-flex align-items-center">
                        <div class="page-description-content flex-grow-1">
                            <h1>Dashboard</h1>
                        </div>
                        <!-- <div class="page-description-actions">
                                        <a href="#" class="btn btn-info btn-style-light"><i class="material-icons-outlined">file_download</i>Download</a>
                                        <a href="#" class="btn btn-warning btn-style-light"><i class="material-icons">add</i>Create</a>
                                    </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <a href="<?= route_to('listWisataAdmin') ?>">
                        <div class="card widget widget-stats">
                            <div class="card-body">
                                <div class="widget-stats-container d-flex">
                                    <div class="widget-stats-icon widget-stats-icon-primary">
                                        <i class="material-icons-outlined">add</i>
                                    </div>
                                    <div class="widget-stats-content flex-fill">
                                        <span class="widget-stats-title">Total Wisata</span>
                                        <?php $db = db_connect();
                                        $query = $db->query("SELECT COUNT(*) as wisata FROM wisata");
                                        $wisata = $query->getRow(); ?>
                                        <span class="widget-stats-amount"><?= $wisata->wisata; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6">
                    <a href="<?= route_to('bookingWisata') ?>">
                        <div class="card widget widget-stats">
                            <div class="card-body">
                                <div class="widget-stats-container d-flex">
                                    <div class="widget-stats-icon widget-stats-icon-warning">
                                        <i class="material-icons-outlined">person</i>
                                    </div>
                                    <div class="widget-stats-content flex-fill">
                                        <span class="widget-stats-title">Total Pesanan</span>
                                        <?php $db = db_connect();
                                        $query = $db->query("SELECT COUNT(*) as booking FROM booking");
                                        $wisata = $query->getRow(); ?>
                                        <span class="widget-stats-amount"><?= $wisata->booking; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>