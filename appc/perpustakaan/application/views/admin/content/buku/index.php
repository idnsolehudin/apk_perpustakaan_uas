<div class="site-content">
    <!-- Content -->
    <div class="content-area p-y-1">
        <div class="container-fluid">
            <h4>Data Buku</h4>

            <div class="m-b-1">
                <div class="clearfix">
                    <div class="pull-right">
                        <a href="<?php echo site_url('buku/add'); ?>" class="btn btn-primary m-b-0-25 waves-effect waves-light"><i class="ti-write"></i>&nbsp;Tambah Buku</a>
                    </div>

                    <?php echo form_open('buku/filter_kategori', array("id" => "mainform", "class" => "btn"));  ?>
                    <select class="form-control select2" name="filter_kategori" onchange="this.form.submit()">
                        <option value="">Pilih Kategori</option>
                        <?php foreach ($kategori as $data) : ?>
                            <option value="<?= $data['id_kategori'] ?>" <?php if ($filter_kategori == $data['id_kategori']) : ?>selected<?php endif ?>><?= $data['nama_kategori'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_close(); ?>

                    <?php echo form_open_multipart('buku/search', array("class" => "form-horizontal btn"));  ?>
                    <div class="search-form btn" style="margin-left: -30px;">
                        <div class="btn">
                            <input type="search" name="search" value="<?= $search ?>" class="form-control b-a" placeholder="Search">
                        </div>
                        <button name="submit" class="btn" type="submit"><i class="ti-search"></i></button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>

            <div class="row row-sm">

                <?php foreach ($result as $b) { ?>
                    <div class="col-md-4">
                        <div class="box box-block bg-white">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <img style="height: 20%;" width="100%;" class="img-fluid" src="<?php echo base_url(); ?>public/img/buku/<?= $b['gambar'] ?>" alt="">
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h5><?= $b['judul_buku'] ?></h5>
                                    <span class="tag tag-success"><?= $b['nama_kategori'] ?></span>
                                    <p>
                                    <address>
                                        Penerbit : <?= $b['penerbit'] ?><br>
                                        Tahun Terbit : <?= $b['tahun_terbit'] ?><br>
                                        Pengarang : <?= $b['pengarang'] ?>
                                    </address>
                                    </p>
                                    <a href="<?php echo base_url(); ?>buku/detail/<?= $b['id'] ?>" class="btn btn-outline-primary btn-rounded">Detail</a>
                                    <a href="<?php echo base_url(); ?>buku/edit/<?= $b['id'] ?>" class="btn btn-outline-primary btn-rounded">Ubah</a>
                                    <!-- <a href="" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $b['id']; ?>" class="btn btn-outline-danger btn-rounded">
                                        Hapus
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="m-b-1">
                <div class="clearfix">
                    <div class="pull-right">
                        <a href="" class="btn btn-default m-b-0-25 waves-effect waves-light">Total Buku <?= $total_rows ?></a>
                    </div>

                    <nav aria-label="Page navigation example">
                        <?php echo $this->pagination->create_links(); ?>
                    </nav>
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

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <?php echo form_open('buku/remove', array("class" => "")); ?>
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