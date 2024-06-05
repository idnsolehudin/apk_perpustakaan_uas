<div class="site-content">
    <!-- Content -->
    <div class="content-area p-y-1">
        <div class="container-fluid">
            <h4>Tambah Mahasiswa</h4>
            <ol class="breadcrumb no-bg m-b-1">
                <li class="breadcrumb-item"><a href="#">Mahasiswa</a></li>
            </ol>
            <div class="box box-block bg-white">
                <?php echo form_open('mahasiswa/edit/' . $mahasiswa["id"]);  ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nim </label>
                    <input type="text" class="form-control" value="<?= $mahasiswa["nim"] ?>" placeholder="Nomor Induk Mahasiswa" required="" disabled>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama </label>
                    <input type="text" class="form-control" value="<?= $mahasiswa["nama"] ?>" name="nama" placeholder="Nama" required="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin </label>
                    <select id="id_penduduk" name="kelamin" class="form-control" required>
                        <option value="">Jenis Kelamin</option>
                        <option value="1" <?php if ($mahasiswa['kelamin'] == 1) {
                                                echo "selected";
                                            } ?>>Laki - Laki
                        </option>
                        <option value="2" <?php if ($mahasiswa['kelamin'] == 2) {
                                                echo "selected";
                                            } ?>>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Agama </label>
                    <input type="text" class="form-control" value="<?= $mahasiswa["agama"] ?>" name="agama" placeholder="Agama" required="">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir </label>
                    <input type="text" class="form-control" value="<?= $mahasiswa["tempat_lahir"] ?>" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir </label>
                    <input id="input-address" class="form-control" value="<?= $mahasiswa["tanggal_lahir"] ?>" placeholder="Tanggal" name="tanggal_lahir" type="date" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Telephone </label>
                    <input type="text" class="form-control" value="<?= $mahasiswa["no_telp"] ?>" name="no_telp" placeholder="Nomor telephone">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat </label>
                    <input type="text" class="form-control" value="<?= $mahasiswa["alamat"] ?>" name="alamat" placeholder="Alamat">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>