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
                <div class="col-6">
                    <h3>Data Wisata</h3>
                    <form action="" method="post"></form>
                    <label for="exampleInputEmail1" class="form-label">Nama Wisata</label>
                    <input type="text" class="form-control" id="nama_wisata" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp">

                    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp">

                    <br><br>
                    <label class="form-label" for="customFile">Upload foto</label>
                    <input type="file" class="form-control" id="customFile" />
                    <br><br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                <div class="col-6">
                    <h3>Panoramic Upload</h3>
                    <form action="/upload" id="demo-upload">
                        <div class="card">
                            <div class="card-body">

                                <label class="form-label" for="customFile">Panorama 1</label>
                                <input type="file" class="form-control" id="customFile" />
                                <br>
                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Isi deskripsi tempat </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <label class="form-label" for="customFile">Panorama 2</label>
                                <input type="file" class="form-control" id="customFile" />
                                <br>
                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Isi deskripsi tempat </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <label class="form-label" for="customFile">Panorama 3</label>
                                <input type="file" class="form-control" id="customFile" />
                                <br>
                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Isi deskripsi tempat </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <label class="form-label" for="customFile">Panorama 4</label>
                                <input type="file" class="form-control" id="customFile" />
                                <br>
                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Isi deskripsi tempat </div>
                            </div>
                        </div>
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