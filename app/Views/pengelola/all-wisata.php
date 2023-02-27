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
                                <th scope="col">Nama Wisata</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <?php foreach ($getbyid as $user) : ?>
                            <?php $db = db_connect();
                            $id = session()->id;
                            $id_wisata = $user['id_wisata'];
                            $query = $db->query("SELECT panorama.id_panorama FROM wisata
                                    JOIN panorama on panorama.id_wisata = wisata.id_wisata
                                    WHERE wisata.id_wisata = '$id_wisata'");
                            $row = $query->getRow();
                            ?>
                            <tbody>
                                <tr>
                                    <td scope="row"><?= $user['nama_wisata'] ?></td>
                                    <td scope="row"><?= $user['alamat_wisata'] ?></td>
                                    <td scope="row"><?= $user['deskripsi'] ?></td>
                                    <td scope="row"><a class="btn btn-success" href="<?= base_url('/edit-wisata/' . $user['id_wisata']) ?>"> Edit </a>
                                        <?php if (empty($row)) {
                                        ?>
                                            <a class="btn btn-primary" href="<?= base_url('/panorama/' . $user['id_wisata']) ?>"> Add Panorama </a>
                                        <?php } else { ?>
                                            <a class="btn btn-primary" href="<?= base_url('/edit-panorama/' . $user['id_wisata']) ?>"> Edit Panorama </a>
                                        <?php } ?>
                                        <a class="btn btn-danger" href="<?= base_url('/delete/' . $user['id_wisata']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Hapus</a>
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
</div>

<?= $this->endSection('content'); ?>