<div class="site-content">
    <!-- Content -->
    <br>
    <div class="content-area p-b-1">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="box bg-white">
                        <!-- <input type='file' onchange="readURL(this);" />
						<img id="blah" src="#" alt="your image" /> -->
                        <?php echo form_open_multipart('buku/edit_gambar/' . $buku['id']);  ?>
                        <div class="box box-block bg-white">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" class="form-control" name="fotonama" value="<?php echo $buku['gambar'] ?>">
                                    <h6>Pilih gambar Buku</h6>
                                    <!-- <input name="foto" type="file" id="input-file-now" class="dropify" data-max-file-size="10.5M" required /> -->
                                    <input type="file" name="foto" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url(); ?>public/img/buku/<?php echo $buku['gambar'] ?>" data-max-file-size="10.5M" required />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan Gambar</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="col-sm-8 col-md-9">
                    <div class="card m-b-0">
                        <ul class="nav nav-tabs nav-tabs-2 profile-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#stream" role="tab">Buku</a>
                            </li>
                        </ul>
                        <?php echo form_open_multipart('buku/edit/' . $buku['id']);  ?>
                        <div class="tab-content">
                            <div class="tab-pane active" id="stream" role="tabpanel">
                                <div class="box box-block bg-white">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Judul Buku</label>
                                        <input type="text" class="form-control" name="judul_buku" value="<?= $buku['judul_buku'] ?>" placeholder="Judul Buku" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kategori</label>
                                        <select name="kategori" class="form-control form-control-sm select2" required="">
                                            <option value="">Pilih kategori buku</option>
                                            <?php
                                            foreach ($kategori as $kt) {
                                                $selected = ($kt['id_kategori'] == $buku['kategori']) ? ' selected="selected"' : "";
                                                echo '<option value="' . $kt['id_kategori'] . '" ' . $selected . '>' . $kt['nama_kategori'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Penerbit</label>
                                        <input type="text" class="form-control" name="penerbit" value="<?= $buku['penerbit'] ?>" placeholder="Nama Penerbit" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tahun Terbit</label>
                                        <input type="text" class="form-control" value="<?= $buku['tahun_terbit'] ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" min="0" max="1000000" name="tahun_terbit" placeholder="Tahun Terbit" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pengarang</label>
                                        <input type="text" class="form-control" name="pengarang" value="<?= $buku['pengarang'] ?>" placeholder="Pengarang" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Bahasa</label>
                                        <input type="text" class="form-control" name="bahasa" value="<?= $buku['bahasa'] ?>" placeholder="Bahasa" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jumlah Halaman</label>
                                        <input type="number" class="form-control" value="<?= $buku['jumlah_halaman'] ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" min="0" max="1000000" name="jumlah_halaman" placeholder="Jumlah Halaman" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Stok Buku</label>
                                        <input type="number" class="form-control" value="<?= $buku['stok_buku'] ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" min="0" max="1000" name="stok_buku" placeholder="Stok Buku" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Label Buku</label>
                                        <input type="text" class="form-control" name="label_buku" value="<?= $buku['label_buku'] ?>" placeholder="Label Buku" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Sinopsis</label>
                                        <textarea class="form-control" name="sinopsis"><?= $buku['sinopsis'] ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var rupiah = document.getElementById("harga");
        rupiah.addEventListener("keyup", function(e) {
            rupiah.value = formatRupiah(this.value, "Rp. ");
        });

        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, "").toString(),
                split = number_string.split(","),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }

            rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
            return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
        }
    </script>