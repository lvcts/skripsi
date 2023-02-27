<?= $this->extend('pengelola/template/layout'); ?>
<?= $this->section('content'); ?>

<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <?php if (!empty(session()->getFlashdata('message'))) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('message'); ?>
                    </div>
                <?php endif; ?>
                <div class="col">
                    <table class="table table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Wisata</th>
                                <th scope="col">Nama Pemesan</th>
                                <th scope="col">Nomor Telepon</th>
                                <th scope="col">Email</th>
                                <th scope="col">Kewarganegaraan</th>
                                <th scope="col">Tanggal Kedatangan</th>
                                <th scope="col">Informasi Tambahan</th>
                            </tr>
                        </thead <?php foreach ($booking as $user) : ?> <tbody>
                        <tr>
                            <td scope="row"><?= $user['wisata'] ?></td>
                            <td scope="row"><?= $user['nama_pemesan'] ?></td>
                            <td scope="row"><?= $user['nomor_telpon'] ?></td>
                            <td scope="row"><?= $user['email'] ?></td>
                            <td scope="row"><?= $user['kewarganegaraan'] ?></td>
                            <td scope="row"><?= $user['tanggal_kedatangan'] ?></td>
                            <td scope="row"><?= $user['informasi_tambahan'] ?></td>
                            </td>
                        </tr>
                        </tbody>
                    <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection('content'); ?>