<div class="site-content">
    <!-- Content -->
    <div class="content-area p-y-1">
        <div class="container-fluid">

            <div class="m-b-1">
                <div class="clearfix">
                    <div class="pull-right">
                        <a href="<?php echo site_url('kategori/add'); ?>" class="btn btn-primary m-b-0-25 waves-effect waves-light"><i class="ti-write"></i>&nbsp;Tambah Kategori</a>
                    </div>
                </div>
            </div>
            <div class="box box-block bg-white">
                <h5 class="m-b-1">Kategori</h5>
                <table class="table table-striped table-bordered dataTable" id="table-1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($kategori as $k) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $k['nama_kategori'] ?></td>
                                <td>
                                    <div class="avatar-group">
                                        <a href="<?php echo base_url(); ?>kategori/edit/<?= $k['id_kategori'] ?>" class="btn btn-sm btn-info">Ubah</a>
                                        <a href="" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $k['id_kategori']; ?>" class="btn btn-danger btn-sm">
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

    <?php if ($this->session->flashdata('error')) : ?>
        <script>
            $(document).ready(function() {
                $('#ErrorModal').modal('show');
            });
        </script>
    <?php endif; ?>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <?php echo form_open('kategori/remove', array("class" => "")); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perhatatian!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apa anda yakin ingin menghapus data ini ? </p>
                    <input type="text" name="id_kategori" hidden>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Proses</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

    <div class="modal fade" id="ErrorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <font color="red">Perhatian !</font>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $this->session->flashdata('error'); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                </div>
            </div>

        </div>
    </div>