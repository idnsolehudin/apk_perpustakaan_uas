<div class="header bg-primary pb-6"></div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Detail Data Pasien </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url() . "pasien/terima/" . $pasien['id']; ?>" method="post">
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">NIK</label>
                                        <input id="input-address" class="form-control" placeholder="Nik" name="nik" value="<?= $pasien['nik'] ?>" type="text" required disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Nama</label>
                                        <input id="input-address" class="form-control" placeholder="Nama" name="nama" value="<?= $pasien['nama'] ?>" type="text" required disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Jenis Kelamin</label>
                                        <select id="id_penduduk" name="jk" class="form-control" required disabled>
                                            <option value="">Jenis Kelamin</option>
                                            <option value="1" <?php if ($pasien['jk'] == 1) {
                                                                    echo "selected";
                                                                } ?>>Laki - Laki
                                            </option>
                                            <option value="2" <?php if ($pasien['jk'] == 2) {
                                                                    echo "selected";
                                                                } ?>>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">No HP</label>
                                        <input id="input-address" class="form-control" placeholder="Nomor HP" name="nama" value="<?= $pasien['no_hp'] ?>" type="text" required disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Pekerjaan</label>
                                        <input id="input-address" class="form-control" placeholder="Pekerjaan" name="pekerjaan" value="<?= $pasien['pekerjaan'] ?>" type="text" required disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Alamat</label>
                                        <textarea rows="4" class="form-control" name="alamat" placeholder="Alamat" disabled><?= $pasien['alamat'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Password</label>
                                        <input id="input-address" class="form-control" placeholder="Password" name="password" value="<?= $pasien['password'] ?>" type="text" required disabled>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Terima</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>