<div class="site-content">
    <!-- Content -->
    <div class="content-area p-y-1">
        <div class="container-fluid">

            <div class="box box-block bg-white">
                <h5 class="m-b-1">Log Peminjaman</h5>
                <table class="table table-striped table-bordered dataTable" id="table-2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jumlah Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                            <?php if ($_SESSION['username'] == "admin") { ?>
                                <th>Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $no = 1;
                        foreach ($peminjaman as $p) {
                            $no++;
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td>
                                    <?= $this->Mahasiswa_model->get_data_id($p['id_mahasiswa'])['nama'] ?><br>
                                    <p class="font-90 text-muted m-b-1"><?= $this->Mahasiswa_model->get_data_id($p['id_mahasiswa'])['nim'] ?></p>
                                </td>
                                <td><?= $this->Peminjaman_model->get_count_pinjam($p['peminjaman']) . " Buku"; ?></td>
                                <td><?= $p['tgl_peminjaman'] ?></td>
                                <td><?= $p['tgl_kembali'] ?></td>
                                <td><?= getStatus($p['status_pinjam']) ?></td>
                                <?php if ($_SESSION['username'] == "admin") { ?>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="<?php echo base_url(); ?>peminjaman/detail/<?= $p['id_mahasiswa'] . '/' . $p['peminjaman'] ?>" class="btn btn-sm btn-info">Lihat Buku</a>
                                        </div>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(function() {
            $('#deleteModal').on('show.bs.modal', function(event) {
                var t = $(event.relatedTarget) // Button that triggered the modal
                var id = t.data('id') // Extract info from data-* attributes
                var modal = $(this);
                modal.find('.modal-body #ids').val(id);
            })
        });
    </script>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <?php echo form_open('peminjaman/tolak_peminjaman', array("class" => "")); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perhatatian!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Masukan Alasan Penolakan ? </p>
                    <input type="text" id="ids" name="id" hidden>
                    <input type="text" class="form-control" name="alasan">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Proses</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>