<div class="site-content">
    <!-- Content -->
    <div class="content-area p-y-1">
        <div class="container-fluid">
            <h4>Ubah QR Code</h4>
            <ol class="breadcrumb no-bg m-b-1">
                <li class="breadcrumb-item"><a href="#">QR Code</a></li>
            </ol>
            <div class="box box-block bg-white">
                <?php echo form_open('chome/qredit');  ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">QR</label>
                    <input type="text" class="form-control" name="qr" value="<?php echo $qr ?>" placeholder="Masukan RQ Code" required="">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>