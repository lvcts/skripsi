<?= $this->extend('pengelola/template/layout'); ?>
<?= $this->section('content'); ?>
<?php $session = session(); ?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description d-flex align-items-center">
                        <div class="page-description-content flex-grow-1">
                            <h1>Detail Pengelola</h1>
                        </div>
                        <!-- <div class="page-description-actions">
                                        <a href="#" class="btn btn-info btn-style-light"><i class="material-icons-outlined">file_download</i>Download</a>
                                        <a href="#" class="btn btn-warning btn-style-light"><i class="material-icons">add</i>Create</a>
                                    </div> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h3>Data Pribadi</h3>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url(); ?>/profile" class="signin-form">
                        <?= csrf_field(); ?>
                        <label for="exampleInputEmail1" class="form-label">Nama Pengelola</label>
                        <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" aria-describedby="emailHelp" value="<?= $session->nama_pemilik ?>">

                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $session->email ?>">
                        <label for="exampleInputEmail1" class="form-label">Kontak</label>
                        <input type="text" class="form-control" id="contact" name="contact" aria-describedby="emailHelp" value="<?= $session->contact ?>">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" value="<?= $session->alamat ?>">

                        <br><br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                <div class="col-6">
                    <h3>Password</h3>
                    <?php if (!empty(session()->getFlashdata('error1'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error1'); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url(); ?>/edit-password" class="signin-form">
                        <?= csrf_field(); ?>
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password">
                        <label for="exampleInputEmail1" class="form-label">Verifikasi Password</label>
                        <input type="text" class="form-control" id="password" name="password_verif">
                        <br><br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection('content'); ?>