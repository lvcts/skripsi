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
                    <form method="$_POST" action="<?= base_url(); ?>/edit-process" class="signin-form">
                        <label for="exampleInputEmail1" class="form-label">Nama Pengelola</label>
                        <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" aria-describedby="emailHelp" value="<?= $session->nama_pemilik ?>">

                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $session->email ?>">

                        <label for="exampleInputEmail1" class="form-label">Kontak</label>
                        <input type="text" class="form-control" id="kontak" name="kontak" aria-describedby="emailHelp" value="<?= $session->contact ?>">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" value="<?= $session->alamat ?>">

                        <br><br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                <div class="col-6">
                    <h3>Password</h3>
                    <form action="/upload" id="demo-upload">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1" class="form-label">Verifikasi Password</label>
                        <input type="text" class="form-control" id="password" aria-describedby="emailHelp">
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