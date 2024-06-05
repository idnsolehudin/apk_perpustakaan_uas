<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7"></div>
                <div class="col-lg-6 col-5 text-right">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Data Pasien Mendaftar</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="name">Nama</th>
                                <th scope="col" class="sort" data-sort="status">Jenis Kelamin</th>
                                <th scope="col" class="sort" data-sort="status">No HP</th>
                                <th scope="col" class="sort" data-sort="status">Alamat</th>
                                <th scope="col" class="sort" data-sort="status">Pekerjaan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php $i = 1;
                            foreach ($pasien as $key) { ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <th scope="row"><?= $key['nama'] ?><br><?= $key['nik'] ?></th>
                                    <td class="budget"><?= getKelamin($key['jk']) ?></td>
                                    <td><?= $key['no_hp'] ?></td>
                                    <td><?= $key['alamat'] ?></td>
                                    <td><?= $key['pekerjaan'] ?></td>
                                    <td>
                                        <div class="avatar-group">
                                            <a href="<?php echo base_url(); ?>pasien/detailpasien/<?= $key['id'] ?>" class="btn btn-sm btn-info">Detail Pasien</a>
                                            <a href="" data-toggle="modal" data-target="#deleteFileModal" data-id="<?php echo $key['id']; ?>" class="btn btn-danger btn-sm">
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
    </div>
</div>

<div class="modal fade" id="deleteFileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo form_open_multipart('pasien/removepasienmasuk', array("class" => "")); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
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

<!-- sweetalert2 -->
<script src="<?php echo base_url(); ?>public/assets/vendor/jquery/dist/jquery.min.js"></script>
<script>
    $(function() {
        $('#deleteFileModal').on('show.bs.modal', function(event) {
            var t = $(event.relatedTarget) // Button that triggered the modal
            var id = t.data('id') // Extract info from data-* attributes
            var modal = $(this);
            modal.find('.modal-body input').val(id);
        })
    });
</script>