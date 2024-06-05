<div class="site-content">
    <!-- Content -->
    <div class="content-area p-y-1">
        <div class="container-fluid">

            <div class="box box-block bg-white">
                <h5 class="m-b-1">Log Pengembalian</h5>
                <table class="table table-striped table-bordered dataTable" id="table-2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jumlah Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Harus Kembali</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Denda</th>
                            <?php if ($_SESSION['username'] == "admin") { ?>
                                <th>Aksi</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $no = 1;
                        foreach ($pengembalian as $p) {
                            $no++;
                            date_default_timezone_set('Asia/Makassar');
                            // $Date = date('Y-m-d H:i:s');
                            $Date = $p['tgl_pengembalian'];
                            $jumlah_buku = $this->Peminjaman_model->get_count_pinjam($p['pengembalian']);
                            $t = date_create($p['tgl_kembali']);
                            $n = date_create($Date);
                            $terlambat = date_diff($t, $n);
                            $hari = "";
                            if ($n < $t) {
                                $denda = "0";
                            } else {
                                $hari = $terlambat->format("%a");
                                $denda = ($hari * 1000) * $this->Pengembalian_model->get_count_pinjam($p['pengembalian']);
                            }
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td>
                                    <?= $this->Mahasiswa_model->get_data_id($p['id_mahasiswa'])['nama'] ?><br>
                                    <p class="font-90 text-muted m-b-1"><?= $this->Mahasiswa_model->get_data_id($p['id_mahasiswa'])['nim'] ?></p>
                                </td>
                                <td><?= $this->Pengembalian_model->get_count_pinjam($p['pengembalian']) . " Buku"; ?></td>
                                <td><?= $p['tgl_peminjaman'] ?></td>
                                <td><?= $p['tgl_kembali'] ?></td>
                                <td><?= $p['tgl_pengembalian'] ?></td>
                                <td>
                                    <?= getRupiah($denda) ?>
                                    <?php if ($denda > 0) { ?>
                                        <p class="font-90 text-muted m-b-1"><?= "Terlambat " . $hari . " Hari" ?></p>
                                    <?php } ?>
                                </td>
                                <?php if ($_SESSION['username'] == "admin") { ?>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="<?php echo base_url(); ?>peminjaman/detail/<?= $p['id_mahasiswa'] . '/' . $p['pengembalian'] ?>" class="btn btn-sm btn-info">Lihat Buku</a>
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