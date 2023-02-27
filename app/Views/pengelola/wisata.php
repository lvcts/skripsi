<?= $this->extend('pengelola/template/layout'); ?>
<?= $this->section('content'); ?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description d-flex align-items-center">
                        <div class="page-description-content flex-grow-1">
                            <h1>Detail Wisata</h1>
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
                    <h3>Data Wisata</h3>
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
                    <form method="post" action="<?= base_url('/add-wisata'); ?>" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <label for="nama_wisata" class="form-label">Nama Wisata</label>
                        <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" autofocus value="<?= old('nama_wisata'); ?>">

                        <label for="alamat_wisata" class="form-label">Alamat</label>
                        <textarea class="form-control" aria-label="With textarea" id="alamat_wisata" name="alamat_wisata" value="<?= old('alamat_wisata'); ?>"></textarea>

                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" aria-label="With textarea" id="deskripsi" name="deskripsi" value="<?= old('deskripsi'); ?>"></textarea>

                        <br><br>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Foto</label>
                            <input class="form-control" type="file" id="foto" name="foto">
                        </div>
                        <br><br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                <!-- <div class="col-6">
                    <h3>Panoramic Upload</h3>
                    <p class="form-label" style="color: red;"> Foto panorama dapat di upload setelah data wisata berhasil di tambahkan</p>
                    <?php if (!empty(session()->getFlashdata('error1'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error1'); ?>
                        </div>
                    <?php endif; ?>
                    <form method="$_POST" action="<?= base_url(); ?>/signup-process" id="demo-upload">
                        <div class="card">
                            <div class="card-body">

                                <label class="form-label" for="customFile">Panorama 1</label>
                                <input type="file" class="form-control" id="customFile" />
                                <br>
                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" aria-label="With textarea" id="deskripsi_pano1" name="deskripsi_pano1"></textarea>
                                <div id="emailHelp" class="form-text">Isi deskripsi tempat </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <label class="form-label" for="customFile">Panorama 2</label>
                                <input type="file" class="form-control" id="customFile" />
                                <br>
                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" aria-label="With textarea" id="deskripsi_pano2" name="deskripsi_pano2"></textarea>
                                <div id="emailHelp" class="form-text">Isi deskripsi tempat </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <label class="form-label" for="customFile">Panorama 3</label>
                                <input type="file" class="form-control" id="customFile" />
                                <br>
                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" aria-label="With textarea" id="deskripsi_pano3" name="deskripsi_pano3"></textarea>
                                <div id="emailHelp" class="form-text">Isi deskripsi tempat </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <label class="form-label" for="customFile">Panorama 4</label>
                                <input type="file" class="form-control" id="customFile" />
                                <br>
                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" aria-label="With textarea" id="deskripsi_pano4" name="deskripsi_pano4"></textarea>
                                <div id="emailHelp" class="form-text">Isi deskripsi tempat </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div> -->
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection('content'); ?>