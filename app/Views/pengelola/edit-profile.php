<?= $this->extend('pengelola/template/layout'); ?>
<?= $this->section('content'); ?>

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
                    <form action="" method="post"></form>
                    <label for="exampleInputEmail1" class="form-label">Nama Pengelola</label>
                    <input type="text" class="form-control" id="nama_pengelola" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label">Kontak</label>
                    <input type="text" class="form-control" id="kontak" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp">

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