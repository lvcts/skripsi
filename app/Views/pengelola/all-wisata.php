<?= $this->extend('pengelola/template/layout'); ?>
<?= $this->section('content'); ?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Basic</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama Wisata</th>
                                        <th>Alamat</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php foreach ($getdata as $user) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $user['nama_wisata'] ?></td>
                                            <td><?= $user['alamat'] ?></td>
                                            <td><?= $user['deskripsi'] ?></td>
                                            <td><a class="btn btn-success" href="<?= base_url('/edit-wisata/' . $user['id_wisata']) ?>"> Edit </a>
                                                <a class="btn btn-danger" href="<?= base_url('pegawai/delete/$row->id_pegawai') ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php endforeach ?>
                                <tfoot>
                                    <tr>
                                        <th>Nama Wisata</th>
                                        <th>Alamat</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection('content'); ?>