<div class="site-content">
    <!-- Content -->
    <div class="content-area p-y-1">
        <div class="container-fluid">
            <h4>Tambah Kategori</h4>
            <ol class="breadcrumb no-bg m-b-1">
                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
            </ol>
            <div class="box box-block bg-white">
                <?php echo form_open('kategori/add');  ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" required="">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>