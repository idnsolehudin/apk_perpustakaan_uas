<div class="site-content">
    <!-- Content -->
    <div class="content-area p-y-1">
        <div class="container-fluid">
            <h4>Detail Peminjaman</h4>
            <ol class="breadcrumb no-bg m-b-1">
                <li class="breadcrumb-item"><a href="#">Daftar Buku yang dipinjam Oleh <?= $mahasiswa ?></a></li>
            </ol>
            <div class="box box-block bg-white">
                <table class="table m-md-b-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Buku</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($buku as $b) { ?>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $this->Buku_model->get_data_id($b['id_buku'])['judul_buku'] ?></td>
                                <td><a href="<?php echo base_url(); ?>buku/detail/<?= $b['id_buku'] ?>" class="btn btn-outline-primary btn-rounded">Detail</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>