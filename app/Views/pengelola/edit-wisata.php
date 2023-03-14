<?= $this->extend('pengelola/template/layout'); ?>
<?= $this->section('content'); ?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description d-flex align-items-center">
                        <div class="page-description-content flex-grow-1">
                            <h1>Edit Data Wisata</h1>
                        </div>
                        <!-- <div class="page-description-actions">
                                        <a href="#" class="btn btn-info btn-style-light"><i class="material-icons-outlined">file_download</i>Download</a>
                                        <a href="#" class="btn btn-warning btn-style-light"><i class="material-icons">add</i>Create</a>
                                    </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            </hr />
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <?php foreach ($getdatabyid as $user) : ?>
                        <h3>Data Wisata</h3>
                        <form method="post" action="<?= base_url(); ?>/edit-wisata" class="signin-form" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id_wisata" value="<?= $user['id_wisata'] ?>">
                            <label class="form-label">Nama Wisata</label>
                            <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" id="nama_wisata" value="<?= $user['nama_wisata'] ?>">

                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" aria-label="With textarea" name="alamat_wisata" id="alamat_wisata"><?= $user['alamat_wisata'] ?></textarea>
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" aria-label="With textarea" name="deskripsi" id="deskripsi"><?= $user['deskripsi'] ?></textarea>

                            <br><br>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload Foto</label>
                                <input class="form-control" type="file" id="foto" name="foto">
                            </div>
                            <br><br>
                            <button type="submit" value="submit" class="btn btn-primary">Simpan</button>
                        </form>

                </div>
            <?php endforeach ?>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>