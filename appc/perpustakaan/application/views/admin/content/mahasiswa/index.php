<div class="site-content">
    <!-- Content -->
    <div class="content-area p-y-1">
        <div class="container-fluid">

            <div class="m-b-1">
                <div class="clearfix">
                    <div class="pull-right">
                        <a href="<?php echo site_url('mahasiswa/add'); ?>" class="btn btn-primary m-b-0-25 waves-effect waves-light"><i class="ti-write"></i>&nbsp;Tambah Mahasiswa</a>
                    </div>
                </div>
            </div>
            <div class="box box-block bg-white">
                <h5 class="m-b-1">Data Mahasiswa</h5>
                <table class="table table-striped table-bordered dataTable" id="table-1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>TTL</th>
                            <th>Nomor Telephone</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($mahasiswa as $m) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td>
                                    <?= $m['nama'] ?><br>
                                    <p class="font-90 text-muted m-b-1"><?= $m['nim'] ?></p>
                                </td>
                                <td><?= getKelamin($m['kelamin']) ?></td>
                                <td><?= $m['agama'] ?></td>
                                <td><?= $m['tempat_lahir'] . ", " . $m['tanggal_lahir'] ?></td>
                                <td><?= $m['no_telp'] ?></td>
                                <td><?= $m['alamat'] ?></td>
                                <td>
                                    <div class="avatar-group">
                                        <a href="<?php echo base_url(); ?>mahasiswa/edit/<?= $m['id'] ?>" class="btn btn-sm btn-info">Ubah</a>
                                        <a href="" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $m['id']; ?>" class="btn btn-danger btn-sm">
                                            <font color="white">Hapus</font>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public'); ?>/js/forms-pickers.js"></script>
    <script>
        $(function() {
            $('#deleteModal').on('show.bs.modal', function(event) {
                var t = $(event.relatedTarget) // Button that triggered the modal
                var id = t.data('id') // Extract info from data-* attributes
                var modal = $(this);
                modal.find('.modal-body input').val(id);
            })
        });
    </script>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <?php echo form_open('mahasiswa/remove', array("class" => "")); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perhatatian!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apa anda yakin ingin menghapus data ini ? </p>
                    <input type="text" name="id" hidden>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Proses</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>